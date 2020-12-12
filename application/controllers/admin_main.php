<?php
//print_r($main_content);exit;
/*class Main extends Secure_area */
//require_once APPPATH.'libraries/facebook/facebook.php';
//require_once APPPATH."/libraries/PHPExcel.php";
//require_once APPPATH."/libraries/excel.php";
class Admin_main extends CI_Controller
{
	/*
	Controllers that are considered secure extend Main, optionally a $module_id can

	be set to also check if a user can access a particular module in the system.

	*/
	public function __construct()
	{
		//echo "Prak"; exit;
		parent::__construct();

		$this->load->model('module');
		$this->load->model('product_module');
		$this->load->library('session');


		//$session_id = $this->session->userdata('session_id');

		//$data["session_user_name"]=$this->session->userdata('user_name');

		//$data["session_user_id"]=$this->session->userdata('user_id');



		 //$data['slider'] = $this->module->get_sliders();

		 //$data['categories'] = $this->module->get_categories();
		 
		
	}
 //See more at: https://arjunphp.com/how-to-use-phpexcel-with-codeigniter/#sthash.BtF9GqVX.dpuf
	function index()
	{
	    
	    
	    
	    
		if($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$user_email = $this->input->post('email');
				$password = md5($this->input->post('password'));


				$is_valid = $this->module->user_login_profile();

				if(!empty($is_valid))
				{
					redirect('go_home');
				}
				else // incorrect username or password
				{
					$data['flash_message'] =FALSE;
					//$this->load->view('');
				}
			}
        	$data['site_logo']=$this->module->getsite_logo();
			$this->load->view('admin/login',$data);

	}
		function home1()
		{
			
			
	  
			$this->load->view("home1");

		}
	function sendmail()
	{
		//echo 1; exit;
	   if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			$this->load->model('module');
			$member_email = $this->input->post('work_email');
			$this->load->library('email');
		    $admin_email= "uttam.9rajak@gmail.com";//$this->user_model->get_admin_email();

			 $data_to_store= array(

				'email' => $this->input->post('work_email'));

				//print_r()

				if($data=$this->module->create_member($member_email))
				{
				  // print($data);

				     $mail_confirmid=$data;

					$message='<html><body><table width="80%" border="0">

					<tr>

					<td colspan="2">

					<a href="'.site_base_url().'" target="_blank"><img src="'.base_url().'images/logo.png" border="0"></a>

					</td>

					</tr>

					<tr>

					<td colspan="2" style="height:10px;"></td>

					</tr>

					<tr>

					<td width="429" colspan="2">

					<table width="97%" border="0" style="margin:15px;font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#4a4a4a;font-weight:normal;margin-bottom:2px;">

					<tr>

					<td colspan="2"><h1>Please confirm your email</h1></td>

					</tr>

					<tr>

					<td colspan="2" height="10px;"></td>

					</tr>

					<tr>

					<td colspan="2" height="10px;">You received this message because you just signed up for dapulse.<br>

		Please confirm your email address to activate your account</td>



					</tr>

					<tr>

					<td colspan="2" height="10px;">

					<a href="'.site_base_url().'main/confirm_email/'.$mail_confirmid.'" target="_blank">CONFIRM EMAIL ADDRESS

		</a>

					</td>

					</tr>

					<tr>

					<td colspan="2" height="10px;"><p>Thanks,</p>

					  <p> the CCIS team.</p></td>

					</tr>

					</table>';

					//echo $member_email;

					//echo $admin_email;

					//echo $message;die;



						$config['protocol'] = 'sendmail';

						$config['mailpath'] = '/usr/sbin/sendmail';

						$config['charset'] = 'iso-8859-1';

						$config['wordwrap'] = TRUE;

						$config['mailtype'] = 'html';





						$this->email->initialize($config);

						//$this->email->from($admin_email);

						$this->email->from($admin_email, 'CCIS');

						$this->email->to($member_email);

						$this->email->subject('CCIS:Please confirm your email');

						$this->email->message($message);



						if($this->email->send())

										 {

											 $data2['email']=$member_email;

											 $this->load->view("mail",$data2);

											// redirect("main/confirm_email", $data);

										 }

					//echo $this->email->print_debugger();



						//echo "No exist"; die;

								 //if the insert has returned true then we show the flash message

				}



        }

	}


    function resendmail()
	{

	if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			$this->load->model('module');

			$member_email = $this->input->post('work_email');

			$this->load->library('email');

		    $admin_email= "uttam.9rajak@gmail.com";//$this->user_model->get_admin_email();

			 $data_to_store= array(

				'email' => $this->input->post('work_email'));

				//print_r()

				if($data=$this->module->create_member($member_email))

				{
				  // print($data);
				     $mail_confirmid=$data;
					$message='<html><body><table width="80%" border="0">
					<tr>
					<td colspan="2">
					<a href="'.site_base_url().'" target="_blank"><img src="'.base_url().'images/logo.png" border="0"></a>
					</td>
					</tr>
					<tr>
					<td colspan="2" style="height:10px;"></td>
					</tr>
					<tr>
					<td width="429" colspan="2">
					<table width="97%" border="0" style="margin:15px;font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#4a4a4a;font-weight:normal;margin-bottom:2px;">
					<tr>
					<td colspan="2"><h1>Please confirm your email</h1></td>
					</tr>
					<tr>
					<td colspan="2" height="10px;"></td>
					</tr>
					<tr>
					<td colspan="2" height="10px;">You received this message because you just signed up for dapulse.<br>
		              Please confirm your email address to activate your account</td>
					</tr>
					<tr>
					<td colspan="2" height="10px;">

					<a href="'.site_base_url().'main/confirm_email/'.$mail_confirmid.'" target="_blank">CONFIRM EMAIL ADDRESS
		            </a>
					</td>
					</tr>
					<tr>

					<td colspan="2" height="10px;"><p>Thanks,</p>

					  <p> the CCIS team.</p></td>

					</tr>

					</table>';

					//echo $member_email;

					//echo $admin_email;

					//echo $message;die;
						$config['protocol'] = 'sendmail';

						$config['mailpath'] = '/usr/sbin/sendmail';

						$config['charset'] = 'iso-8859-1';

						$config['wordwrap'] = TRUE;

						$config['mailtype'] = 'html';
						$this->email->initialize($config);

						//$this->email->from($admin_email);

						$this->email->from($admin_email, 'CCIS');

						$this->email->to($member_email);

						$this->email->subject('CCIS:Please confirm your email');

						$this->email->message($message);

						if($this->email->send())
										 {

											 echo 1;

										 }
					//echo $this->email->print_debugger();
					//echo "No exist"; die;

					//if the insert has returned true then we show the flash message

				}
             }

		}

	function forgot_password()
	{
		$this->load->view('admin/forgot_password');
	}

	function forgot_password_view()
	{
	   if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			$this->load->model('module');

			$member_email = $this->input->post('email');

			$this->load->library('email');

		    $admin_email= "uttam.9rajak@gmail.com";//$this->user_model->get_admin_email();
			 $data_to_store= array(
				'email' => $this->input->post('email'),
			 );

				//print_r()

				if($data = $this->module->forgot_password($member_email))

				{
				  // print_r($data); exit;

				  $id = $data;

					$message='<html><body><table width="80%" border="0">

					<tr>

					<td colspan="2">

					<a href="'.site_base_url().'" target="_blank"><img src="'.base_url().'images/logo.png" border="0"></a>

					</td>

					</tr>

					<tr>

					<td colspan="2" style="height:10px;"></td>

					</tr>

					<tr>

					<td width="429" colspan="2">

					<table width="97%" border="0" style="margin:15px;font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#4a4a4a;font-weight:normal;margin-bottom:2px;">

					<tr>

					<td colspan="2"><h1>Please Reset your password</h1></td>

					</tr>

					<tr>

					<td colspan="2" height="10px;"></td>

					</tr>

					<tr>

					<td colspan="2" height="10px;">You received this message because you forgot your password and request for new password CCIS.<br>

		Please to reset your password click on the link below.</td>



					</tr>

					<tr>

					<td colspan="2" height="10px;">

					<a href="'.site_base_url().'main/confirm_password/'.$id.'" target="_blank">Reset Your password

		</a>

					</td>

					</tr>

					<tr>

					<td colspan="2" height="10px;"><p>Thanks,</p>

					  <p> the CCIS team.</p></td>

					</tr>

					</table>';

					//echo $member_email;

					//echo $admin_email;

                   // echo $message;die;

						$config['protocol'] = 'sendmail';

						$config['mailpath'] = '/usr/sbin/sendmail';

						$config['charset'] = 'iso-8859-1';

						$config['wordwrap'] = TRUE;

						$config['mailtype'] = 'html';

						$this->email->initialize($config);

						//$this->email->from($admin_email);

						$this->email->from($admin_email, 'CCIS');

						$this->email->to($member_email);

						$this->email->subject('CCIS:Please reset your password');

						$this->email->message($message);



						if($this->email->send())

						 {

							 echo 1;


						 }
				}

             }

		}

	function reset_password()
	{
	      if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			$password = $this->input->post('password');
			$confirm_password = $this->input->post('confirm_password');
			$id = $this->input->post('userid');

			if($password==$confirm_password){

				    $new_password = array(
					'password' =>md5($password)
				  );
             //print_r($new_password); exit;
				$this->db->where('id', $id);
				if($update_password = $this->db->update('create_members',$new_password))
				{
					echo 1;

				}
			}
		}
	}
 function about_us()
 {


         $data['about']=$this->module->list_about_data();
         $data['main_content'] ='admin/about_us';
         $this->load->view('includes/template', $data);
 }
