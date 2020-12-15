<?php
//print_r($main_content);exit;
/*class Main extends Secure_area */

//require_once APPPATH.'libraries/facebook/facebook.php';
//require_once APPPATH."/libraries/PHPExcel.php";
//require_once APPPATH."/libraries/excel.php";

class Exam_Product extends CI_Controller
{
	/*
	Controllers that are considered secure extend Main, optionally a $module_id can
	be set to also check if a user can access a particular module in the system.
	*/
	public function __construct()
	{
		//$this->load->model('files');
		//echo "Prak"; exit;
		parent::__construct();
		$this->load->model('module');
		$this->load->model('apps_model');
		$this->load->model('exam_product_model');
		$this->load->library('pagination');
		$this->load->library('session');
		date_default_timezone_set('Asia/Kolkata');
      //  $this->load->model('files');
      
        /*if(!$this->session->userdata('is_logged_in')){
          redirect(base_url());
        }*/
	}
	
	

	function index()
	{

	}



	/*
	 * Exam Subject
	 * */

	function add_exam_subject()
	{
		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		$data['results'] = $this->exam_product_model->getClass();
		$data['main_content'] = 'admin/exam/add_exam_subject';
		$this->load->view('includes/template', $data);

	}

	function add_exam_subject_details()
	{
		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}

		if($_FILES['site_image']['name']!='')
		{
			//echo "<pre>" ; print_r("$_FILES"); exit;
			//echo $_FILES['site_image']['name']."koko";exit;
			$type_profile=$this->input->post('type_profile');
			if(!is_dir('images/')) {
				umask(0);
				mkdir('images/',0777);
			}

			$time=time();
			$config['upload_path'] = 'images/';
			$config['file_name'] = $time."_".$_FILES['site_image']['name'];

			//$main_image=$time."_".$_FILES['small_image']['name'];
			$UploadFile=$config['file_name'];

			$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
			$config['image_library'] = 'gd2';
			$config['overwrite'] = TRUE;
			$config['encrypt_name'] = FALSE;
			$config['remove_spaces'] = TRUE;

			$this->load->library('upload',$config);

			if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
			if ( ! $this->upload->do_upload('site_image'))
			{
				echo 'error';
			} else {

				$this->upload->initialize($config);

				$source_image=realpath('images/'.$UploadFile);
				$config['image_library']   = 'gd2';
				$config['source_image']    = $source_image;
				$config['create_thumb']    = TRUE;
				$config['maintain_ratio']  = FALSE;
				//$config['width']           = 590;
				//$config['height']           = 400;
				$config['new_image']       =    'images/'.$time."_".$_FILES['site_image']['name'];
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
				//$config['width']           = 590;
				//$config['height']          = 400;
				$config['new_image']       =    'images/thumb/'.$time."_".$_FILES['site_image']['name'];
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
		$cat_arr=array(
			'subject_name'=>$this->input->post('name'),
			'class_id'=>$this->input->post('class_id'),
			'image'=>$UploadFile,
			'amount'=>$this->input->post('amount'),
			'month'=>$this->input->post('duration')

		);

		if($insert_home=$this->exam_product_model->addExamSubjectDetails($cat_arr))
		{
			$data['flash_message'] =TRUE;
		}
		else{

			$data['flash_message'] =FALSE;
		}
		$data['results'] = $this->exam_product_model->getClass();
		$data['main_content'] = 'admin/exam/add_exam_subject';
		$this->load->view('includes/template', $data);
	}

	function list_exam_subject(){

		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}

		{
			$data['results'] = $this->exam_product_model->getExamSubjectList();
			$data['main_content'] = 'admin/exam/list_exam_subject';
			$this->load->view('includes/template', $data);
		}
	}

	function edit_exam_subject($id){

		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		$data['ExamSubjectList']=$this->exam_product_model->getExamSubjectById($id);
		$data['result'] = $this->exam_product_model->getClass();
		$data['main_content'] = 'admin/exam/edit_exam_subject';
		$this->load->view('includes/template', $data);

	}

