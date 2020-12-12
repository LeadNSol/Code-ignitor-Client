
<?php 
$userdata=$this->session->all_userdata();
@$user_type=$userdata['user_type'];

if($user_type == "admin"){
$this->load->view('includes/side');
}else{
    $this->load->view('includes/side_user');
} ?>
<?php $this->load->view('includes/header'); ?>
<?php $this->load->view($main_content); ?>

<?php $this->load->view('/includes/footer'); ?>