function edit_about($id)
 {

   $id=$this->uri->segment(2);

  if ($this->input->server('REQUEST_METHOD') === 'POST')
   {

    if($_FILES['banner_img']['name']!='')
    {
     //echo "<pre>" ; print_r("$_FILES"); exit;
     //echo $_FILES['banner_img']['name']."koko";exit;
                $type_profile=$this->input->post('type_profile');
     if(!is_dir('../uploads/gallery/')) {
      umask(0);
      mkdir('../uploads/gallery/',0777);
     }

     $time=time();
     $config['upload_path'] = '../uploads/gallery/';
     $config['file_name'] = $time."_".$_FILES['banner_img']['name'];

     //$main_image=$time."_".$_FILES['small_image']['name'];
     $UploadFile=$config['file_name'];

     $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['image_library'] = 'gd2';
     $config['overwrite'] = TRUE;
     $config['encrypt_name'] = FALSE;
     $config['remove_spaces'] = TRUE;
     $config['max_size']   = '1024';

     $this->load->library('upload',$config);

     if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
     if ( ! $this->upload->do_upload('banner_img'))
     {
      echo 'error';
     } else {

      $this->upload->initialize($config);

      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      //$config['width']           = 1000;
      //$config['height']           = 667;
      $config['new_image']       =    '../uploads/gallery/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];

      $this->load->library('image_lib',$config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());

      }
      $this->image_lib->clear();


      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      //$config['width']           = 1000;
     // $config['height']          = 667;
      $config['new_image']       =    '../uploads/gallery/thumb/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';

      $this->image_lib->initialize($config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());
      }
      $this->image_lib->clear();
        }

       $old_photo=$this->input->post('old_photo', TRUE);
     if($old_photo != '')
     {
      if(file_exists(realpath('../uploads/gallery/'.$old_photo)))
      {
      unlink(realpath('../uploads/gallery/'.$old_photo));
      }
     }
    }else
            {
   $UploadFile=$this->input->post('old_photo');
            }
     $add_galery= array(
    'img_about' => $UploadFile,

 'about_mission' => $this->input->post('about_mission'),
 'description' => $this->input->post('description'),
    );
 //print_r($add_galery);exit;
     if($this->module->update_about_by_id($id,$add_galery))
     {


   }
      }


  $data['edit_about']=$this->module->get_about_data_by_id($id);
  $data['main_content'] = 'admin/edit_about';
  $this->load->view('includes/template', $data);
 }
	function contact_us()
	{
		$userdata=$this->session->all_userdata();
        @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		if($this->input->server('REQUEST_METHOD')=='POST')
		{
			$contact_arr=array(
			'address'=>$this->input->post('address'),
			'moblie'=> $this->input->post('contact_mobile'),
			'email'=>$this->input->post('contact_email'),
			'working_hour'=>$this->input->post('working_hour'),
			'lat'=>$this->input->post('lat'),
			'lng'=>$this->input->post('lng'),
			'get_direction'=>$this->input->post('direction')
			);
			//echo"<pre>";
			//print_r($about_arr);exit;
			if($update_about_is=$this->module->update_contact($contact_arr))
			{
					$data['flash_message'] =TRUE;
			}
			else
			{
				$data['flash_message'] =FALSE;
			}

		}
		 $data['get_contact']=$this->module->get_contact_us();
		 $data['main_content'] = 'admin/contact';
         $this->load->view('includes/template', $data);

	}



	function new_accounts(){

		$this->load->view("new-accounts");

	}





	function create_member()
	{
		$userdata=$this->session->all_userdata();
        @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		$this->load->helper('form');
		$this->load->model('module');

		//$this->load->library('form_validation');
		$userdata=$this->session->all_userdata();
            $user_type=$userdata['user_type'];//die;
            $user_id=$userdata['id'];//die;
			if(($user_id==''))
		{
			redirect('home');

		}
		if ($this->input->server('REQUEST_METHOD') === 'POST'){


		    $member_email=$this->input->post('member_email');
			$save_data = array(
			'email'=>$this->input->post('member_email'),
			'password'=>md5($this->input->post('password')),
		    'first_name'=>$this->input->post('first_name'),
		    'last_name'=>$this->input->post('last_name'),
		    'designation'=>$this->input->post('designation'),
		    'iu_number'=>$this->input->post('iu_number'),
			'carplate_Number'=>$this->input->post('carplate_Number'),
		    'phone'=>$this->input->post('member_phone'),
		    'user_type'=>$this->input->post('user_type'),
		    'dob'=>$this->input->post('dob'),
		    'address'=>$this->input->post('address'),
			'created' =>  date('d-m-y')

			);


			if($this->module->check_useremail($member_email)){

					$data['exist_message'] = TRUE;


				 }
			else
			{
				$this->module->member_insert($save_data);
				$data['flash_message'] = TRUE;
			}

		}
	      $data['main_content'] = 'create_member';
	      $this->load->view('include/template', $data);

	     //$this->load->view('create_member',$data);



	}

		function edit_profile()
	{
		$userdata=$this->session->all_userdata();
        @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		$this->load->helper('form');
		$this->load->model('module');
	    $userdata=$this->session->all_userdata();
        $user_type=$userdata['user_type'];//die;

            $user_id=$userdata['id'];//die;
		if(($user_id==''))
		{
			redirect('home');

		}
		if ($this->input->server('REQUEST_METHOD') === 'POST'){

		    $member_data=array(
		   'email'=>$this->input->post('member_email'),
		   'first_name'=>$this->input->post('first_name'),
		  'last_name'=>$this->input->post('last_name'),
		  'designation'=>$this->input->post('designation'),
		  'iu_number'=>$this->input->post('iu_number'),
		  'carplate_Number'=>$this->input->post('carplate_Number'),
		  'phone'=>$this->input->post('member_phone'),
		  'user_type'=> $user_type,
		  'dob'=>$this->input->post('dob'),
		  'address'=>$this->input->post('address')

		);
		//echo "<pre>";print_r($member_data);exit;
		if($this->module->update_member_details($user_id,$member_data))
		{
		$data['update_message'] = TRUE;
			}
			else {
				$data['update_message'] = FALSE;
			}
		}

		  $data['member_details']=$this->module->edit_member_details($user_id);
	      $data['main_content'] = 'edit_profile';
	      $this->load->view('include/template', $data);

	     //$this->load->view('create_member',$data);



	}
	 function browse_members()
	 {

    	$userdata=$this->session->all_userdata();
        @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
	    $data['results'] = $this->module->get_contents_create_members();
        $data['main_content'] = 'admin/browse_members';
        $this->load->view('includes/template', $data);
    }



	function persional_details()
	{
		$userdata=$this->session->all_userdata();
        @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			 $id=$this->uri->segment(3);
			 $persinal_data = array(
				'f_name' => $this->input->post('username'),

				'password' => $this->input->post('password'),

				'phone' => $this->input->post('phone_no')

		      );

			// print_r($persinal_data);exit;

			$update_personals=$this->module->update_persional($id,$persinal_data);

			if($update_personals)
			{
				 $this->load->view("team-details");

			}
			//return $update_personals;
		}

	}
	function go_home()
	{
		$this->load->model('module');
        $userdata=$this->session->all_userdata();
        @$user_type=$userdata['user_type'];
        @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect('admin');
		}
		$data['main_content'] = 'admin/home';
		$this->load->view('includes/template', $data);
		// if($user_type == "admin"){
		
		// $this->load->view('includes/template', $data);
		// }else{
		// 	$this->load->view('includes/template_user', $data);
		// }

		//$this->load->view('admin/home');
	}
	 function banner_change()
	{
		$userdata=$this->session->all_userdata();
        @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		$data['main_content'] = 'admin/banner_change';
        $this->load->view('includes/template', $data);

		//$this->load->view('admin/home');
	}



	 function update_banner()
	{
		 $userdata=$this->session->all_userdata();
		 @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		$data['banner_img']=$this->module->get_banner_img();
		$data['main_content'] = 'admin/update_banner';
        $this->load->view('includes/template', $data);

		//$this->load->view('admin/home');
	}

	  function edit_banner($id)
	{
		 $userdata=$this->session->all_userdata();
		 @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{

				if($_FILES['banner_img']['name']!='')
				{
					//echo "<pre>" ; print_r("$_FILES"); exit;
					//echo $_FILES['banner_img']['name']."koko";exit;
                $type_profile=$this->input->post('type_profile');
					if(!is_dir('../uploads/banner/')) {
						umask(0);
						mkdir('../uploads/banner/',0777);
					}

					$time=time();
					$config['upload_path'] = '../uploads/banner/';
					$config['file_name'] = $time."_".$_FILES['banner_img']['name'];

					//$main_image=$time."_".$_FILES['small_image']['name'];
					$UploadFile=$config['file_name'];

					$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
				    $config['image_library'] = 'gd2';
					$config['overwrite'] = TRUE;
					$config['encrypt_name'] = FALSE;
					$config['remove_spaces'] = TRUE;
					$config['max_size']   = '2024';

					$this->load->library('upload',$config);

					if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
					if ( ! $this->upload->do_upload('banner_img'))
					{
						echo 'error';
					} else {

						$this->upload->initialize($config);

						$source_image=realpath('../uploads/banner/'.$UploadFile);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           = 993;
						$config['height']           = 420;
						$config['new_image']       =    '../uploads/banner/'.$time."_".$_FILES['banner_img']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];

						$this->load->library('image_lib',$config);

						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());

						}
						$this->image_lib->clear();


						$source_image=realpath('../uploads/banner/'.$UploadFile);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           = 200;
						$config['height']          = 221;
						$config['new_image']       =    '../uploads/banner/thumb/'.$time."_".$_FILES['banner_img']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
						$this->image_lib->initialize($config);

						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());
						}
						$this->image_lib->clear();
				   	}

				   $old_photo=$this->input->post('old_photo', TRUE);
					if($old_photo != '')
					{
						if(file_exists(realpath('../uploads/banner/'.$old_photo)))
						{
						unlink(realpath('../uploads/banner/'.$old_photo));
						}
					}

				} else {
					$UploadFile=$this->input->post('old_photo', TRUE);
				}
				$update_banner=array(
				'image'=>$UploadFile,
				'title'=>$this->input->post('title'),
				'description'=>$this->input->post('deccription')
				);
				if($banner_img=$this->module->edit_banner($id,$update_banner))
				{
					//echo 1;exit;
					redirect('update_banner');
				}

			}
		$data['get_banner']=$this->module->get_banner_byid($id);
		$data['main_content'] = 'admin/edit_banner';
        $this->load->view('includes/template', $data);

		//$this->load->view('admin/home');
	}



	 //function

	function product_details()
	{
		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		$this->load->model('module');
		$this->load->library('session');
		//$this->load->library('breadcrumb');
		$data["session_user_name"]=$this->session->userdata('user_name');

		$data["session_user_id"]=$this->session->userdata('user_id');

		$data['categorys'] = $this->module->get_categories_api();

		$data['categories'] = $this->module->get_categories();

		//$data['product'] = $this->module->get_product_details($id);

		//$data['product'] = $this->module->get_product();

		$this->load->view("product_details",$data);

	}






	function aboutus()

	{
        $userdata=$this->session->all_userdata();
		$this->load->model('module');

		$this->load->library('session');



		//$this->load->library('breadcrumb');



		$data["session_user_name"]=$this->session->userdata('user_name');

		$data["session_user_id"]=$this->session->userdata('user_id');

		$data['categorys'] = $this->module->get_categories_api();

		$data['categories'] = $this->module->get_categories();

		$data['contect'] = $this->module->get_aboutus();

		$this->load->view("aboutus",$data);



	}



	function faq()
	{
		$this->load->model('module');
		$this->load->library('session');

		//$this->load->library('breadcrumb');

		$data["session_user_name"]=$this->session->userdata('user_name');

		$data["session_user_id"]=$this->session->userdata('user_id');


		$data['categories'] = $this->module->get_categories();

		$data['faq_details'] = $this->module->get_faq();

		$this->load->view("faq",$data);



	}


