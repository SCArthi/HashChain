<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogin extends Admin_Controller 
{

	public function __construct()
	{
        parent::__construct();
        $this->load->helper('security');  
        $this->load->library('form_validation');
        
	}
    
    public function userlogin(){

        $this->form_validation->set_rules('username', 'Username:', 'required|trim');  
        $this->form_validation->set_rules('pwd', 'Password:', 'required|trim'); 


        if ($this->form_validation->run() == FALSE)   
        {  
            $this->load->view('templates/header');
            $this->load->view('sections/user/login/login');
            $this->load->view('templates/footer'); 
        }   
        else {  
            redirect(base_url() . "Dashboard/userdashboard");
            }  
            
        }
		
}

