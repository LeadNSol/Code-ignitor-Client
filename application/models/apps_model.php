<?php

class Apps_model extends CI_Model {

    /**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
	*/
	function __construct()
    {
		$this->load->database();
		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
    }
      public function get_banner_apps()
	{
		 //echo 1; exit;
		   $this->db->select('*');
           $this->db->from('banner_apps');
		   $query_banner_data = $this->db->get();
		//echo $this->db->last_query();exit;
		   
	       $query_banner_data->num_rows; 		   
		   return $query_banner_data->result_array();
	}
	
	public function banner_apps_delete($id)
 {   
	$this->db->where('id', $id);
	if($this->db->delete('banner_apps'))
	{
	  echo 1; 
	}
    else{
	   echo 2;
   }	
 }
 public function get_banner_appsid($id)
	{
		   $this->db->select('*');
		   $this->db->where('id',$id);
           $this->db->from('banner_apps');
		   $query_banner_data = $this->db->get();
	       $query_banner_data->num_rows; 		   
		   return $query_banner_data->result_array();
	}
	public function edit_banner_apps($id,$update_banner)
	{
		//echo 1; die;
		 $this->db->where('id',$id);
		 if($this->db->update('banner_apps',$update_banner))
		 {
			 return true;
		 }
		 //echo $this->db->last_query(); die;
	}
	public function change_logo_apps($chg_logo)
	{
		 $this->db->where('id','1');
		 if($this->db->update('admin_option',$chg_logo))
		 {
			 //echo $this->db->last_query(); exit;
			 return true;
		 }
		 
	}
	public function getapps_logo()
	{
		   $this->db->select('apps_logo');
		   $this->db->where('id','1');
           $this->db->from('admin_option');
		   $query_banner_data = $this->db->get();
	       $query_banner_data->num_rows; 		   
		   return $query_banner_data->result_array();
	}
	public function app_modelcheckclassid($class_id)
   {
            $this->db->select('*');
		    $this->db->where('id',$class_id);
            $this->db->from('class');
		    $query_banner_data = $this->db->get();
	       $row= $query_banner_data->num_rows; 
	       if($row>0){
	           
	           return true;
	       }
	       else{
	           return false;
	       }
	}
	

	public function list_exam_api()
   {
        $this->db->select('*');
        $this->db->from('exam');
	    $query_banner_data = $this->db->get();
        $data= $query_banner_data->result_array(); 
        $exam_array=array();
        
        foreach($data as $value)
        {
        $ids=json_decode($value['subject_ids'],true);
        $this->db->select('subject_name');
        $this->db->from('subject');
        $this->db->where_in('s_id',$ids);
	    $query = $this->db->get();
        $dat= $query->result_array();
        $sub=array();
        foreach($dat as $vall){
            array_push($sub,$vall['subject_name']);
        }
          $exam_a=array(
              'id'=>$value['id'],
              'eaxm_name'=>$value['eaxm_name'],
              'amount'=>$value['amount'],
              'type'=>$value['type'],
              'live_date'=>$value['live_date'],
              'validation'=>$value['validation'],
              'subject_ids'=>$value['subject_ids'],
              'total_marks'=>$value['total_marks'],
              'exam_time'=>$value['exam_time'],
              'image'=>$value['image'],
              'exam_instruction'=>$value['exam_instruction'],
              'subject_names'=>$sub
              );
             array_push($exam_array,$exam_a); 
        }
        return $exam_array;	      
	}

public function get_plans_list_api()
   {
        $this->db->select('*');
        $this->db->from('plan_package');
	    $query_banner_data = $this->db->get();
        $data= $query_banner_data->result_array();
        $plan_array=array();
        foreach($data as $value)
        {
        $ids=json_decode($value['subject_ids'],true);
        $this->db->select('subject_name');
        $this->db->from('subject');
        $this->db->where_in('s_id',$ids);
	    $query = $this->db->get();
        $dat= $query->result_array();
        $sub=array();
        foreach($dat as $vall){
            array_push($sub,$vall['subject_name']);
        }
          $plan_a=array(
              'id'=>$value['id'],
              'plan_name'=>$value['plans_name'],
              'discount'=>$value['discount'],
              'total_amount'=>$value['total_amount'],
              'amount_after_discount'=>$value['amount_after_discount'],
              'subject_ids'=>$value['subject_ids'],
              'subject_names'=>$sub
              );
             array_push($plan_array,$plan_a); 
        }
        return $plan_array;	      
	}