function termsconditions()

	{

		$this->load->model('module');

		$this->load->library('session');



		//$this->load->library('breadcrumb');



		$data["session_user_name"]=$this->session->userdata('user_name');

		$data["session_user_id"]=$this->session->userdata('user_id');

		$data['categorys'] = $this->module->get_categories_api();

		$data['categories'] = $this->module->get_categories();

		$data['contect'] = $this->module->get_termsconditions();

		$this->load->view("termsconditions",$data);



	}



	function blog()

	{

		$this->load->model('module');

		$this->load->library('session');



		//$this->load->library('breadcrumb');



		$data["session_user_name"]=$this->session->userdata('user_name');

		$data["session_user_id"]=$this->session->userdata('user_id');



		$data['categories'] = $this->module->get_categories();

		$data['categorys'] = $this->module->get_categories_api();

		$data['blog'] = $this->module->get_blog();

		$this->load->view("blog",$data);



	}

	function termsofuse()

	{

		$this->load->model('module');

		$this->load->library('session');



		//$this->load->library('breadcrumb');



		$data["session_user_name"]=$this->session->userdata('user_name');

		$data["session_user_id"]=$this->session->userdata('user_id');



		$data['categories'] = $this->module->get_categories();

		$data['categorys'] = $this->module->get_categories_api();

		$data['termsofuse'] = $this->module->get_termsofuse();

		$this->load->view("termsofuse",$data);



	}

	function privacy()

	{

		$this->load->model('module');

		$this->load->library('session');



		//$this->load->library('breadcrumb');



		$data["session_user_name"]=$this->session->userdata('user_name');

		$data["session_user_id"]=$this->session->userdata('user_id');



		$data['categories'] = $this->module->get_categories();

		$data['categorys'] = $this->module->get_categories_api();

		$data['privacy'] = $this->module->get_privacy();

		$this->load->view("privacy",$data);



	}

	function security()

	{

		$this->load->model('module');

		$this->load->library('session');



		//$this->load->library('breadcrumb');



		$data["session_user_name"]=$this->session->userdata('user_name');

		$data["session_user_id"]=$this->session->userdata('user_id');



		$data['categories'] = $this->module->get_categories();

		$data['categorys'] = $this->module->get_categories_api();

		$data['security'] = $this->module->get_security();

		$this->load->view("security",$data);



	}



	function helpfaq()

	{

		$this->load->model('module');

		$this->load->library('session');



		//$this->load->library('breadcrumb');



		$data["session_user_name"]=$this->session->userdata('user_name');

		$data["session_user_id"]=$this->session->userdata('user_id');

		$data['categorys'] = $this->module->get_categories_api();

		$data['categories'] = $this->module->get_categories();

		$data['helpfaq'] = $this->module-> get_helpfaq();

		$this->load->view("helpfaq",$data);



	}

	function careers()

	{

		$this->load->model('module');

		$this->load->library('session');



		//$this->load->library('breadcrumb');



		$data["session_user_name"]=$this->session->userdata('user_name');

		$data["session_user_id"]=$this->session->userdata('user_id');

		$data['categorys'] = $this->module->get_categories_api();

		$data['categories'] = $this->module->get_categories();

		$data['careers'] = $this->module->get_careers();

		$this->load->view("careers",$data);



	}



	function logout()

	{



		$this->session->set_userdata('email', '');

		$this->session->set_userdata('id', '');

		$this->session->set_userdata('f_name', '');

		$this->session->sess_destroy();

	    redirect('');

		// but, don't destroy this session

		//$this->session->userdata('admin_id');

	}


