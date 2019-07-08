<?php  
  
class Login_model extends CI_Model {  

    public function __construct()
	{
        $this->load->database();
    }
  
    public function log_in_correctly() {  
  
        $this->db->get_where('Username', $this->input->post('username'));  
        $this->db->get_where('Password', $this->input->post('pwd'));  

        
  
    }  
  