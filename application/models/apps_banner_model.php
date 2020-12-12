<?php

class Apps_model extends CI_Model {

    /**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
    */
	function validate($user_name, $password)
	{
		$this->db->where('user_name', $user_name);
		$this->db->where('pass_word', $password);
		
		$query = $this->db->get('talabservice_membership');

		if($query->num_rows == 1)
		{
			return true;
		}		
	}

    /**
    * Serialize the session data stored in the database, 
    * store it in a new array and return it to the controller 
    * @return array
    */
	function get_db_session_data()
	{
		$query = $this->db->select('user_data')->get('deal_ci_sessions');
		$user = array(); /* array to store the user data we fetch */
		foreach ($query->result() as $row)
		{
		    $udata = unserialize($row->user_data);
		    /* put data in array using username as key */
		    $user['user_name'] = $udata['user_name']; 
		    $user['is_logged_in'] = $udata['is_logged_in']; 
		}
		return $user;
	}

    /**
    * Store the new user's data into the database
    * @return boolean - check the insert
    */	
	function create_member()
	{

		$this->db->where('user_name', $this->input->post('username'));
		$query = $this->db->get('talabservice_membership');

        if($query->num_rows > 0){
        	echo '<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>';
			  echo "Username already taken";	
			echo '</strong></div>';
		}else{

			$new_member_insert_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email_addres' => $this->input->post('email_address'),			
				'user_name' => $this->input->post('username'),
				'pass_word' => md5($this->input->post('password'))						
			);
			$insert = $this->db->insert('talabservice_membership', $new_member_insert_data);
		    return $insert;
		}

	}//created new member here
	
	function check_useremail($member_username,$member_email)
	{
		$this->db->select('member_id');
		$this->db->where('user_name',$member_username);
		$this->db->where('email',$member_email);
		$this->db->from('talabservice_members');
		$query = $this->db->get();
		return $query->num_rows();
	}
	
	function check_username($member_username)
	{
		$this->db->select('member_id');
		$this->db->where('user_name',$member_username);
		$this->db->from('talabservice_members');
		$query = $this->db->get();
		return $query->num_rows();
	}
	
	function check_user($member_email){
		
		$this->db->select('*');
		$this->db->where('email', $member_email);
		$this->db->from('talabservice_members');
		$query = $this->db->get();
		return $query->num_rows();
	}
	
	 function store_user($data)
    {
		$insert = $this->db->insert('talabservice_members', $data);
	    return $insert;
	}
	
	
		function get_admin_email()
    {
		//echo "tttteeee";die;
		$this->db->select('setting_value');
		$this->db->where("setting_key","admin_email");
		$this->db->from('talabservice_setting');
		$query = $this->db->get();
		$admin_email=$query->row()->setting_value;
		return $admin_email;
	}
	
	function validate_user($email,$password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$this->db->from('talabservice_members');
		$query = $this->db->get();

		if($query->num_rows == 1)
		{
			return true;
		}		
	}
	
	function get_page_by_id($email,$password)
	{
		$this->db->select('*');
		$this->db->from('talabservice_members');
		$this->db->where('member_status','Active');
		$this->db->where('email',$email);	
		$this->db->where('password',$password);	
		$query = $this->db->get();
		return $query->result_array(); 
	}
	
	  function store_category($data)
    {
		$insert = $this->db->insert('talabservice_category', $data);
	    return $insert;
	}
	
	function get_category_list1($id)
    {
		$this->db->select('*');
		$this->db->where('category_status', 'Active');
		//$this->db->where('category_parent_id', '0');
		$this->db->where('category_id',$id );
		$this->db->from('talabservice_category');
		
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	
	function get_service_type1()
    {
		
		$this->db->select('*');
		$this->db->where('type_status', 'Active');
		//$this->db->where('type_id', $service_type_id);
	    $this->db->from('talabservice_type');
	    $query = $this->db->get();
		return $query->result_array(); 
		
	}
	
	function get_type()
    {
		$this->db->select('type_id, type_name');
		$this->db->where('type_status', 'Active');
	    $this->db->from('talabservice_type');
	    $query = $this->db->get();
		return $query->result_array(); 
		
	}
	
	function get_category($type_name)
    {
		$name=",".$type_name.",";
		$this->db->select('category_name,category_id');
		$this->db->like('service_type_id', $name);
		$this->db->where('category_parent_id','0');
	    $this->db->from('talabservice_category');
	    $query = $this->db->get();
		return $query->result_array(); 
		
	}
	
	
	function get_service_type_by_id($service_type_id)
    {
		
		$this->db->select('type_name');
		$this->db->where('type_status', 'Active');
		$this->db->where('type_id', $service_type_id);
	    $this->db->from('talabservice_type');
	    $query = $this->db->get();
		$type_name=$query->row()->type_name;
		return $type_name;
		
	}
	
	function get_country()
    {
		$this->db->select('country_id, shortCountry, country_name');
		$this->db->where('country_status', 'Active');
	    $this->db->from('talabservice_country');
	    $query = $this->db->get();
		return $query->result_array(); 
		
	}
	
	function get_city($shortCountry)
    {
		
		$this->db->select('Name');
		$this->db->where('CountryCode', $shortCountry);
		$this->db->where('city_status', 'Active');
	    $this->db->from('talabservice_city');
	    $query = $this->db->get();
		return $query->result_array(); 
		
	}
	
	function get_district($city)
    {
		
		$this->db->select('*');
		$this->db->where('Name', $city);
		$this->db->where('city_status', 'Active');
	    $this->db->from('talabservice_city');
	    $query = $this->db->get();
		return $query->result_array(); 
		
	}
	
	function get_dest($city)
    {
		
		$this->db->select('*');
		$this->db->where('Name', $city);
		$this->db->where('city_status', 'Active');
	    $this->db->from('talabservice_city');
	    $query = $this->db->get();
		return $query->result_array(); 
		
	}
	
function check_member_existing_email($email,$id)
	{
		$this->db->select('email');
		$this->db->from('talabservice_members');
		$this->db->where("email",$email);
		$this->db->where("member_id !=",$id);
		$this->db->where("member_status",'Active');
		$query=$this->db->get();
		$result = $query->num_rows();
		return $result;
	}	
	
	function update_account($data_to_update,$id)
	{ 
	   // echo "<pre>"; print_r($data_to_update);die;
		$this->db->where('member_id', $id);
		$this->db->update('talabservice_members', $data_to_update);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}
	
	function get_member_provider_details($member_id){
			$this->db->select('*');
			$this->db->from('talabservice_members');
			$this->db->where('member_id',$member_id);
			$query = $this->db->get();
			return $query->result_array();
		}
		
		function get_service_type_id($id)
    {
		//echo "tttt";die;
		$this->db->select('service_type');
		//$this->db->where('member_status', 'Active');
		$this->db->where('member_id', $id);
	    $this->db->from('talabservice_members');
	    $query = $this->db->get();
		$service_type=$query->row()->service_type;
		return $service_type; 
		
	}
	
	function get_service_type($service_type_id)
    {
		
		$this->db->select('*');
		$this->db->where('type_status', 'Active');
		$this->db->where('type_id', $service_type_id);
	    $this->db->from('talabservice_type');
	    $query = $this->db->get();
		return $query->result_array(); 
		
	}
		
		function check_old_password($id,$old_password)
		{
			$this->db->select('password');
			$this->db->where('password', $old_password);
			$this->db->where('member_id', $id);
			$this->db->from('talabservice_members');
			$query = $this->db->get();
			return $query->num_rows();
	
		}
		
		function update_account1($data_to_update,$id)
	     { 
	   // echo "<pre>"; print_r($data_to_update);die;
		$this->db->where('member_id', $id);
		$this->db->update('talabservice_members', $data_to_update);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}
	
	function get_service_member_category_by_id($member_id)
    {
		
		$this->db->select('service_category');
		//$this->db->where('member_status', 'Active');
		$this->db->where('member_id', $member_id);
	    $this->db->from('talabservice_members');
	    $query = $this->db->get();
		$service_category=$query->row()->service_category;
		return $service_category; 
		}
		
		function get_member_category_type_id($category_id)
    {
		
		$this->db->select('*');
		$this->db->where('category_status', 'Active');
		$this->db->where('category_id', $category_id);
	    $this->db->from('talabservice_category');
	    $query = $this->db->get();
		return $query->result_array(); 
		}
		
		function user_posted_project($user_id)
        {
		$this->db->select('*');
		//$this->db->where('category_status', 'Active');
		$this->db->where('user_id', $user_id);
	    $this->db->from('talabservice_services');
	    $query = $this->db->get();
		return $query->result_array(); 
		}
		
		
		function user_approved_project($freelancer_id)
        {
		$this->db->select('*');
		$this->db->where('service_status', 'Approved');
		$this->db->where('freelancer_id', $freelancer_id);
	    $this->db->from('talabservice_services');
	    $query = $this->db->get();
		return $query->result_array(); 
		}
		
		 function store_member_posted_service($data)
    {
		$insert = $this->db->insert('talabservice_services', $data);
	    return $insert;
	}
	
	
}
?>
