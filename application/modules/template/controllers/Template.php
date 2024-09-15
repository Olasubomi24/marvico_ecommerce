<?php 
class Template extends MX_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function auth_template($data){
        $this->load->view('auth_template',$data);
    }

    public function general_template($data){
        $this->load->view('general_template', $data);
    }
    public function general_template_for_admin($data){
        $this->load->view('general_template_for_admin', $data);
    }
}
?>