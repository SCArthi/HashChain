<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
	*/
	
	public function userlogin()
	{
		$this->load->view('templates/header');
		$this->load->view('sections/user/login/login');
		$this->load->view('sections/user/footer');
	}

    public function adminlogin()
	{
		$this->load->view('templates/header');
		$this->load->view('sections/admin/login/login');
		$this->load->view('templates/footer');
    }
    
    public function superadminlogin()
	{
		$this->load->view('templates/header');
		$this->load->view('sections/superadmin/login/login');
		$this->load->view('templates/footer');
    }
    
}