/*
function dow_excel()
{
	//echo 'okkkk';exit;
	   header('Content-type: text/csv');
       header('Content-disposition: attachment;filename=Project-details.csv');


       //header('Content-color: attachment;filename=Project-details.csv');


	 $this->load->dbutil();

	        $this->load->helper('file');

	        $this->load->helper('download');

	        $delimiter = ",";

	        $newline = "\r\n";

	        $filename = "Project-details.csv";
	          $result = $this->module->get_project_to_excel();

             //print_r($project);exit;
	        //$query = "SELECT project_name,description,people,deadline FROM project_tracking WHERE 1";

	      //$result = $this->db->query($query);
           // print_r($result);exit;

	          echo "Project Name,People,Text,Deadline,Due Date".PHP_EOL;

	        	foreach ($result as $key => $value) {
	        		//echo $value['project_name'];

                echo "".$value['project_name'].",".$value['people'].",".$value['description'].",".$value['deadline'].",".$value['date']."".PHP_EOL;

	        		//echo "($value['project_name'],$value['project_name'])".PHP_EOL;



               //echo "11,22222,5555,88888".PHP_EOL;
            }

             //$data = $this->dbutil->csv_from_result($result, $delimiter, $newline);

	        //force_download($filename, $data);
	        exit();
}
*/
 function excel_export($exid)
 {
	//echo  $exid; exit;

	 $val=explode("_",$exid);
	 $id=$val[0];
	 $bd=$val[1];
	 //$board_name='project1';
	 $this->load->library('excel');
    //Create a new Object
    $objPHPExcel = new PHPExcel();
    // Set the active Excel worksheet to sheet 0
    $objPHPExcel->setActiveSheetIndex(0);
    $phpExcel = new PHPExcel();
    $header=$this->module->get_header($id);
    $board_name=$this->module->get_board_name($bd);

    $row_data=$this->module->row_details($id);
	$head_data=json_decode($header[0]['head_data'], true);
	//$footer_data=json_decode($header[0]['footer_data'], true);
	$group_name=$header[0]['project_name'];
    $heading=$head_data;
    $rowNumberH = 3; //set in which row title is to be printed
    $colH = 'B'; //set in which column title is to be printed
    $objPHPExcel->getActiveSheet()->setCellValue('A1',$board_name[0]['menu_name']);
    $objPHPExcel->getActiveSheet()->setCellValue('A2',$group_name);
    $objPHPExcel->getActiveSheet()->setCellValue('A3','Name');
   foreach($heading as $h){

                 $objPHPExcel->getActiveSheet()
				->getStyle($colH.$rowNumberH.':'.$colH.$rowNumberH)
				->getFill()
				->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
				->getStartColor()
				->setRGB('e2e2e2');

        $objPHPExcel->getActiveSheet()->setCellValue($colH.$rowNumberH,$h);
        $colH++;
    }
     $rowCount = 4;
    foreach($row_data as $key=>$excel)
    {
	    $colH2 = 'A';
       $row= json_decode($excel['row_data'],true);

	     foreach($row as $key=>$v)
		 {
		  //if()
			 $classbody=explode("_",$key);
	         $classbody[0];
			 if($classbody[0]=='Status')
			 {
		           @$statusbody=explode("_",$v);
                   @$statusbody[0];
                   @$statusbody[1];
				   if($statusbody[0]!='')
				   {
					   $value=$statusbody[0];
				   }
				   else
				   {
					  $value=$v;
				   }
				   if(@$statusbody[1]!='')
				   {
					   $color=$statusbody[1];
				   }
				   else
				   {
					 $color='c4c4c4';

				   }
				 $objPHPExcel->getActiveSheet()

				->getStyle($colH2.$rowCount.':'.$colH2.$rowCount)
				->getFill()
				->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
				->getStartColor()
				->setRGB($color);
				 $objPHPExcel->getActiveSheet()->SetCellValue($colH2.$rowCount, $value);
			 }
			else if($classbody[0]=='Person')
			 {

				if($v=='Person')
				{
					$v='';
				}
				else
				{
					 $name=$this->module->get_image($v);
					 foreach($name as $key=>$image_val)
					 {
					  $v= $image_val['first_name']." ".$image_val['last_name'];
					 }

				}
				$objPHPExcel->getActiveSheet()->SetCellValue($colH2.$rowCount, $v);
			 }
			 else{

                  $objPHPExcel->getActiveSheet()->SetCellValue($colH2.$rowCount, $v);
			 }
		 $colH2++;
		 }
		 $rowCount++;
   }
   // $rowNumberH = 5; //set in which row title is to be printed
   // $colH2 = ++$colH2; //set in which column title is to be printed

  // $objPHPExcel->getActiveSheet()->SetCellValue($colH2.$rowNumberH, 'uttam');




 // $objPHPExcel->getActiveSheet()->setCellValue($colH.$rowCount, 'uttam');
    // Instantiate a Writer
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');


    header('Content-Type: application/vnd.ms-excel');
    header("Content-Disposition: attachment;filename='".$board_name[0]['menu_name'].$group_name.".xls");
    header('Cache-Control: max-age=0');

    $objWriter->save('php://output');
    exit();
}

 function project_details()
 {
	 $this->load->library('excel');
    //Create a new Object
    $objPHPExcel = new PHPExcel();
    // Set the active Excel worksheet to sheet 0
    $objPHPExcel->setActiveSheetIndex(0);

   $phpExcel = new PHPExcel();



    $heading=array('Invoice No','Invoice Date','Invoice Amt','Payment Amt','Payment Advice','Payment Date (After GST)'); //set title in excel sheet
    $rowNumberH = 1; //set in which row title is to be printed
    $colH = 'A'; //set in which column title is to be printed
    foreach($heading as $h){
        $objPHPExcel->getActiveSheet()->setCellValue($colH.$rowNumberH,$h);
        $colH++;
    }

    $export_excel = $this->db->query("select * from  project_datails")->result_array();
    $rowCount = 2; // set the starting row from which the data should be printed
    foreach($export_excel as $key=>$excel)
    {


        $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $excel['invoice_no']);
        $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $excel['invoice_date']);
         $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $excel['Invoice_amt']);
          $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $excel['payment_amt']);
		  $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $excel['payment_advice']);
		  $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $excel['payment_date']);

        $rowCount++;
    }

    // Instantiate a Writer
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');


    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="project-details."".xls"');
    header('Cache-Control: max-age=0');

    $objWriter->save('php://output');
    exit();
}
 function project_details2()
 {
	 $this->load->library('excel');
    //Create a new Object
    $objPHPExcel = new PHPExcel();
    // Set the active Excel worksheet to sheet 0
    $objPHPExcel->setActiveSheetIndex(0);

   $phpExcel = new PHPExcel();



    $heading=array('TAC','Type of Service','Date of Service','Time of Service'); //set title in excel sheet
    $rowNumberH = 1; //set in which row title is to be printed
    $colH = 'A'; //set in which column title is to be printed
    foreach($heading as $h){
        $objPHPExcel->getActiveSheet()->setCellValue($colH.$rowNumberH,$h);
        $colH++;
    }

    $export_excel = $this->db->query("select * from  project_details_tbl2")->result_array();
    $rowCount = 2; // set the starting row from which the data should be printed
    foreach($export_excel as $key=>$excel)
    {


        $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $excel['tac']);
        $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $excel['type_service']);
        $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $excel['date_service']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $excel['time_service']);

        $rowCount++;
    }

    // Instantiate a Writer
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');


    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="project-details."".xls"');
    header('Cache-Control: max-age=0');

    $objWriter->save('php://output');
    exit();
}


	function projectdetails()
	{

		 $userdata=$this->session->all_userdata();
         $user_type=$userdata['user_type'];//die;
         $user_id=$userdata['id'];
		  if(($user_id==''))
         {
           redirect('home');

         }
	         $id=$this->uri->segment(2);
	         $pid=$this->uri->segment(3);
			 $data['table_data']=$this->module->get_table_data($id,$pid);
			 $data['table_data2']=$this->module->get_table_data2($id,$pid);
			// $data['project_details']=$this->module->get_detailsby_id($id);
			 $data['project_details_company']=$this->module->project_details_company_details($id);
		     $data['main_content'] ='project_deatils';
             $this->load->view('include/template', $data);
	}








	 function edit_member()
	 {
		//echo 1; exit;

		 $userdata=$this->session->all_userdata();
         $user_id=$userdata['id'];//die;
		  $id=$this->uri->segment(2);

	if(($user_id==''))

       {

          redirect('home');


        }

		 if ($this->input->server('REQUEST_METHOD') === 'POST')

        {
			$member_data=array(
			'username'=>$this->input->post('username'),
			'email'=>$this->input->post('email'),
		    'first_name'=>$this->input->post('first_name'),
		    'last_name'=>$this->input->post('last_name'),
		    'city'=>$this->input->post('city'),
		    'state'=>$this->input->post('state'),
		    'country'=>$this->input->post('country'),
		    'fitness_type'=>$this->input->post('fitness_type'),

			);
			//print_r($member_data);exit;
			if($this->module->update_member_details($id,$member_data))
			{
				redirect('main/browse_members');
			}

		}
		 $data['member_details']=$this->module->edit_member_details($id);
		 $data['main_content'] ='admin/edit_member';
         $this->load->view('includes/template', $data);

	 }


	function chn_password()
	{
			$userdata=$this->session->all_userdata();
     @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
		   //echo 1;
		   $email=$this->input->post('email');
		   $password=$this->input->post('password');
		   $this->module->check_password($email,$password);

		}
		 $data['main_content'] = 'admin/change_password';
         $this->load->view('includes/template', $data);
		 //$this->load->view('admin/change_password');

	}
	function chn_password_new()
	{
		 if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
		   //echo 1;
		   $email=$this->input->post('email');
		   $password=$this->input->post('password');
		   $this->module->check_password($email,$password);

		}

		 //$this->load->view('admin/change_password');

	}
	function profile()
	{    $this->load->library('session');
         $userdata=$this->session->all_userdata();
         $id=$userdata['id'];//die;

	if(($id==''))

		{
          redirect('home');
        }

		 if ($this->input->server('REQUEST_METHOD') === 'POST')

        {
			$member_data=array(
			'email'=>$this->input->post('email'),
		    'first_name'=>$this->input->post('first_name'),
		    'last_name'=>$this->input->post('last_name'),
		    'city'=>$this->input->post('city'),
		    'state'=>$this->input->post('state'),
		    'country'=>$this->input->post('country')

			);
			//print_r($member_data);exit;
			if($this->module->update_member_details($id,$member_data))
			{
				redirect('profile');
			}

		}
		 $data['admin_profile']=$this->module->get_admindata();
		 $data['main_content'] = 'admin/view_profile';
         $this->load->view('includes/template', $data);
		 //$this->load->view('admin/change_password');

	}

	function option()
	{
	 $userdata=$this->session->all_userdata();
     @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}

		 if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
		   //echo 1;
		   $update_option=array(
		   'admin_email'=>$this->input->post('admin_email'),
		   'site_url'=>$this->input->post('site_url'),
		   'Location'=>$this->input->post('Location'),
		   'Fax'=>$this->input->post('Fax'),
		   'Phone'=>$this->input->post('Phone'),
		   'Alternate_Phone'=>$this->input->post('Alternate_Phone'),
		   'Paypal_Id'=>$this->input->post('Paypal_Id')
		   );
		   $this->module->set_adminoption($update_option);
		  //print_r($update_option);exit;


		}

		 $data['option_data']=$this->module->get_adminoption();
		 //print_r($data); exit;
		 $data['main_content'] = 'admin/option';
         $this->load->view('includes/template', $data);
		 //$this->load->view('admin/change_password');

	}


	function logo_change()
	{
	 $userdata=$this->session->all_userdata();
     @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
		   //echo 1;
		 if($_FILES['change_logo']['name']!='')
		{
                $type_profile=$this->input->post('type_profile');
					if(!is_dir('images/')) {
						umask(0);
						mkdir('images/',0777);
					}

					$time=time();
					$config['upload_path'] = 'images/';
					$config['file_name'] = $time."_".$_FILES['change_logo']['name'];

					//$main_image=$time."_".$_FILES['small_image']['name'];
					$UploadFile=$config['file_name'];

					$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
				    $config['image_library'] = 'gd2';
					$config['overwrite'] = TRUE;
					$config['encrypt_name'] = FALSE;
					$config['remove_spaces'] = TRUE;
					$config['max_size']   = '1024';

					$this->load->library('upload',$config);

					if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
					if ( ! $this->upload->do_upload('change_logo'))
					{
						echo 'error';
					} else {

						$this->upload->initialize($config);

						$source_image=realpath('images/'.$UploadFile);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           =515;
						$config['height']           = 162;
						$config['new_image']       =    'images/'.$time."_".$_FILES['change_logo']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];

						$this->load->library('image_lib',$config);

						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());

						}
						$this->image_lib->clear();


						$source_image=realpath('images/'.$UploadFile);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           = 200;
						$config['height']          = 221;
						$config['new_image']       =    'images/thumb/'.$time."_".$_FILES['change_logo']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
						$this->image_lib->initialize($config);

						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());
						}
						$this->image_lib->clear();
				   	}

				   $old_photo=$this->input->post('old_photo', TRUE);
					if($old_photo != '')
					{
						if(file_exists(realpath('images/'.$old_photo)))
						{
						unlink(realpath('images/'.$old_photo));
						}
					}

				} else {
					$UploadFile=$this->input->post('old_photo', TRUE);
				}

			 $chg_logo=array(
			 'logo'=>$UploadFile
			 );
			 if($this->module->change_logo($chg_logo))
			 {
				 $data['flash_message'] =TRUE;
			 }
			 else{
				 $data['flash_message'] =FALSE;
			 }
		}
		 $data['site_logo']=$this->module->getsite_logo();
		 $data['main_content'] = 'admin/logo_change';
         $this->load->view('includes/template', $data);
		 //$this->load->view('admin/change_password');

	}



	function chn_password1()
	{
		 $userdata=$this->session->all_userdata();
        @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
		   //echo 1;
		   $password=$this->input->post('password');
		   $this->module->check_password1($password);

		}
	}

	function change_delete_password()
	{
		 if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
		   //echo 1;
		   $email=$this->input->post('email');
		   $password=$this->input->post('password');
		   $this->module->check_password($email,$password);

		}

		 $data['main_content'] ='change_delete_password';
         $this->load->view('include/template', $data);
	}
	function set_newpassword()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST')
        {

		   $email=$this->input->post('email');
		   $password=$this->input->post('password');
		   $new_password=md5($this->input->post('new_password'));
		   $password_data=array(
		    'password'=>$new_password
		   );
		   $this->module->setnew_password($email,$password,$password_data);

		}
	}

	function set_newpassword1()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST')
        {

		   $password=$this->input->post('password');
		   $new_password=md5($this->input->post('new_password'));
		   $password_data=array(
		    'admin_delete_password'=>$new_password
		   );
		   $this->module->setnew_password1($password,$password_data);

		}
	}
	function edit_profile_pic($user_id)
	{
		 $userdata=$this->session->all_userdata();
       @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		//echo $user_id; exit
		 //echo $_FILES['gallery_image']['name']."koko";exit;

		  if($_FILES['gallery_image']['name']!='')
				{
					//echo "<pre>" ; print_r("$_FILES");
					//echo $_FILES['gallery_image']['name']."koko";exit;
                $type_profile=$this->input->post('type_profile');
					if(!is_dir('images/')) {
						umask(0);
						mkdir('images/',0777);
					}

					$time=time();
					$config['upload_path'] = 'images/';
					$config['file_name'] = $time."_".$_FILES['gallery_image']['name'];

					//$main_image=$time."_".$_FILES['small_image']['name'];
					$UploadFile=$config['file_name'];

					$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
				    $config['image_library'] = 'gd2';
					$config['overwrite'] = TRUE;
					$config['encrypt_name'] = FALSE;
					$config['remove_spaces'] = TRUE;
					$config['max_size']   = '1024';

					$this->load->library('upload',$config);

					if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
					if ( ! $this->upload->do_upload('gallery_image'))
					{
						echo 'error';
					} else {

						$this->upload->initialize($config);

						$source_image=realpath('images/'.$UploadFile);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           = 480;
						$config['height']           = 365;
						$config['new_image']       =    'images/'.$time."_".$_FILES['gallery_image']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];

						$this->load->library('image_lib',$config);

						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());

						}
						$this->image_lib->clear();


						$source_image=realpath('images/'.$UploadFile);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           = 200;
						$config['height']          = 221;
						$config['new_image']       =    'images/thumb/'.$time."_".$_FILES['gallery_image']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
						$this->image_lib->initialize($config);

						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());
						}
						$this->image_lib->clear();
				   	}

				   $old_photo=$this->input->post('old_photo', TRUE);
					if($old_photo != '')
					{
						if(file_exists(realpath('images/'.$old_photo)))
						{
						unlink(realpath('images/'.$old_photo));
						}
					}

				} else {
					$UploadFile=$this->input->post('old_photo', TRUE);
				}

				$image_data=array('image'=>$UploadFile);
				//print_r($image_data);exit;
				if($this->module->setprofile($user_id,$image_data))
				{
					if($type_profile==1)
					{
					 redirect('edit_member/'.$user_id);
					}
					else
					{
					  redirect('profile');
					}

				}

	}
    function confirm_delete_password()
	{
		$admin_delete_pass=$this->input->post('admin_pass');
		$this->module->confirm_delete_password($admin_delete_pass);
	}






	function save_label()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			$uid= $this->input->post('uid');
			$status_data=array(
			'first_txt'=> $this->input->post('first_txt'),
			'second'=> $this->input->post('second_txt'),
			'third'=> $this->input->post('third_txt'),
			'fourth'=> $this->input->post('forth_txt'),
			'fivth'=> $this->input->post('five_txt'),
			'sixth'=> $this->input->post('six_txt'),
			'seven'=> $this->input->post('seven_txt'),
			'eighth'=> $this->input->post('eight_txt'),
			'nighth	'=> $this->input->post('nine_txt'),
			'tenth'=> $this->input->post('ten_txt'),
			'eleventh	'=> $this->input->post('eleven_txt')
			);
			$this->module->save_status($status_data,$uid);
			//print_r($status_data);
        }
	}


	function tbody_data()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
			$first_id=$this->input->post('f_row_id');
			$first_value=$this->input->post('first_row');
			$uid=$this->input->post('uni_id');
			$project_id=$this->input->post('fk_proid');


			$this->module->tbody_data($first_id,$first_value,$uid,$project_id);
		}

	}


	function search_person()
	{
		   $serch_word=$this->input->post('serch_word');
		   $id=$this->input->post('re_id');
			$pclass=$this->input->post('p_class');
		   $user_data=$this->module->search_person($serch_word);
		  // print_r($user_data);

			foreach($user_data as $key=>$value)
			{

			  $name=$value['first_name']." ".$value['last_name'];

			   if($value['image']=='')
			   {
				   $usr_img="popup_icon.png";
			   }
			   else
			   {
				  $usr_img=$value['image'];
			   }
			  echo'<div class="menu_list" onclick="asign_user('.$value['id'].','.$id.','.$pclass.')"><div class="image_v"><img  src="'.base_url().'uploads/client/'.$usr_img.'"></div><div class="person_v" style="margin-left: 42px;">'. $name.'</div><input type="hidden" id="per_img'.$value['id'].'" value="'.$usr_img.'"><input type="hidden" id="title_img'.$value['id'].'" value="'.$name.'"></div>';
			}


	}
	public function dele_user()
	{

		$user_id=$this->input->post('user_id');
		 $this->module->delete_user($user_id);
	}


	function social_media()
	{
	//echo 1; exit;
		if($this->input->server('REQUEST_METHOD')=='POST')
		{
			$social_arr=array(
			'facebook_link'=>$this->input->post('facebook_link'),
			'twitter_link'=> $this->input->post('twitter_link'),
			'pinterest'=>$this->input->post('pinterest'),
			'linkedin'=>$this->input->post('linkedin'),
			'google_plus'=>$this->input->post('google_plus')
			);
			//echo"<pre>";
			//print_r($about_arr);exit;
			if($update_about_is=$this->module->update_social_media($social_arr))
			{
					$data['flash_message'] =TRUE;
			}
			else
			{
				$data['flash_message'] =FALSE;
			}

		}
		 $data['get_contact']=$this->module->get_social_media();
		 $data['main_content'] = 'admin/social_media';
         $this->load->view('includes/template', $data);

	}


   function update_gallery()
 {
  $data['gallery_img']=$this->module->get_gallery_img();
  $data['main_content'] = 'admin/update_gallery';
  $this->load->view('includes/template', $data);
  //$this->load->view('admin/home');
 }

  function edit_gallery()
 {
   $id=$this->uri->segment(2);

  if ($this->input->server('REQUEST_METHOD') === 'POST')
   {

    if($_FILES['banner_img']['name']!='')
    {
     //echo "<pre>" ; print_r("$_FILES"); exit;
     //echo $_FILES['banner_img']['name']."koko";exit;
                $type_profile=$this->input->post('type_profile');
     if(!is_dir('../uploads/gallery/')) {
      umask(0);
      mkdir('../uploads/gallery/',0777);
     }

     $time=time();
     $config['upload_path'] = '../uploads/gallery/';
     $config['file_name'] = $time."_".$_FILES['banner_img']['name'];

     //$main_image=$time."_".$_FILES['small_image']['name'];
     $UploadFile=$config['file_name'];

     $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['image_library'] = 'gd2';
     $config['overwrite'] = TRUE;
     $config['encrypt_name'] = FALSE;
     $config['remove_spaces'] = TRUE;
     $config['max_size']   = '1024';

     $this->load->library('upload',$config);

     if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
     if ( ! $this->upload->do_upload('banner_img'))
     {
      echo 'error';
     } else {

      $this->upload->initialize($config);

      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
     /// $config['width']           = 993;
      ///$config['height']           = 420;
      $config['new_image']       =    '../uploads/gallery/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];

      $this->load->library('image_lib',$config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());

      }
      $this->image_lib->clear();


      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      //$config['width']           = 200;
      //$config['height']          = 221;
      $config['new_image']       =    '../uploads/gallery/thumb/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
      $this->image_lib->initialize($config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());
      }
      $this->image_lib->clear();
        }

       $old_photo=$this->input->post('old_photo', TRUE);
     if($old_photo != '')
     {
      if(file_exists(realpath('../uploads/gallery/'.$old_photo)))
      {
      unlink(realpath('../uploads/gallery/'.$old_photo));
      }
     }

    }else
            {
   $UploadFile=$this->input->post('old_photo');
            }
     $add_galery= array(
    'img_url' => $UploadFile,
    'name' => $this->input->post('name'),
    );
      if($this->module->edit_gallery($id,$add_galery))
      {
      $data['flash_message']=true;
      }
      else
         {
      $data['flash_message']=false;

    }
      }
  $data['galery_data']=$this->module->get_gallery_data_by_id($id);
  $data['main_content'] = 'admin/edit_gallery';
  $this->load->view('includes/template', $data);
  //$this->load->view('admin/home');
 }
