<?php
class Admin_banner_apps extends CI_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */ 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('apps_banner_model');

        if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
   
    function update_apps_banner()
	{
		echo 1; exit;
		$data['banner_img']=$this->module->get_banner_img();
		$data['main_content'] = 'admin/update_apps_banner';
        $this->load->view('includes/template', $data);
		
		//$this->load->view('admin/home');
	}
    public function delete()
    {
        //category id 
        $id = $this->uri->segment(4);
        $this->faq_model->delete_faq($id);
        redirect('admin/faq');
    }//edit

}
