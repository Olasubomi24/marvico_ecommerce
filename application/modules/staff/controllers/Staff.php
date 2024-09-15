<?php
class Staff extends MX_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->module('template');
        $this->load->model('staffmodel');
    }

    public function index(){
        
        $staff_id = $this->session->userdata('staff_id');
        
        $fetch_personal_details = $this->staffmodel->validate_staff_id($staff_id);
        $data = array(
            'title' => 'Staff Dashboard',
            'content_view' => 'staff/index',
            'active' => 'active',
            'staff_id' => $staff_id,
            'personal_details' => $fetch_personal_details
        );

        // Load the general template and pass in the data
        $this->template->general_template($data);

    }



    public function personal_details(){
        $staff_id = $this->session->userdata('staff_id');
       
        $fetch_personal_details = $this->staffmodel->validate_staff_id($staff_id);
        $fetch_more_details = $this->staffmodel->validate_staff_id_copy($staff_id);
        $data = array(
            'title' => 'Personal Details',
            'content_view' => 'staff/personal_details/personal_details',
            'personal_details' => $fetch_personal_details,
            'more_details' => $fetch_more_details
        );
        $this->template->general_template($data);
    }
    
    public function nextofkin(){
        $staff_id = $this->session->userdata('staff_id');
        $fetch_personal_details = $this->staffmodel->validate_staff_id($staff_id);
        $fetch_more_details = $this->staffmodel->validate_staff_id_copy($staff_id);
        $data = array('title'=>'Personal Details',
                       'content_view'=>'staff/personal_details/nextofkin',  'active'=>'active'  ,'personal_details' => $fetch_personal_details,
                       'more_details' => $fetch_more_details);
        $this->template->general_template($data); 
    }
    public function medical_details(){
        $staff_id = $this->session->userdata('staff_id');
        $fetch_medical_details = $this->staffmodel->validate_staff_id($staff_id);
        $fetch_more_details = $this->staffmodel->select_medical_details($staff_id);
    
        if(empty($fetch_more_details)) {
            $fetch_more_details_copy = array(
                 'staff_id'=>$staff_id,
                'height' => '', 
                'weight' => "",
                'blood_group' => "", 
                'medical_history' => "",
                'genotype' => "",
                'having_medical_issue' => ''
            );
        } else {
            $fetch_more_details_copy = $fetch_more_details[0];
        }
        
        $data = array(
            'title' => 'Medical Details',
            'content_view' => 'staff/medical_details',
            'active' => 'active',
            'medical_details' => $fetch_medical_details,
            'more_details' => $fetch_more_details_copy
        );
        
        $this->template->general_template($data); 
    }
    
    public function educational_details(){
        $staff_id = $this->session->userdata('staff_id');
       
        $fetch_educational_details = $this->staffmodel->validate_staff_id($staff_id);
        $fetch_more_details = $this->staffmodel->select_educational_details($staff_id);
        
        $data = array('title'=>'Educational Details',
                       'content_view'=>'staff/educational_details/language', 'personal_details' => $fetch_educational_details, 'more_details' => $fetch_more_details);
        $this->template->general_template($data); 
    }
   
    public function educational_details_school(){
        $staff_id = $this->session->userdata('staff_id');
        $fetch_educational_details = $this->staffmodel->validate_staff_id($staff_id);
        $fetch_more_details = $this->staffmodel->select_educational_details($staff_id);
        if(empty($fetch_more_details)){
            $fetch_more_details_copy = array("staff_id" => $staff_id,
           'university_name' => "",
           'university_country' => "",
           'university_place' => "",
           'university_started_when' => "",
           'university_ended_when' => "",
           'degree' => "",
           'course_of_study' => "",
           'school_type' => "",
           'school_diploma' => "",
           'school_name' => "",
           'school_country' => "",
           'school_place' => "",
           'school_started_when' => "",
           'school_ended_when' => "",
           'other_courses_name' => "",
           'other_courses_started_when' => "",
           'other_courses_place' => "",
           'other_courses_type' => "",
           'other_courses_country' => "",
           'other_courses_diploma' => "",
           'other_courses_ended_when' => "");
        } else {
            $fetch_more_details_copy = $fetch_more_details[0];
        }
        $data = array('title'=>'Educational details',
                       'content_view'=>'staff/educational_details/school',  
                       'personal_details' => $fetch_educational_details,  
                       'more_details' => $fetch_more_details_copy);
        $this->template->general_template($data); 
    }
    

    public function employment_details(){
        $staff_id = $this->session->userdata('staff_id');
        $fetch_educational_details = $this->staffmodel->validate_staff_id($staff_id);
        $fetch_more_details = $this->staffmodel->select_employment_details($staff_id);
        if(empty($fetch_more_details)){
            $fetch_more_details_copy = array("staff_id" => "",
            'employed_from' => "",
            'employed_to' => "",
            'salary_per_annum_start' => "",
            'salary_per_annum_final' => "",
            'name_of_employer' => "",
            'address_of_employer' => "",
            'type_of_business' => "",
            'name_of_supervisor' => "",
            'no_of_employee' => "",
            'title_of_post' => "",
            'reason_of_living' => "",
            'duties' => "");
        }
        
        else{
            $fetch_more_details_copy = $fetch_more_details[0];
            
        }
        $data = array('title'=>'employment details',
                       'content_view'=>'staff/employment_details', 'personal_details' => $fetch_educational_details,  'more_details' => $fetch_more_details_copy);
        $this->template->general_template($data); 
    }
    

    public function personal_details_update(){
        $staff_id = $this->input->post('staff_id');
     
        $middle_name = $this->input->post('middle_name');
        $staff_id = $this->input->post('staff_id');
        $sex = $this->input->post('sex');
        $marital_status = $this->input->post('marital_status');
        $country = $this->input->post('country');
        $city_of_birth = $this->input->post('cityofbirth');
        $date_of_birth = $this->input->post('dob');
        $nationality = $this->input->post('nationality');
        $nextofkinname = $this->input->post('nname');
        $nextofkinrelationship = $this->input->post('nrelationship');
        $nextofkincity = $this->input->post('ncity');
        $address = $this->input->post('address');
        $phone_no = $this->input->post('phone_no');
        $nextofkincontactdetails = $this->input->post('ncontactdetails');
        $other_email = $this->input->post('other_email');
       
        $next_of_kin_phone_no = $this->input->post('nphoneno');
        $next_of_kin_nationality = $this->input->post('nnationality');
        
        $data = array(
            'middle_name' => $this->input->post('middle_name'),
            'marital_status' => $marital_status,
            'date_of_birth' => $date_of_birth,
            'address' => $address,
            'sex' => $sex,
            'country' => $country,
            'nationality' => $nationality,
            'city_of_birth' => $city_of_birth,
            'phone_no' => $phone_no,
            'email' => $email,
            'other_email' => $other_email,
            'staff_id' => $staff_id,
            
        );
        
        $update_now = $this->staffmodel->update_personal_details($staff_id, $data);
    
    
  
        
        if($update_now == true){
           redirect('staff/personal_details');
        }
        else{
            echo "update failed";
        }
    }

    public function next_of_kin_update(){
        $staff_id = $this->input->post('staff_id');
        $nextofkinname = $this->input->post('nname');
        $nextofkinrelationship = $this->input->post('nrelationship');
        $nextofkincity = $this->input->post('ncity');
        $nextofkincontactdetails = $this->input->post('ncontactdetails');
        $next_of_kin_phone_no = $this->input->post('nphoneno');
        $next_of_kin_nationality = $this->input->post('nnationality');
        
        $data = array(
            'next_of_kin_phone_no' => $next_of_kin_phone_no,
            'next_of_kin_name' => $nextofkinname,
            'next_of_kin_relationship' => $nextofkinrelationship,
            'next_of_kin_contact_details' => $nextofkincontactdetails,
            'next_of_kin_city' => $nextofkincity,
            'next_of_kin_country' => $next_of_kin_nationality
            
        );
        
        $update_now = $this->staffmodel->update_personal_details($staff_id, $data);
    
       
  
        
        if($update_now == true){
           redirect('staff/nextofkin');
        }
        else{
            echo "update failed";
        }
    }
    public function medical_details_insert_update() {
       
        $staff_id = $this->input->post('staff_id');
        $height = $this->input->post('height');
        $weight = $this->input->post('weight');
        $blood_group = $this->input->post('blood_group');
        $genotype = $this->input->post('genotype');
        $medical_history = $this->input->post('medical_history');
        $having_medical_issue = $this->input->post('having_medical_issue');
       
    
        $check_email = $this->staffmodel->select_medical_details($staff_id);
    
        $data = array(
            'staff_id' => $staff_id,
            'height' => $height,
            'weight' => $weight,
            'blood_group' => $blood_group,
            'genotype' => $genotype,
            'medical_history' => $medical_history,
            'having_medical_issue' => $having_medical_issue
        );
    
        if(count($check_email) > 0) {
            $update_medical_details = $this->staffmodel->update_medical_details($staff_id, $data);
            redirect('staff/medical_details');    
        } else {
            $insert_medical_details = $this->staffmodel->insert_medical_details($staff_id, $data);
            redirect('staff/medical_details');    
        }
    }

    public function educational_details_school_insert_update(){

$staff_id = $this->session->userdata('staff_id');
$get_educational_details  = $this->staffmodel->select_educational_details($staff_id);
$staff_id = $this->input->post('staff_id');
$university_name = $this->input->post('uniname');
$university_country = $this->input->post('unicountry');
$university_place = $this->input->post('uniplace');
$university_started_when = $this->input->post('stwhen');
$university_ended_when = $this->input->post('stend');
$degree = $this->input->post('degree');
$course_of_study = $this->input->post('course');
$school_type = $this->input->post('type');
$school_diploma = $this->input->post('schooldiploma');
$school_name = $this->input->post('schoolname');
$school_country = $this->input->post('schoolcountry');
$school_place = $this->input->post('schoolplace');
$school_started_when = $this->input->post('schoolstwhen');
$school_ended_when = $this->input->post('schoolend');
$other_courses_name = $this->input->post('otcname');
$other_courses_started_when = $this->input->post('otcstwhen');
$other_courses_place = $this->input->post('otcplace');
$other_courses_type = $this->input->post('otctype');
$other_courses_country = $this->input->post('otcountry');
$other_courses_diploma = $this->input->post('otcdiploma');

$data = array(
    'university_name' => $university_name,
    'university_country' => $university_country,
    'university_place' => $university_place,
    'university_started_when' => $university_started_when,
    'university_ended_when' => $university_ended_when,
    'degree' => $degree,
    'course_of_study' => $course_of_study,
    'school_type' => $school_type,
    'school_diploma' => $school_diploma,
    'school_name' => $school_name,
    'school_country' => $school_country,
    'school_place' => $school_place,
    'school_started_when' => $school_started_when,
    'school_ended_when' => $school_ended_when,
    'other_courses_name' => $other_courses_name,
    'other_courses_started_when' => $other_courses_started_when,
    'other_courses_place' => $other_courses_place,
    'other_courses_type' => $other_courses_type,
    'other_courses_country' => $other_courses_country,
    'other_courses_diploma' => $other_courses_diploma,
    'staff_id'=> $staff_id
);

$check_email = $this->staffmodel->select_educational_details($staff_id);
 if(count($check_email) > 0) {
            $update_educational_details = $this->staffmodel->update_educational_details_language($staff_id, $data);
            redirect('staff/educational_details_school');    
        } else {
            $insert_educational_details = $this->staffmodel->insert_educational_details_language($staff_id, $data);
            redirect('staff/educational_details_school');    
        }
    }
    
    public function employment_details_insert_update() {
        $staff_id = $this->session->userdata('staff_id');    
        $get_employment_details  = $this->staffmodel->select_employment_details($staff_id);
      
$staff_id = $this->input->post('staff_id');
        $data = array(
            'staff_id'=>$this->input->post('staff_id'),
            'employed_from' => $this->input->post('fmy'),
            'employed_to' => $this->input->post('tmy'),
            'salary_per_annum_start' => $this->input->post('start'),
            'salary_per_annum_final' => $this->input->post('final'),
            'name_of_employer' => $this->input->post('nameofemployer'),
            'address_of_employer' => $this->input->post('addressofemployer'),
            'type_of_business' => $this->input->post('typeofbs'),
            'name_of_supervisor' => $this->input->post('nameofsupervisor'),
            'no_of_employee' => $this->input->post('noofemployee'),
            'title_of_post' => $this->input->post('titlepost'),
            'reason_of_living' => $this->input->post('reasonforliving'),
            'duties' => $this->input->post('duties')
        );
        $check_email = $this->staffmodel->select_employment_details($staff_id);
 if(count($check_email) > 0) {
            $update_educational_details = $this->staffmodel->update_employment_details($staff_id, $data);
            redirect('staff/employment_details');    
        } else {
            $insert_educational_details = $this->staffmodel->insert_employment_details($staff_id, $data);
            redirect('staff/employment_details');    
        }

    }
}

?>