//................................................................

  function add_gallery()
 {
   if ($this->input->server('REQUEST_METHOD') === 'POST')
   {

    if($_FILES['banner_img']['name']!='')
    {
     //echo "<pre>" ; print_r("$_FILES"); exit;
     //echo $_FILES['banner_img']['name']."koko";exit;
                $type_profile=$this->input->post('type_profile');
     if(!is_dir('../uploads/gallery/')) {
      umask(0);
      mkdir('../uploads/gallery/',0777);
     }

     $time=time();
     $config['upload_path'] = '../uploads/gallery/';
     $config['file_name'] = $time."_".$_FILES['banner_img']['name'];

     //$main_image=$time."_".$_FILES['small_image']['name'];
     $UploadFile=$config['file_name'];

     $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['image_library'] = 'gd2';
     $config['overwrite'] = TRUE;
     $config['encrypt_name'] = FALSE;
     $config['remove_spaces'] = TRUE;
     $config['max_size']   = '1024';

     $this->load->library('upload',$config);

     if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
     if ( ! $this->upload->do_upload('banner_img'))
     {
      echo 'error';
     } else {

      $this->upload->initialize($config);

      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
     /// $config['width']           = 993;
      ///$config['height']           = 420;
      $config['new_image']       =    '../uploads/gallery/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];

      $this->load->library('image_lib',$config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());

      }
      $this->image_lib->clear();


      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      //$config['width']           = 200;
      //$config['height']          = 221;
      $config['new_image']       =    '../uploads/gallery/thumb/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
      $this->image_lib->initialize($config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());
      }
      $this->image_lib->clear();
        }

       $old_photo=$this->input->post('old_photo', TRUE);
     if($old_photo != '')
     {
      if(file_exists(realpath('../uploads/gallery/'.$old_photo)))
      {
      unlink(realpath('../uploads/gallery/'.$old_photo));
      }
     }
    }
     $add_galery= array(
    'img_url' => $UploadFile,
    'name' => $this->input->post('name'),
    );
      if($this->module->add_gallery($add_galery))
      {
      $data['flash_message']=true;
      }
      else
         {
      $data['flash_message']=false;

    }
      }
     $data['main_content'] = 'admin/add_gallery';
     $this->load->view('includes/template', $data);
  //$this->load->view('admin/home');
 }
//.....................................................................

 function del_gallery($id)
 {
	 if($this->module->del_gallery_img($id))
	 {
	   redirect('update_gallery');
	 }
 }