	function update_exam_subject($id)
	{
		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		if($_FILES['site_image']['name']!='')
		{
			//echo "<pre>" ; print_r("$_FILES"); exit;
			//echo $_FILES['site_image']['name']."koko";exit;
			$type_profile=$this->input->post('type_profile');
			if(!is_dir('images/')) {
				umask(0);
				mkdir('images/',0777);
			}

			$time=time();
			$config['upload_path'] = 'images/';
			$config['file_name'] = $time."_".$_FILES['site_image']['name'];

			//$main_image=$time."_".$_FILES['small_image']['name'];
			$UploadFile=$config['file_name'];

			$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
			$config['image_library'] = 'gd2';
			$config['overwrite'] = TRUE;
			$config['encrypt_name'] = FALSE;
			$config['remove_spaces'] = TRUE;

			$this->load->library('upload',$config);

			if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
			if ( ! $this->upload->do_upload('site_image'))
			{
				echo 'error';
			} else {

				$this->upload->initialize($config);

				$source_image=realpath('images/'.$UploadFile);
				$config['image_library']   = 'gd2';
				$config['source_image']    = $source_image;
				$config['create_thumb']    = TRUE;
				$config['maintain_ratio']  = FALSE;
				//$config['width']           = 590;
				//$config['height']           = 400;
				$config['new_image']       =    'images/'.$time."_".$_FILES['site_image']['name'];
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
				//$config['width']           = 590;
				//$config['height']          = 400;
				$config['new_image']       =    'images/thumb/'.$time."_".$_FILES['site_image']['name'];
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



		$update_cateorgy=array(
			'subject_name'=>$this->input->post('name'),
			'class_id'=>$this->input->post('class_id'),
			'image'=>$UploadFile
		);

		//echo "<pre>";print_r($update_cateorgy);exit;

		if($ffff=$this->exam_product_model->updateExamSubject($id,$update_cateorgy))
		{
			$data['flash_message'] =TRUE;
		}
		else{
			$data['flash_message'] =FALSE;
		}

		$data['results'] = $this->exam_product_model->getExamSubjectList();
		$data['result'] = $this->exam_product_model->getClass();
		$data['main_content'] = 'admin/exam/list_exam_subject';
		$this->load->view('includes/template', $data);
	}

	function delete_exam_subject_details($id)
	{
		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}

		$this->exam_product_model->deleteExamSubjectById($id);


		$data['results'] = $this->exam_product_model->getExamSubjectList();

		$data['main_content'] = 'admin/exam/list_exam_subject';
		$this->load->view('includes/template', $data);


	}

	/*
	 * Exam chapter Name
	 * */

	function add_exam_chapter()
	{ 
	   $userdata=$this->session->all_userdata();
       @$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		 $data['subjects'] = $this->exam_product_model->getExamSubjectList();
 		 $data['results'] = $this->exam_product_model->getClass();
		 $data['main_content'] = 'admin/exam/add_exam_chapter';
         $this->load->view('includes/template', $data);

	}
	function add_exam_chapter_details()
	{
		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}

		$cat_arr=array(
			'chapter_name'=>$this->input->post('name'),
			'class_id'=>$this->input->post('class_id'),
			'sub_id'=>$this->input->post('sub_id')
		);

		if($insert_home=$this->exam_product_model->addExamChapterName($cat_arr))
		{
			$data['flash_message'] =TRUE;
		}
		else{

			$data['flash_message'] =FALSE;
		}
		$data['results'] = $this->exam_product_model->getClass();
		$data['main_content'] = 'admin/exam/add_exam_chapter';
		$this->load->view('includes/template', $data);

	}

	function fetch_exam_subject()
	{
		echo "new entere";
		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		$iddata=$this->input->post('iddata');
		$class_id = $this->input->post('class_id');
		$getSubject = $this->exam_product_model->getAllSubjectByClass($class_id);
		$get_team=$this->exam_product_model->getExamChapterById($iddata);

		//print_r($getsubject);die;
		echo '<option value="">Select Subject</option>';
		foreach ($getSubject as $key => $value) {
			/*if($value['s_id']==$get_team[0]['subject_id']){
				$select_attribute = "selected";

			}else{
				$select_attribute = "";
			}
			echo '<option value="'.$value['s_id'].'" '.$select_attribute.'>'.$value['subject_name'].'</option>';
		*/
			echo '<option value="'.$value['s_id'].'" >'.$value['subject_name'].'</option>';

		}
//'..'selected'.}
	}

	function list_exam_chapter_name(){

		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}


