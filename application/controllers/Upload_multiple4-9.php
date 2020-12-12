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
	//echo 11;
	// exit; 
	
  sleep(3);
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
			
  

  
  //priduct_image
    
  }
 }
}