public function service_appointment()
{
	 $data['service_appointment']=$this->module->sercice_data();
	 $data['service_appointment_limit']=$this->module->sercice_data_limit();
	 $data['main_content'] = 'admin/service_appointment';
     $this->load->view('includes/template', $data);

}
public function test_drive()
{
	 $data['test_drive']=$this->module->test_drive();
	 $data['test_drive_limit']=$this->module->test_drive_limit();
	 $data['main_content'] = 'admin/test_drive';
     $this->load->view('includes/template', $data);

}



	  function add_career()
 {
  if ($this->input->server('REQUEST_METHOD') === 'POST')
   {
      $add_career= array(
    'description' => $this->input->post('description'),
    'name' => $this->input->post('name'),
    );
      if($this->module->add_career($add_career))
      {
      $data['flash_message']=true;
      }
      else
         {
      $data['flash_message']=false;

    }
 }

  $data['main_content'] = 'admin/add_career';
     $this->load->view('includes/template', $data);
  //$this->load->view('admin/home');
 }

  function update_career()
 {

        $data['apply_job']=$this->module->apply_job();
        $data['career_list']=$this->module->career_list();
   $data['main_content'] ='admin/update_career';
         $this->load->view('includes/template', $data);
 }


 function download_cv()
 {
          $data['apply_job']=$this->module->apply_job();
          $data['career_list']=$this->module->career_list();
          $data['main_content'] ='admin/download_cv';
          $this->load->view('includes/template', $data);
 }
  function test()
 {

          $data['main_content'] ='admin/test';
          $this->load->view('includes/template', $data);
 }


 function edit_career($id)
 {

 $userdata=$this->session->all_userdata();
   @$user_id=$userdata['id'];
  if($user_id=='')
  {
   redirect(base_url());
  }

  if ($this->input->server('REQUEST_METHOD') === 'POST')
        {

   $update_acreer=array(
   'name'=> $this->input->post('title'),
   'description'=> $this->input->post('deccription')
   );

    if($this->module->edit_career_by_id($id,$update_acreer))
                {
                   // $data['flash_message']=true;
        redirect('update_career');
                }
             else
                {
                    // $data['flash_message']=false;
                }
        }


        //  $data['apply_job']=$this->module->apply_job();
       // $data['career_list']=$this->module->career_list();
       $data['get_career']=$this->module->get_career_byid($id);
          $data['main_content'] ='admin/edit_career';
          $this->load->view('includes/template', $data);
 }

  function del_career($id)
 {
 if($this->module->del_career($id))
 {
   redirect('update_career');
 }
 }

	function add_portfolio()
 {
   if ($this->input->server('REQUEST_METHOD') === 'POST')
   {

    if($_FILES['banner_img']['name']!='')
    {
     //echo "<pre>" ; print_r("$_FILES"); exit;
     //echo $_FILES['banner_img']['name']."koko";exit;
                $type_profile=$this->input->post('type_profile');
     if(!is_dir('../uploads/gallery/')) {
      umask(0);
      mkdir('../uploads/gallery/',0777);
     }

     $time=time();
     $config['upload_path'] = '../uploads/gallery/';
     $config['file_name'] = $time."_".$_FILES['banner_img']['name'];

     //$main_image=$time."_".$_FILES['small_image']['name'];
     $UploadFile=$config['file_name'];

     $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['image_library'] = 'gd2';
     $config['overwrite'] = TRUE;
     $config['encrypt_name'] = FALSE;
     $config['remove_spaces'] = TRUE;
     $config['max_size']   = '1024';

     $this->load->library('upload',$config);

     if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
     if ( ! $this->upload->do_upload('banner_img'))
     {
      echo 'error';
     } else {

      $this->upload->initialize($config);

      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      $config['width']           = 600;
     $config['height']           = 600;
      $config['new_image']       =    '../uploads/gallery/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];

      $this->load->library('image_lib',$config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());

      }
      $this->image_lib->clear();


      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      $config['width']           = 600;
      $config['height']          = 600;
      $config['new_image']       =    '../uploads/gallery/thumb/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
      $this->image_lib->initialize($config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());
      }
      $this->image_lib->clear();
        }

       $old_photo=$this->input->post('old_photo', TRUE);
     if($old_photo != '')
     {
      if(file_exists(realpath('../uploads/gallery/'.$old_photo)))
      {
      unlink(realpath('../uploads/gallery/'.$old_photo));
      }
     }
    }
     $add_portfolio= array(
    'img' => $UploadFile,
    'name' => $this->input->post('name'),
	'address' => $this->input->post('address'),
	'comment' => $this->input->post('comment'),
    );
      if($this->module->add_portfolio($add_portfolio))
      {
      $data['flash_message']=true;
      }
      else
         {
      $data['flash_message']=false;

    }
      }
  $data['main_content'] = 'admin/add_portfolio';
     $this->load->view('includes/template', $data);
  //$this->load->view('admin/home');
 }
  function update_portfolio()
 {

         $data['portfolio']=$this->module->list_portfolio();
		 $data['main_content'] ='admin/update_portfolio';
         $this->load->view('includes/template', $data);
 }
   function del_portfolio($id)
 {

 if($this->module->del_portfolio($id))
 {
   redirect('update_portfolio');
 }
 }



  function edit_portfolio($id)
 {
   $id=$this->uri->segment(2);

  if ($this->input->server('REQUEST_METHOD') === 'POST')
   {

    if($_FILES['banner_img']['name']!='')
    {
     //echo "<pre>" ; print_r("$_FILES"); exit;
     //echo $_FILES['banner_img']['name']."koko";exit;
                $type_profile=$this->input->post('type_profile');
     if(!is_dir('../uploads/gallery/')) {
      umask(0);
      mkdir('../uploads/gallery/',0777);
     }

     $time=time();
     $config['upload_path'] = '../uploads/gallery/';
     $config['file_name'] = $time."_".$_FILES['banner_img']['name'];

     //$main_image=$time."_".$_FILES['small_image']['name'];
     $UploadFile=$config['file_name'];

     $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['image_library'] = 'gd2';
     $config['overwrite'] = TRUE;
     $config['encrypt_name'] = FALSE;
     $config['remove_spaces'] = TRUE;
     $config['max_size']   = '1024';

     $this->load->library('upload',$config);

     if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
     if ( ! $this->upload->do_upload('banner_img'))
     {
      echo 'error';
     } else {

      $this->upload->initialize($config);

      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      $config['width']           = 600;
      $config['height']           = 600;
      $config['new_image']       =    '../uploads/gallery/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];

      $this->load->library('image_lib',$config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());

      }
      $this->image_lib->clear();


      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      $config['width']           = 600;
      $config['height']          = 600;
      $config['new_image']       =    '../uploads/gallery/thumb/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';

      $this->image_lib->initialize($config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());
      }
      $this->image_lib->clear();
        }

       $old_photo=$this->input->post('old_photo', TRUE);
     if($old_photo != '')
     {
      if(file_exists(realpath('../uploads/gallery/'.$old_photo)))
      {
      unlink(realpath('../uploads/gallery/'.$old_photo));
      }
     }
    }else
            {
   $UploadFile=$this->input->post('old_photo');
            }
     $add_galery= array(
    'img' => $UploadFile,
    'name' => $this->input->post('name'),
	'address' => $this->input->post('address'),
	'comment' => $this->input->post('comment'),
    );
      if($this->module->update_portfolio_by_id($id,$add_galery))
     {

    }
      }
  $data['edit_portfolio']=$this->module->get_portfolio_data_by_id($id);
  $data['main_content'] = 'admin/edit_portfolio';
  $this->load->view('includes/template', $data);
 }

 /////..................................................................

 function add_news()
 {
 //echo "Prak"; exit;
   if ($this->input->server('REQUEST_METHOD') === 'POST')
   {

    if($_FILES['banner_img']['name']!='')
    {
     //echo "<pre>" ; print_r("$_FILES"); exit;
     //echo $_FILES['banner_img']['name']."koko";exit;
                $type_profile=$this->input->post('type_profile');
     if(!is_dir('../uploads/gallery/')) {
      umask(0);
      mkdir('../uploads/gallery/',0777);
     }

     $time=time();
     $config['upload_path'] = '../uploads/gallery/';
     $config['file_name'] = $time."_".$_FILES['banner_img']['name'];

     //$main_image=$time."_".$_FILES['small_image']['name'];
     $UploadFile=$config['file_name'];

     $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['image_library'] = 'gd2';
     $config['overwrite'] = TRUE;
     $config['encrypt_name'] = FALSE;
     $config['remove_spaces'] = TRUE;
     $config['max_size']   = '1024';

     $this->load->library('upload',$config);

     if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
     if ( ! $this->upload->do_upload('banner_img'))
     {
      echo 'error';
     } else {

      $this->upload->initialize($config);

      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      $config['width']           = 1000;
     $config['height']           = 667;
      $config['new_image']       =    '../uploads/gallery/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];

      $this->load->library('image_lib',$config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());

      }
      $this->image_lib->clear();


      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      $config['width']           = 1000;
      $config['height']          = 667;
      $config['new_image']       =    '../uploads/gallery/thumb/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
      $this->image_lib->initialize($config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());
      }
      $this->image_lib->clear();
        }

       $old_photo=$this->input->post('old_photo', TRUE);
     if($old_photo != '')
     {
      if(file_exists(realpath('../uploads/gallery/'.$old_photo)))
      {
      unlink(realpath('../uploads/gallery/'.$old_photo));
      }
     }
    }
     $add_news= array(
    'image' => $UploadFile,
    'date' => date('M-Y'),
	'title' => $this->input->post('title'),
	'description' => $this->input->post('description'),
    );
      if($this->module->add_news($add_news))
      {
         //$data['flash_message']=true;
		 $all_email=array();
		 $email_data=$this->module->get_allemailid();
		 foreach($email_data as$key=>$val)
		 {
			  $all_email[].=$val['email'];
		 }
		//print_r($all_email);exit;
	      $all_subcribeemail= implode(",",$all_email);

		 // $this->load->library('email');
				$admin_email= "uttam.9rajak@gmail.com";//$this->user_model->get_admin_email();
					$message='<html><body><table width="80%" border="0">
					<tr>
						<td colspan="2">
						<a href="'.site_base_url().'" target="_blank"><img src="'.site_base_url().'resources/img/logomm1.jpg" border="0"  style="height: 100px;width: 150px;margin-left: 73px;"></a>
						</td>
					</tr>
					<tr>
					     <td colspan="2" style="height:10px;"></td>
					</tr>
					<tr>
						<td width="429" colspan="2">
						<table width="97%" border="0" style="margin:15px;font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#4a4a4a;font-weight:normal;margin-bottom:2px;">
						<tr>
						<td colspan="2"><h1>'.$this->input->post('title').'</h1></td>
						</tr>
					<tr>
					   <td colspan="2" height="10px;"></td>
					</tr>
					<tr>
					</tr>
					<tr>
						<td colspan="2" height="10px;"><img src="'.site_base_url().'uploads/gallery/'.$UploadFile.'" border="0"  style="height: 139px;width: 209px;margin-left: 73px;"> <br></td>
					</tr>
					<tr>
						<td colspan="2" height="10px;">'.$this->input->post('description').' <br></td>
					</tr>

					<tr>
					<td colspan="2" height="10px;"><p>Thanks You,</p>
					  <p> Model Fuels team.</p></td>
					</tr>
					</table>';

					//echo $message;exit;

						$ci = get_instance();
						$ci->load->library('email');
						$config['protocol'] = "smtp";
						$config['smtp_host'] = "mail.modelfuels.co.in";
						$config['smtp_port'] = "25";
						$config['smtp_user'] = "noreply@modelfuels.co.in";
						$config['smtp_pass'] = "f1%)ld{AS{OM";
						$config['charset'] = "utf-8";
						$config['mailtype'] = "html";
						$config['newline'] = "\r\n";
						$ci->email->initialize($config);
						$ci->email->from('noreply@modelfuels.co.in', "ModelFuels Team");
						$list = array('uttam.9rajak@gmail');
						$ci->email->to($list);
						$this->email->reply_to("uttam.9rajak@gmail", "uttam");
						$ci->email->subject('Model Fuels recent news');
						$ci->email->message($message);
						if($ci->email->send())
						{
							//echo '<script> alert("Thank you we will contact you shortly");</script>';
							$data['flash_message']=TRUE;
						}
						else{
							$data['flash_message']=FALSE;
						}



      }
      else
         {
      $data['flash_message']=false;

    }
      }
     $data['main_content'] = 'admin/add_news';
     $this->load->view('includes/template', $data);
  //$this->load->view('admin/home');
 }
  function update_news()
 {

         $data['recent_news']=$this->module->list_news();
		 $data['main_content'] ='admin/update_news';
         $this->load->view('includes/template', $data);
 }
   function del_news($id)
 {

 if($this->module->del_news($id))
 {
   redirect('update_news');
 }
 }



  function edit_news($id)
 {
   $id=$this->uri->segment(2);

  if ($this->input->server('REQUEST_METHOD') === 'POST')
   {

    if($_FILES['banner_img']['name']!='')
    {
     //echo "<pre>" ; print_r("$_FILES"); exit;
     //echo $_FILES['banner_img']['name']."koko";exit;
                $type_profile=$this->input->post('type_profile');
     if(!is_dir('../uploads/gallery/')) {
      umask(0);
      mkdir('../uploads/gallery/',0777);
     }

     $time=time();
     $config['upload_path'] = '../uploads/gallery/';
     $config['file_name'] = $time."_".$_FILES['banner_img']['name'];

     //$main_image=$time."_".$_FILES['small_image']['name'];
     $UploadFile=$config['file_name'];

     $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['image_library'] = 'gd2';
     $config['overwrite'] = TRUE;
     $config['encrypt_name'] = FALSE;
     $config['remove_spaces'] = TRUE;
     $config['max_size']   = '1024';

     $this->load->library('upload',$config);

     if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
     if ( ! $this->upload->do_upload('banner_img'))
     {
      echo 'error';
     } else {

      $this->upload->initialize($config);

      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      $config['width']           = 1000;
      $config['height']           = 667;
      $config['new_image']       =    '../uploads/gallery/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];

      $this->load->library('image_lib',$config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());

      }
      $this->image_lib->clear();


      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      $config['width']           = 1000;
      $config['height']          = 667;
      $config['new_image']       =    '../uploads/gallery/thumb/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';

      $this->image_lib->initialize($config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());
      }
      $this->image_lib->clear();
        }

       $old_photo=$this->input->post('old_photo', TRUE);
     if($old_photo != '')
     {
      if(file_exists(realpath('../uploads/gallery/'.$old_photo)))
      {
      unlink(realpath('../uploads/gallery/'.$old_photo));
      }
     }
    }else
            {
   $UploadFile=$this->input->post('old_photo');
            }
     $add_galery= array(
    'image' => $UploadFile,
    'date' => date('M-Y'),
	'title' => $this->input->post('title'),
	'description' => $this->input->post('description'),
    );
	//print_r($add_galery);exit;
      if($this->module->update_news_by_id($id,$add_galery))
     {


    }
      }
  $data['edit_news']=$this->module->get_news_data_by_id($id);
  $data['main_content'] = 'admin/edit_news';
  $this->load->view('includes/template', $data);
 }

