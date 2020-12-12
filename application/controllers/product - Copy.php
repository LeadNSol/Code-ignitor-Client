<?php
//print_r($main_content);exit;
/*class Main extends Secure_area */

//require_once APPPATH.'libraries/facebook/facebook.php';
//require_once APPPATH."/libraries/PHPExcel.php";
//require_once APPPATH."/libraries/excel.php";

class Product extends CI_Controller  
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

	}

	function index()
	{
		
	}
		
   function add_category()
	{
		
		if($this->input->server('REQUEST_METHOD')=='POST')
		{
			//echo 1; exit;				 
	      if($_FILES['site_image']['name']!='')
				{
					//echo "<pre>" ; print_r("$_FILES"); exit;
					//echo $_FILES['site_image']['name']."koko";exit;
       
					if(!is_dir('../uploads/site_cat_image/')) {
						umask(0);
						mkdir('../uploads/site_cat_image/',0777);
					}
	
					$time=time();
					$config['upload_path'] = '../uploads/site_cat_image/';
					$config['file_name'] = $time."_".$_FILES['site_image']['name'];
					$config['image_library'] ='gd2';
											
					//$main_image=$time."_".$_FILES['small_image']['name'];
					$UploadFile=$config['file_name'];
					
					$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
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
						
						$source_image=realpath('../uploads/site_cat_image/'.$UploadFile);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           = 1920;
						$config['height']           = 900;
						$config['new_image']       =    '../uploads/site_cat_image/'.$time."_".$_FILES['site_image']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
						
						$this->load->library('image_lib',$config);
						
						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());
						
						}
						$this->image_lib->clear();
						
						
						$source_image=realpath('../uploads/site_cat_image/'.$UploadFile);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           = 200;
						$config['height']          = 221;
						$config['new_image']       =    '../uploads/site_cat_image/thumb/'.$time."_".$_FILES['site_image']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
						$this->image_lib->initialize($config);
						
						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());
						}	
						$this->image_lib->clear();
						
						
				   	}

				   
					
				}
if($_FILES['apps_image']['name']!='')
				{
					//echo "<pre>" ; print_r("$_FILES"); exit;
					//echo $_FILES['site_image']['name']."koko";exit;
       
					if(!is_dir('../uploads/site_cat_image/')) {
						umask(0);
						mkdir('../uploads/site_cat_image/',0777);
					}
	
					$time=time();
					$config['upload_path'] = '../uploads/site_cat_image/';
					$config['file_name'] = $time."_".$_FILES['apps_image']['name'];
											
					//$main_image=$time."_".$_FILES['small_image']['name'];
					$UploadFile1=$config['file_name'];
					
					$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
				    $config['image_library'] = 'gd2';
					$config['overwrite'] = TRUE;
					$config['encrypt_name'] = FALSE;
					$config['remove_spaces'] = TRUE;
					$config['max_size']   = '1024';
					
					$this->load->library('upload',$config);
					
					if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
					if ( ! $this->upload->do_upload('apps_image'))
					{
						echo 'error';
					} else {

						$this->upload->initialize($config);
						
						$source_image=realpath('../uploads/site_cat_image/'.$UploadFile1);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           = 1920;
						$config['height']           = 900;
						$config['new_image']       =    '../uploads/site_cat_image/'.$time."_".$_FILES['apps_image']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
						
						$this->load->library('image_lib',$config);
						
						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());
						
						}
						$this->image_lib->clear();
						
						
						$source_image=realpath('../uploads/site_cat_image/'.$UploadFile1);
						$config['image_library']   = 'gd2';
						$config['source_image']    = $source_image;
						$config['create_thumb']    = TRUE;
						$config['maintain_ratio']  = FALSE;
						$config['width']           = 200;
						$config['height']          = 221;
						$config['new_image']       =    '../uploads/site_cat_image/thumb/'.$time."_".$_FILES['apps_image']['name'];
						$config['thumb_marker']    = '';
						//$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
						$this->image_lib->initialize($config);
						
						if ( ! $this->image_lib->resize())
						{
						$data['error'] = strip_tags($this->image_lib->display_errors());
						}	
						$this->image_lib->clear();
				   	}

				   
					
				}

			/**/	 	
			$cat_arr=array(
			'name'=>$this->input->post('name'),
			'description'=> $this->input->post('description'),
			'site_image'=>$UploadFile,
			'apps_image'=>$UploadFile1
             );

			if($insert_category=$this->product_module->add_category($cat_arr))
			{
					$data['flash_message'] =TRUE;
			}
			else
			{
				$data['flash_message'] =FALSE;
			}
		
		}		  
		 $data['main_content'] = 'admin/add_category';
         $this->load->view('includes/template', $data);
		 
	}
	public function add_product()
	{
		
		if($this->input->server('REQUEST_METHOD')=='POST')
		{
         }
       $data['main_category']=$this->product_module->get_category();
		 $data['main_content'] = 'admin/add_product';
         $this->load->view('includes/template', $data);
		
	}
	
	
	
}

?>