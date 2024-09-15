<?php
class Admin extends MX_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->module('template');
        $this->load->model('adminmodel');
        $this->load->model('staff/staffmodel');
       
       
    }

    public function index(){
        $staff_id = $this->session->userdata('staff_id');
        $personal_details = $this->staffmodel->validate_staff_id($staff_id);
        $data = array('title'=>'Admin',
        'staff_id' => $staff_id,
        'personal_details' => $personal_details,
                      'content_view'=>'admin/index');
        $this->template->general_template_for_admin($data);  
    }

    public function user_information(){
$user_information = $this->adminmodel->get_user_information();
$data = array('title'=>'Admin',
'user_information'=>$user_information,
              'content_view'=>'admin/user_information');
$this->template->general_template_for_admin($data);  
}
public function view_more($user_info){
    $user_info = base64_decode($user_info);
    $fetch_user_information = $this->adminmodel->fetch_all_user_info($user_info);
    $data = array(
        'title'=>'Admin',
        'fetch_user'=>$fetch_user_information,
        'content_view'=>'admin/view_more'
    );
    $this->template->general_template_for_admin($data);  
}
}


?>