//..........14-10-17........

 function update_offer_banner()
 {

  $data['banner_img']=$this->module->get_banner_offer();
  //echo "<pre>";print_r($data['banner_img']); exit;
  $data['main_content'] = 'admin/update_offer_banner';
        $this->load->view('includes/template', $data);

  //$this->load->view('admin/home');
 }
     function edit_banner_offer($id)
 {
 //echo "1"; die;
     if ($this->input->server('REQUEST_METHOD') === 'POST')
   {
   if($_FILES['banner_img']['name']!='')
    {
     //echo "<pre>" ; print_r("$_FILES"); exit;
     //echo $_FILES['banner_img']['name']."koko";exit;
                $type_profile=$this->input->post('type_profile');
     if(!is_dir('../uploads/banner/')) {
      umask(0);
      mkdir('../uploads/banner/',0777);
     }

     $time=time();
     $config['upload_path'] = '../uploads/banner/';
     $config['file_name'] = $time."_".$_FILES['banner_img']['name'];

     //$main_image=$time."_".$_FILES['small_image']['name'];
     $UploadFile=$config['file_name'];

     $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['image_library'] = 'gd2';
     $config['overwrite'] = TRUE;
     $config['encrypt_name'] = FALSE;
     $config['remove_spaces'] = TRUE;
     $config['max_size']   = '2024';

     $this->load->library('upload',$config);

     if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
     if ( ! $this->upload->do_upload('banner_img'))
     {
      echo 'error';
     } else {

      $this->upload->initialize($config);

      $source_image=realpath('../uploads/banner/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      $config['width']           = 993;
      $config['height']           = 300;
      $config['new_image']       =    '../uploads/banner/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];

      $this->load->library('image_lib',$config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());

      }
      $this->image_lib->clear();


      $source_image=realpath('../uploads/banner/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      $config['width']           = 200;
      $config['height']          = 300;
      $config['new_image']       =    '../uploads/banner/thumb/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
      $this->image_lib->initialize($config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());
      }
      $this->image_lib->clear();
        }

       $old_photo=$this->input->post('old_photo', TRUE);
     if($old_photo != '')
     {
      if(file_exists(realpath('../uploads/banner/'.$old_photo)))
      {
      unlink(realpath('../uploads/banner/'.$old_photo));
      }
     }

    } else {
     $UploadFile=$this->input->post('old_photo', TRUE);
    }
    $update_banner=array(
    'image'=>$UploadFile,
    //'title'=>$this->input->post('title'),
    //'description'=>$this->input->post('deccription')
    );
    if($banner_img=$this->module->edit_banner_offer($id,$update_banner))
    {
     //echo 1;exit;
     redirect('update_offer_banner');
    }

   }

  $data['get_banner']=$this->module->get_banner_offerid($id);

  $data['main_content'] = 'admin/edit_banner_offer';
        $this->load->view('includes/template', $data);

  //$this->load->view('admin/home');
 }
 /*delete section */
 function del_service($id)
 {
	  $userdata=$this->session->all_userdata();
		 @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
	 if($this->module->del_service($id))
	 {
	   redirect('service_appointment');
	 }
 }
 function del_test($id)
 {
	  $userdata=$this->session->all_userdata();
		 @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
	 if($this->module->del_test($id))
	 {
	   redirect('test_drive');
	 }
 }
 function del_servicelist($id)
 {
	  $userdata=$this->session->all_userdata();
		 @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
	 if($this->module->del_servicelist($id))
	 {
	   redirect('service_list');
	 }
 }
 function del_listmodel($id)
 {
	  $userdata=$this->session->all_userdata();
		 @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
	 if($this->module->del_listmodel($id))
	 {
	   redirect('list_model');
	 }
 }
 function del_excahnge($id)
 {
	  $userdata=$this->session->all_userdata();
		 @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
	 if($this->module->del_excahnge($id))
	 {
	   redirect('exchange_vehicle');
	 }
 }
 function del_listcar($id)
 {
	   $car_type=$this->uri->segment(3);
	  $userdata=$this->session->all_userdata();
		 @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
	 if($this->module->del_listcar($id))
	 {
		if($car_type=='new')
		{
	      redirect('list_car');
		}
		else{
			 redirect('old_list_car');
		}
	 }
 }

 public function update_feedback()
 {
	//echo 1;exit;
	 $id=$this->input->post('id');
	 $feed_array=array(
	 'show_ste'=>$this->input->post('show_site')
	 );
	 if($this->product_module->get_upadtefeed($id,$feed_array))
	 {
		 redirect('update_portfolio');
	 }
	// print_r($feed_array);

 }

   function add_mahindra_app()
 {
   if ($this->input->server('REQUEST_METHOD') === 'POST')
   {

    if($_FILES['banner_img']['name']!='')
    {
     //echo "<pre>" ; print_r("$_FILES"); exit;
     //echo $_FILES['banner_img']['name']."koko";exit;
                $type_profile=$this->input->post('type_profile');
     if(!is_dir('../uploads/gallery/')) {
      umask(0);
      mkdir('../uploads/gallery/',0777);
     }

     $time=time();
     $config['upload_path'] = '../uploads/gallery/';
     $config['file_name'] = $time."_".$_FILES['banner_img']['name'];

     //$main_image=$time."_".$_FILES['small_image']['name'];
     $UploadFile=$config['file_name'];

     $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['image_library'] = 'gd2';
     $config['overwrite'] = TRUE;
     $config['encrypt_name'] = FALSE;
     $config['remove_spaces'] = TRUE;
     $config['max_size']   = '1024';

     $this->load->library('upload',$config);

     if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
     if ( ! $this->upload->do_upload('banner_img'))
     {
      echo 'error';
     } else {

      $this->upload->initialize($config);

      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
     /// $config['width']           = 993;
      ///$config['height']           = 420;
      $config['new_image']       =    '../uploads/gallery/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];

      $this->load->library('image_lib',$config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());

      }
      $this->image_lib->clear();


      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      //$config['width']           = 200;
      //$config['height']          = 221;
      $config['new_image']       =    '../uploads/gallery/thumb/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
      $this->image_lib->initialize($config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());
      }
      $this->image_lib->clear();
        }

       $old_photo=$this->input->post('old_photo', TRUE);
     if($old_photo != '')
     {
      if(file_exists(realpath('../uploads/gallery/'.$old_photo)))
      {
      unlink(realpath('../uploads/gallery/'.$old_photo));
      }
     }
    }
     $add_galery= array(
    'image' => $UploadFile,
    'app_url' => $this->input->post('app_url'),
 'name' => $this->input->post('name'),
    );
      if($this->module->add_mahindra_app($add_galery))
      {
     // $data['flash_message']=true;
   redirect('update_mahindra_app');
      }
      else
         {
     // $data['flash_message']=false;

    }
      }
     $data['main_content'] = 'admin/add_mahindra_app';
     $this->load->view('includes/template', $data);
  //$this->load->view('admin/home');
 }
  function update_mahindra_app()
 {
  $data['gallery_img']=$this->module->get_mahindra_app();
  $data['main_content'] = 'admin/update_mahindra_app';
  $this->load->view('includes/template', $data);
  //$this->load->view('admin/home');
 }


  function edit_mahindra_app()
 {
   $id=$this->uri->segment(2);

  if ($this->input->server('REQUEST_METHOD') === 'POST')
   {

    if($_FILES['banner_img']['name']!='')
    {
     //echo "<pre>" ; print_r("$_FILES"); exit;
     //echo $_FILES['banner_img']['name']."koko";exit;
                $type_profile=$this->input->post('type_profile');
     if(!is_dir('../uploads/gallery/')) {
      umask(0);
      mkdir('../uploads/gallery/',0777);
     }

     $time=time();
     $config['upload_path'] = '../uploads/gallery/';
     $config['file_name'] = $time."_".$_FILES['banner_img']['name'];

     //$main_image=$time."_".$_FILES['small_image']['name'];
     $UploadFile=$config['file_name'];

     $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['image_library'] = 'gd2';
     $config['overwrite'] = TRUE;
     $config['encrypt_name'] = FALSE;
     $config['remove_spaces'] = TRUE;
     $config['max_size']   = '1024';

     $this->load->library('upload',$config);

     if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
     if ( ! $this->upload->do_upload('banner_img'))
     {
      echo 'error';
     } else {

      $this->upload->initialize($config);

      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
     /// $config['width']           = 993;
      ///$config['height']           = 420;
      $config['new_image']       =    '../uploads/gallery/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];

      $this->load->library('image_lib',$config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());

      }
      $this->image_lib->clear();


      $source_image=realpath('../uploads/gallery/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      //$config['width']           = 200;
      //$config['height']          = 221;
      $config['new_image']       =    '../uploads/gallery/thumb/'.$time."_".$_FILES['banner_img']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
      $this->image_lib->initialize($config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());
      }
      $this->image_lib->clear();
        }

       $old_photo=$this->input->post('old_photo', TRUE);
     if($old_photo != '')
     {
      if(file_exists(realpath('../uploads/gallery/'.$old_photo)))
      {
      unlink(realpath('../uploads/gallery/'.$old_photo));
      }
     }

    }else
            {
   $UploadFile=$this->input->post('old_photo');
            }
     $add_galery= array(
    'image' => $UploadFile,
    'app_url' => $this->input->post('app_url'),
     'name' => $this->input->post('name'),
    );
      if($this->module->edit_mehindra_app($id,$add_galery))
      {
    //  $data['flash_message']=true;
  redirect('update_mahindra_app');
      }
      else
         {
    //  $data['flash_message']=false;

    }
      }
  $data['galery_data']=$this->module->get_mehindra_app_by_id($id);
  $data['main_content'] = 'admin/edit_mahindra_app';
  $this->load->view('includes/template', $data);
  //$this->load->view('admin/home');
 }
 function del_mahindra_app($id)
 {
  if($this->module->del_mahindra_app($id))
  {
    redirect('update_mahindra_app');
  }
 }
 	function seo()
	{
	    $data['results'] = $this->module->get_seo();
        $data['main_content'] = 'admin/seo';
        $this->load->view('includes/template', $data);
    }

 	function edit_seo()
	{
	   $id=$this->uri->segment(2);

	  if ($this->input->server('REQUEST_METHOD') === 'POST')
       {
		   $array_seodata=array(
           'page_name' =>$this->input->post('page_name'),
           'page_title' =>$this->input->post('page_title'),
           'og_title' =>$this->input->post('og_title'),
           'og_url' =>$this->input->post('og_url'),
           'meta_title' =>$this->input->post('meta_title'),
           'meta_des' =>$this->input->post('meta_des'),
           'meta_keyword' =>$this->input->post('meta_keyword'),
           'og_des' =>$this->input->post('og_des')
		   );
		 //  echo"<pre>";
		 // print_r($array_seodata);exit;
		   if($this->module->updateseobyid($id,$array_seodata)){

			   $data['flash_message']=TRUE;
		   }
		   else{
			    $data['flash_message']=FALSE;
		   }
	   }


	    $data['results'] = $this->module->get_seobyid($id);
        $data['main_content'] = 'admin/edit_seo';
        $this->load->view('includes/template', $data);
    }

 	public function save_newprice()
	{
		if($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$id=$this->input->post('id');
		    $update_price=array(
			'price'=>$this->input->post('new_price')
			);
			if($this->product_module->update_price($update_price,$id))
			{
				//echo 1;

			}

			//echo 1;
		}




	}

		 function upload()
 {

	 echo 11;
	// exit;
 // sleep(3);
 if ($this->input->server('REQUEST_METHOD') === 'POST')
	{
  if($_FILES["files"]["name"] != '')
  {
   $output = '';
   $config["upload_path"] = '../uploads/';
   $config["allowed_types"] = 'gif|jpg|png';
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

     $output .= '
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
   if($idd = $this->product_module->insert_product_image($add_img))
   {
	    // echo $idd;

		echo $output.'<input type="hidden" name="pid" value="'.$idd.'"</input>';
   }
  }
 }
 }

  function update_imagee()
 {
	echo 1; exit;
	if ($this->input->server('REQUEST_METHOD') === 'POST')
	{

   // echo  $id=$this->uri->segment(2);exit;
     $product_id=$this->input->post('PID');
     $image_id=$this->input->post('ID');
     $select_image =$this->product_module->select_image($product_id);
	$old_imagedatareturn= $select_image[0]['product_image'];
	$old_data= json_decode($old_imagedatareturn,true);
    // print_r($aaaa); exit;
//exit;
	 if($_FILES["files"]["name"] != '')
	  {
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
	   ///$eeeeee =json_encode($img_array);
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
			if($site_image=$this->product_module->update_product($product_id,$upadte_data))
				{
					//print_r($old_data);

					foreach($old_data as $key=>$value)
					{
						echo '<label><img class="img-responsive img-thumbnail"src="'.site_base_url().'uploads/'.$value.'"><input type="file" id="image_product'.$key.'" onchange="upadte_image('.$key.','.$product_id.')"></label>';


					}

					//redirect('product/edit_product');
				}
		//$new_array=perform_changes_on($aaaa,$add_img);
			//print_r($new_array);

	   }

	}
 }
