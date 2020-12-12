<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_multiple extends CI_Controller {
 
 public function __construct() 
	{
		//$this->load->model('files'); 
		//echo "Prak"; exit;
		parent::__construct();
		$this->load->model('module');
		$this->load->model('product_module');
		$this->load->library('session');
      //  $this->load->model('files'); 
	}
 function index()
 {
  $this->load->view("upload_multiple");
 }

 function upload()
 {
	 
	// echo 11;
	 //exit;
 // sleep(3);
 if ($this->input->server('REQUEST_METHOD') === 'POST')
	{
  if($_FILES["files"]["name"] != '')
  {
   $output = '';
   $config["upload_path"] = '../education/uploads/';
   $config["allowed_types"] = 'mp4|jpg|png';
   $this->load->library('upload', $config);
   $this->upload->initialize($config);
    $img_array=array();
	
   for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
   {
	   $time=time();
	  // $date = date("Y-m-d H:i:s");
    $_FILES["file"]["name"] = $time."_".$_FILES["files"]["name"][$count];
    $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
    $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
    $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
    $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];
    if($this->upload->do_upload('file'))
    {
     $data = $this->upload->data();

   echo  $output .= '
     <div class="col-md-3">
      <img src="'.site_base_url().'uploads/'.$data["file_name"].'" class="img-responsive img-thumbnail" />
     </div>
     ';
	
	 array_push($img_array,$data["file_name"]);
	 
    }
   }
   $eeeeee =json_encode($img_array);
   $add_img=array(		
		'product_image'=>$eeeeee
		);
   //if($idd = $this->product_module->insert_product_image($add_img))
  // {
	    // echo $idd;
		
		echo $output.'<input type="hidden" name="pid" value=""</input>';  
  // }
  }
 }
 }
 
  function update_imagee()
 {
	 //echo 122222; 
	
	 
   // echo  $id=$this->uri->segment(2);exit;
   //  $product_id=$this->input->post('PID'); 
   //  $image_id=$this->input->post('ID'); 
    // $select_image =$this->product_module->select_image($product_id);
	 //print_r( $select_image); exit;
//	$old_imagedatareturn= $select_image[0]['product_image'];
	//$old_data= json_decode($old_imagedatareturn,true);
    // print_r($aaaa); exit;
//exit;
	 if($_FILES["files"]["name"] != '')
	  {
		 // echo 1;exit;
	   $output = '';
	   $config["upload_path"] = '../uploads/';
	   $config["allowed_types"] = 'gif|jpg|png';
	   $this->load->library('upload', $config);
	   $this->upload->initialize($config);
		//$img_array=array();
		
	   for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
	   {
		   $time=time();
		  // $date = date("Y-m-d H:i:s");
		$_FILES["file"]["name"] = $time."_".$_FILES["files"]["name"][$count];
		$_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
		$_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
		$_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
		$_FILES["file"]["size"] = $_FILES["files"]["size"][$count];
		if($this->upload->do_upload('file'))
		{
		 $data = $this->upload->data();
		 //array_push($img_array,$data["file_name"]);
		 
		}
	   }
	  echo $eeeeee =json_encode($img_array);exit;
	   $add_img=array(		
			"$image_id"=>$data["file_name"]
			);
			$new_imag = $data["file_name"];
			foreach($old_data as $key=>$v)
			{
				if($key==$image_id)
				{
					$old_data[$key]=$new_imag;
				}
			}
			
			//print_r($old_data);
			 $new_update = json_encode($old_data);
			$upadte_data=array(
			'product_image'=>$new_update
			);
			print_r($upadte_data);//exit;
			
		//$new_array=perform_changes_on($aaaa,$add_img);
			//print_r($new_array);
			
	   }
				
	
 }
 
 
}