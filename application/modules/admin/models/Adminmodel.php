<?php  
Class  Adminmodel extends CI_Model{
    public function get_user_information(){
        $query = $this->db->get('user_details')->result_array();
        return $query;
    }
    public function fetch_all_user_info($user_id) {
        $sqlQuery = $this->db->query("SELECT *
        FROM user_details
        LEFT JOIN medical_details ON user_details.staff_id = medical_details.staff_id
        LEFT JOIN employment_details ON user_details.staff_id = employment_details.staff_id
        LEFT JOIN educational_details ON user_details.staff_id = educational_details.staff_id
        WHERE user_details.staff_id = '$user_id'")->result_array();
        return $sqlQuery;
    }
    
}
?>