/*=======================================  11-04-18 ==============================*/
function add_sleep()
 {
 	//echo 1; exit;
 	if($this->input->server('REQUEST_METHOD')=='POST')
		{
			if($_FILES['site_image']['name']!='')
				{
					//echo "<pre>" ; print_r("$_FILES"); exit;
					//echo $_FILES['site_image']['name']."koko";exit;
                  $type_profile=$this->input->post('type_profile');
					if(!is_dir('../uploads/sleep_image/')) {
						umask(0);
						mkdir('../uploads/sleep_image/',0777);
					}

					$time=time();
					$config['upload_path'] = '../uploads/sleep_image/';
					$config['file_name'] = $time."_".$_FILES['site_image']['name'];

					//$main_image=$time."_".$_FILES['small_image']['name'];
					$UploadFile=$config['file_name'];

					$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
				    $config['image_library'] = 'gd2';
					$config['overwrite'] = TRUE;
					$config['encrypt_name'] = FALSE;
					$config['remove_spaces'] = TRUE;
					$config['max_size']   = '1024';

					$this->load->library('upload',$config);

					if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
					if ( ! $this->upload->do_upload('site_image'))
					{
						echo 'error';
					} else {

						$this->upload->initialize($config);

						$source_image=realpath('../uploads/sleep_image/'.$UploadFile);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           = 440;
						$config['height']           = 353;
						$config['new_image']       =    '../uploads/sleep_image/'.$time."_".$_FILES['site_image']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];

						$this->load->library('image_lib',$config);

						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());

						}
						$this->image_lib->clear();


						$source_image=realpath('../uploads/sleep_image/'.$UploadFile);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           = 200;
						$config['height']          = 221;
						$config['new_image']       =    '../uploads/sleep_image/thumb/'.$time."_".$_FILES['site_image']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
						$this->image_lib->initialize($config);

						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());
						}
						$this->image_lib->clear();
				   	}
                     $cat_arr=array(
						'rel_snoring_and_sleep'=>$this->input->post('rel_snoring_and_sleep'),
						'symptoms_of_Sleep'=> $this->input->post('symptoms_of_Sleep'),
						'treat_Sleep'=> $this->input->post('treat_Sleep'),
						'snoring_desc'=> $this->input->post('snoring_desc'),
						'img'=>$UploadFile

						 );

					//echo "<pre>"; print_r($cat_arr);exit;

						if($insert_category=$this->module->add_sleep($cat_arr))
						{
								$data['flash_message'] =TRUE;
						}
						else
						{
							$data['flash_message'] =FALSE;
						}
			}
}
 $data['main_content'] = 'admin/add_sleep';
  $this->load->view('includes/template', $data);
  //$this->load->view('admin/home');
 }

 function add_doctors(){

   if ($this->input->server('REQUEST_METHOD') === 'POST')
   {


     $add_galery= array(

    'name' => $this->input->post('name')
    );
      if($this->module->add_doctors($add_galery))
      {
      $data['flash_message']=true;
      }
      else
         {
      $data['flash_message']=false;

    }
      }


 	$data['main_content'] ='admin/add_doctors';
 	$this->load->view('includes/template',$data);
 }
 function doctors_list()
 {


         $data['doctors_list']=$this->module->doctors_list();
         $data['main_content'] ='admin/doctors_list';
         $this->load->view('includes/template', $data);
 }

 function edit_doctors(){
 $id=$this->uri->segment(2);

   if ($this->input->server('REQUEST_METHOD') === 'POST')
   {
       $edit_doctors= array(

    'name' => $this->input->post('name')
    );
      if($this->module->edit_doctors($id,$edit_doctors))
      {
      $data['flash_message']=true;
      }
      else
         {
      $data['flash_message']=false;

    }
      }

 	$data['edit_doctors']=$this->module->get_doctors_by_id($id);
 	$data['main_content'] ='admin/edit_doctors';
 	$this->load->view('includes/template',$data);
 }
 function appointment_list(){

        $data['appointment_list']=$this->module->appointment_list();
         $data['main_content'] ='admin/appointment_list';
         $this->load->view('includes/template', $data);

 }
 public function appont_del()
	{
		$id=$this->uri->segment(2);
		 $this->module->appont_del($id);
		redirect('appointment_list');
	}
	public function edit_appointment(){
		$id=$this->uri->segment(2);

   if ($this->input->server('REQUEST_METHOD') === 'POST')
   {
       $edit_appointment= array(

    'name' => $this->input->post('name'),
    'phone' => $this->input->post('phone'),
    'date' => $this->input->post('date'),
    'comment' => $this->input->post('comment'),
    'doc_id' => $this->input->post('doc_name')

    );
    //print_r($edit_appointment); exit;
      if($this->module->edit_appointment($id,$edit_appointment))
      {
      $data['flash_message']=true;
      }
      else
         {
      $data['flash_message']=false;

    }
      }
    $data['doc_name']=$this->module->get_doc_name_list();
 	$data['get_cateory']=$this->module->get_appont_byid($id);
 	//print_r($data['get_cateory']); exit;
 	$data['main_content'] ='admin/edit_appointment';
 	$this->load->view('includes/template',$data);
	}

	//========================================= 17-04-18 ========================================//
	function sleep_List(){
		$data['sleep_list']=$this->module->get_sleep_list();
		$data['main_content'] ='admin/sleep_List';
         $this->load->view('includes/template', $data);
		}

		 function edit_sleep()
       {
      $id=$this->uri->segment(2);

  if ($this->input->server('REQUEST_METHOD') === 'POST')
   {

    if($_FILES['site_image']['name']!='')
    {
     //echo "<pre>" ; print_r("$_FILES"); exit;
     //echo $_FILES['banner_img']['name']."koko";exit;
                $type_profile=$this->input->post('type_profile');
     if(!is_dir('../uploads/sleep_image/')) {
      umask(0);
      mkdir('../uploads/sleep_image/',0777);
     }

     $time=time();
     $config['upload_path'] = '../uploads/sleep_image/';
     $config['file_name'] = $time."_".$_FILES['site_image']['name'];

     //$main_image=$time."_".$_FILES['small_image']['name'];
     $UploadFile=$config['file_name'];

     $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
        $config['image_library'] = 'gd2';
     $config['overwrite'] = TRUE;
     $config['encrypt_name'] = FALSE;
     $config['remove_spaces'] = TRUE;
     $config['max_size']   = '1024';

     $this->load->library('upload',$config);

     if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
     if ( ! $this->upload->do_upload('site_image'))
     {
      echo 'error';
     } else {

      $this->upload->initialize($config);

      $source_image=realpath('../uploads/sleep_image/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
     /// $config['width']           = 993;
      ///$config['height']           = 420;
      $config['new_image']       =    '../uploads/sleep_image/'.$time."_".$_FILES['site_image']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];

      $this->load->library('image_lib',$config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());

      }
      $this->image_lib->clear();


      $source_image=realpath('../uploads/sleep_image/'.$UploadFile);
      $config['image_library']   = 'gd2';
      $config['source_image']    = $source_image;
      $config['create_thumb']    = TRUE;
      $config['maintain_ratio']  = FALSE;
      //$config['width']           = 200;
      //$config['height']          = 221;
      $config['new_image']       =    '../uploads/sleep_image/thumb/'.$time."_".$_FILES['site_image']['name'];
      $config['thumb_marker']    = '';
      //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
      $this->image_lib->initialize($config);

      if ( ! $this->image_lib->resize())
      {
      $data['error'] = strip_tags($this->image_lib->display_errors());
      }
      $this->image_lib->clear();
        }

       $old_photo=$this->input->post('old_photo', TRUE);
     if($old_photo != '')
     {
      if(file_exists(realpath('../uploads/sleep_image/'.$old_photo)))
      {
      unlink(realpath('../uploads/sleep_image/'.$old_photo));
      }
     }

    }else
            {
   $UploadFile=$this->input->post('old_photo');
            }
     $add_galery= array(
                        'rel_snoring_and_sleep'=>$this->input->post('rel_snoring_and_sleep'),
						'symptoms_of_Sleep'=> $this->input->post('symptoms_of_Sleep'),
						'treat_Sleep'=> $this->input->post('treat_Sleep'),
						'snoring_desc'=> $this->input->post('snoring_desc'),
						'img'=>$UploadFile
    );
      if($this->module->edit_sleep($id,$add_galery))
      {
    //  $data['flash_message']=true;
  //redirect('edit_sleep');
      }
      else
         {
    //  $data['flash_message']=false;

    }
      }
  $data['sleep_data']=$this->module->get_sleep_by_id($id);
  //print_r($data['sleep_data']);exit;
  $data['main_content'] = 'admin/edit_sleep';
  $this->load->view('includes/template', $data);
  //$this->load->view('admin/home');
 }
 function order_list()
	 {
	 	//echo 1; die;
      $data['results'] = $this->module->get_order_list();
		//echo "<pre>"; print_r($data['results']);exit;
        $data['main_content'] = 'admin/order_list';
        $this->load->view('includes/template', $data);
    }
    function more_details(){
    	$id=$this->uri->segment(2);
    	if($this->input->server('REQUEST_METHOD')=='POST')
		{
    	$add_model_name=array(
			'contact_person'=>$this->input->post('contact_person'),
			'phone_no'=>$this->input->post('phone_no'),
			'email'=>$this->input->post('email')

			);
			if($this->module->edit_order_id($id,$add_model_name))
		{
			$data['flash_message']=TRUE;
		}
		else{
			$data['flash_message']=FALSE;
		}
		}


    	//echo $id;exit;
    	$data['results'] = $this->module->get_order_byid($id);
		$data['main_content'] = 'admin/more_details';
		$this->load->view('includes/template',$data);
	}


public function brandcategory()
{
	if($this->input->server('REQUEST_METHOD')=='POST')
   {

    	$main_category = $this->input->post('main_category');
    //	echo $main_category;
			$getallbrand = $this->module->allbrand($main_category);
		//	print_r($getallbrand);

      echo'  <option value="">Select</option>
				<option value="0" >Not Specified</option>';

				foreach ($getallbrand as $key => $value) {
			 	echo '<option value="'.$value['id'].'">'.$value['brandname'].'</option>';
				}


  }

}

}

?>
