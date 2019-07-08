<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barcode extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

		
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
    */
        
    public function barcode_print()
	{
        $this->load->view('sections/user/header');
        $this->load->view('sections/user/print_barcode/barcode_print');
        $this->load->view('sections/user/footer');
	}
    
}