			$data['results'] = $this->exam_product_model->getExamChapterNames();
			$data['main_content'] = 'admin/exam/list_exam_chapter_name';
			$this->load->view('includes/template', $data);

	}
	function edit_exam_chapter_name()
	{
		$id=$this->uri->segment(2);
		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		if($this->input->server('REQUEST_METHOD')=='POST')
		{
			$cat_arr=array(
				'chapter_name'=>$this->input->post('name'),
				'class_id'=>$this->input->post('class_id'),
				'sub_id'=>$this->input->post('sub_id')
			);

			if($insert_home=$this->exam_product_model->updateExamChapterName($id,$cat_arr))
			{
				$data['flash_message'] =TRUE;
			}
			else{

				$data['flash_message'] =FALSE;
			}
			$data['results'] = $this->exam_product_model->getExamChapterNames();
			$data['main_content'] = 'admin/exam/list_exam_chapter_name';
			$this->load->view('includes/template', $data);
		}
		$data['get_chapter_name'] = $this->exam_product_model->getChapterNamesByID($id);
//echo"<pre>";
//print_r($data['get_chapter_name']);exit;
		$data['results'] = $this->exam_product_model->getClass();
		$data['main_content'] = 'admin/edit_exam_chapter_name';
		$this->load->view('includes/template', $data);
	}


	function delete_exam_chapter_name()
	{
		$id=$this->uri->segment(2);
		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}

		$this->exam_product_model->deleteChapterName($id);


		$data['results'] = $this->exam_product_model->getExamChapterNames();
		$data['main_content'] = 'admin/exam/list_exam_chapter_name';
		$this->load->view('includes/template', $data);
	}


	/*
	 * Add exam chapter video
	 * */

	function add_exam_chapter_video()
	{
		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}

		//$data['results'] = $this->product_module->get_class();
		$data['results'] = $this->exam_product_model->getClass();
		$data['main_content'] = 'admin/exam/add_exam_chapter_video';
		$this->load->view('includes/template', $data);

	}

	function fetch_exam_chapter()
	{
		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}

		$sub_id = $this->input->post('subject_id');
		$iddata=$this->input->post('iddata');
		$get_team=$this->exam_product_model->getExamChapterById($iddata);
		$getsubject = $this->exam_product_model->getChapterNamesBySubjectID($sub_id);
		//print_r($get_team);die;
		echo'  <option value="">Select</option>';
		foreach ($getsubject as $key => $value) {
			if($value['chapter_name_id']==$get_team[0]['chapter_id_name']){
				$select_attribute = "selected";
			}else{
				$select_attribute = "";
			}
			echo '<option value="'.$value['chapter_name_id'].'" '.$select_attribute.'>'.$value['chapter_name'].'</option>';
		}

	}

	function exam_chapter_upload_image(){
		$return = "";
		$time=time();
		$fileName = str_replace(' ', '_', $_FILES['file']['name']);
		$file = $time."_".$fileName;
		$file = str_replace(' ', '_', $file);
		$sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a
		$targetPath = "images/".$file; // Target path where file is to be stored
		//echo $sourcePath;exit;
		move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file
		$return = $file;
		echo $return;
	}
	function exam_chapter_upload_video() {
		if(!empty($_FILES))
		{
			if(is_uploaded_file($_FILES['file']['tmp_name']))
			{
				sleep(1);
				$return = "";
				$time=time();
				$config['max_size']=10*20*1024;
				$config['max_width']= 1024;
				$config['max_height']= 768;
				$fileName = str_replace(' ', '_', $_FILES['file']['name']);
				$file = $time.$fileName;
				$file = str_replace(' ', '_', $file);
				$sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a
				$targetPath = "videos/".$file; // Target path where file is to be stored
				if(move_uploaded_file($sourcePath, $targetPath))
				{
					$return = $file;
					echo $return;
					//echo '<img src="'.$target_path.'" class="img-thumbnail" width="300" height="250" />';
				}
			}
		}
	}
	function exam_chapter_details_add_form()
	{
		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$image=$this->input->post('img_source_name');
			$vid=$this->input->post('vid_source_name');
			if($vid==""){
				$vid=$this->input->post('vid_src_name');
			}

			$cat_arr=array(
				'chapter_id_name'=>$this->input->post('name'),
				'chapter_name'=>$this->input->post('chapter_name'),
				'description'=>$this->input->post('description'),
				'class_id'=>$this->input->post('class_id'),
				'subject_id'=>$this->input->post('sub_id'),
				'video_title'=>$this->input->post('video_title'),
				'video_name'=>$vid,
				'chapter_image'=>$image
			);
			if($task=$this->exam_product_model->addExamChapterDetails($cat_arr))
			{
				$data['flash_message'] =TRUE;
			}
			else{

				$data['flash_message'] =FALSE;
			}
		}
		$data['results'] = $this->exam_product_model->getClass();
		$data['main_content'] = 'admin/exam/add_exam_chapter_video';
		$this->load->view('includes/template', $data);
	}

	function list_exam_chapter_videos(){

		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		$data['results'] = $this->exam_product_model->getExamChapterVideoList();
		//print_r($data);exit;
		$data['main_content'] = 'admin/exam/list_exam_chapter_videos';
		$this->load->view('includes/template', $data);
	}


	function edit_exam_chapter_video($id){

		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}
		$data['get_team']=$this->exam_product_model->getExamChapterVideosByID($id);
		//print_r($data['get_team']);exit;
		$data['results'] = $this->exam_product_model->getClass();
		$data['main_content'] = 'admin/exam/edit_exam_chapter_video';
		$this->load->view('includes/template', $data);

	}

	function update_exam_chapter_video($id)
	{
		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}

		if($this->input->post('vid_source_name')!='')
		{
			$video_name=$this->input->post('vid_source_name');
			/*if(is_uploaded_file($_FILES['vid_source_name']['tmp_name']))
            {
                $video_name=$this->input->post('vid_source_name');
                /*sleep(1);
             $source_path = $_FILES['uploadFile']['tmp_name'];
                $target_path = 'images/' . $_FILES['uploadFile']['name'];
            $video_name=$_FILES['uploadFile']['name'];
                if(move_uploaded_file($source_path, $target_path))
                {
                    //echo '<img src="'.$target_path.'" class="img-thumbnail" width="300" height="250" />';
                }
            }*/
		}else{
			$video_name=$this->input->post('old_videoss');

		}

		if($this->input->post('img_source_name') !="")
		{
			$UploadFile=$this->input->post('img_source_name');
			/*//echo "<pre>" ; print_r("$_FILES"); exit;
            //echo $_FILES['site_image']['name']."koko";exit;
          $type_profile=$this->input->post('type_profile');
            if(!is_dir('images/')) {
                umask(0);
                mkdir('images/',0777);
            }

            $time=time();
            $config['upload_path'] = 'images/';
            $config['file_name'] = $time."_".$_FILES['site_image']['name'];

            //$main_image=$time."_".$_FILES['small_image']['name'];
            $UploadFile=$config['file_name'];

            $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
            $config['image_library'] = 'gd2';
            $config['overwrite'] = TRUE;
            $config['encrypt_name'] = FALSE;
            $config['remove_spaces'] = TRUE;

            $this->load->library('upload',$config);

            if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
            if ( ! $this->upload->do_upload('site_image'))
            {
                echo 'error';
            } else {

                $this->upload->initialize($config);

                $source_image=realpath('images/'.$UploadFile);
                $config['image_library']   = 'gd2';
                $config['source_image']    = $source_image;
                $config['create_thumb']    = TRUE;
                $config['maintain_ratio']  = FALSE;
                //$config['width']           = 590;
                //$config['height']           = 400;
                $config['new_image']       =    'images/'.$time."_".$_FILES['site_image']['name'];
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
                //$config['width']           = 590;
                //$config['height']          = 400;
                $config['new_image']       =    'images/thumb/'.$time."_".$_FILES['site_image']['name'];
                $config['thumb_marker']    = '';
                //$product_small_image=thumb_'.$time."_".$_FILES['small_image']['name'];
                $this->image_lib->initialize($config);

                if ( ! $this->image_lib->resize())
                {
                $data['error'] = strip_tags($this->image_lib->display_errors());
                }
                $this->image_lib->clear();
               }*/

		}else {
			$UploadFile=$this->input->post('old_photo', TRUE);
		}
		if($video_name != "" && $UploadFile !=""){
			$update_cateorgy=array(

				'chapter_name'=>$this->input->post('name'),
				'description'=>$this->input->post('description'),
				'class_id'=>$this->input->post('class_id'),
				'subject_id'=>$this->input->post('sub_id'),
				'video_title'=>$this->input->post('video_title'),
				'video_name'=>$video_name,
				'chapter_image'=>$UploadFile
			);

			//echo "<pre>";print_r($update_cateorgy);exit;

			if($ffff=$this->exam_product_model->updateExamChapterVideo($id,$update_cateorgy))
			{
				$data['flash_message'] =TRUE;
			}
			else{
				$data['flash_message'] =FALSE;
			}
		}else{
			$data['flash_message'] =FALSE;
		}
		$data['results'] = $this->exam_product_model->getExamChapterVideoList();
		//print_r($data);exit;
		$data['main_content'] = 'admin/exam/list_exam_chapter_videos';
		$this->load->view('includes/template', $data);
	}


	function delete_exam_chapter_video($id)
	{
		$userdata=$this->session->all_userdata();
		@$user_id=$userdata['id'];
		if($user_id=='')
		{
			redirect(base_url());
		}

		$this->exam_product_model->deleteExamChapterVideo($id);


		$data['results'] = $this->exam_product_model->getExamChapterVideoList();
		//print_r($data);exit;
		$data['main_content'] = 'admin/exam/list_exam_chapter_videos';
		$this->load->view('includes/template', $data);
	}


}
?>
