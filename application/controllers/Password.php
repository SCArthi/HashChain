<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
	*/
	public function forgotPassword()
	{
		$this->load->view('templates/header');
		$this->load->view('sections/user/login/forgotPassword');
		$this->load->view('sections/user/footer');
	}
}