	public function list_package_api()
   {
        $this->db->select('*');
        $this->db->from('packege');
	    $query_banner_data = $this->db->get();
        $data= $query_banner_data->result_array();
        $package_array=array();
        foreach($data as $value)
        {
        $ids=json_decode($value['subject_ids'],true);
        $this->db->select('subject_name');
        $this->db->from('subject');
        $this->db->where_in('s_id',$ids);
	    $query = $this->db->get();
        $dat= $query->result_array();
        $sub=array();
        foreach($dat as $vall){
            array_push($sub,$vall['subject_name']);
        }
          $packages=array(
              'id'=>$value['pack_id'],
              'price'=>$value['price'],
              'duration'=>$value['month'],
              'packageName'=>$value['pack_name'],
              'discount'=>$value['discount_rate'],
              'subject_ids'=>$value['subject_ids'],
              'subject_names'=>$sub
              );
             array_push($package_array,$packages); 
        }
        return $package_array;	      
	}
	public function list_exambyid_api($exam_id)
   {
            $this->db->select('*');
            $this->db->from('exam');
			$this->db->where('id',$exam_id);
		    $query_banner_data = $this->db->get();
	        $data= $query_banner_data->result_array(); 	  
	        $s_id=json_decode($data[0]['subject_ids'],true);
			$this->db->select('*');
            $this->db->from('subject');
			$this->db->where_in('s_id',$s_id);
		    $query_banner_dat = $this->db->get();
	        $data= $query_banner_dat->result_array();
			return $data;
			
			
			
	}
	public function list_subjectbyid_api($id)
	 {
		$this->db->select('subject_ids');
		$this->db->where('id',$id);
		$this->db->from('exam');
		$query = $this->db->get();
		$data=$query->result_array();
		$sub_ids=json_decode($data[0]['subject_ids'],true);
		//print_r($sub_ids);exit;
		 $this->db->select('s_id,subject_name,image');
         $this->db->where_in('s_id',$sub_ids);
         $this->db->from('subject');
         $query = $this->db->get();
         return $query->result_array();
		 
	 }

public function list_question_api($exam_id,$subject_id)
   {
            $this->db->select('*');
            $this->db->from('questionbank');
			$this->db->where('exam_id',$exam_id);
			$this->db->where('subject_id',$subject_id);
		    $query_banner_data = $this->db->get();
	       	$data= $query_banner_data->result_array(); 	  
	        return $data;	      
	}

public function list_popularvideo_api($class_id)
   {
		$this->db->select('*');
		$this->db->from('chapter');
		$this->db->where('class_id',$class_id);
		$this->db->where('popular_video',1);
		$query_banner_data = $this->db->get();
		$data= $query_banner_data->result_array();
		
		return $data;	      
	}

function fetch_subscription_byuserid_api($user_id)
	{
	    $date_today=date('Y-m-d');
	    $result=array();
        $this->db->select('*');
		$this->db->from('subject_subscription');
		$this->db->where('subject_subscription.user_id',$user_id);
		$this->db->where('subject_subscription.end_date >=',$date_today);
		//$this->db->join('packege', 'packege.pack_id = subscription.package_id');
	    $this->db->join('user', 'user.u_id = subject_subscription.user_id');
	    $this->db->join('class', 'class.id =subject_subscription.class_id');
	    $this->db->join('subject', 'subject.s_id =subject_subscription.subject_id');
		$query = $this->db->get();
		$subject_subs= $query->result_array();
		if($subject_subs){
		$this->db->select('exam_subscription.ex_subs_id,exam_subscription.exam_id,exam_subscription.user_id,exam_subscription.order_id,exam_subscription.start_date,exam_subscription.end_date,user.u_id,user.first_name,user.last_name,exam.id,exam.eaxm_name,exam.amount');
			$this->db->from('exam_subscription');
			$this->db->where('exam_subscription.end_date >=',$date_today);
			$this->db->where('exam_subscription.user_id',$user_id);
			$this->db->join('user', 'exam_subscription.user_id = user.u_id');
			  $this->db->join('exam', 'exam_subscription.exam_id = exam.id');
		    $query = $this->db->get();
	       $exam_subs= $query->result_array(); 	  
        $result=array(
            'subject_subscription'=>$subject_subs,
            'exam_subscription'=>$exam_subs
            );
            return $result;
		}
	 }
















	
}
?>
