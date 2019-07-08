<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FinalGoods extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();	
	}
 
    public function final_good()
	{

        $this->load->model('Model_final_goods');
		$data['finalGoods'] = $this->Model_final_goods->index();

        $this->load->view('sections/user/header');
        $this->load->view('sections/user/view_final_good/final_good', $data);
        $this->load->view('sections/user/footer');
    }
    
    public function addFinalGoods()
	{
		$this->form_validation->set_rules("name", "Product Name", 'required');
        $this->form_validation->set_rules("quantity", "Quantity", 'required');
        $this->form_validation->set_rules("barcode", "Barcode", 'required');

        if (!$this->form_validation->run()) 
        {
            $this->session->set_flashdata('error', 'Fill all the fields with valid data');
            
            $this->final_good();
            
        } 
        
        else 
        {
            $this->session->set_flashdata('success', 'Final Goods recorded successfully');

			$this->load->model('Model_final_goods');
            $this->Model_final_goods->saveFinalGood();
            redirect(base_url() . "FinalGoods/final_good");
			$this->final_good();
		}
	}

	public function deleteFinalGoods($id)
	{
        $this->session->set_flashdata('delete', 'Record deleted successfully');

		$this->load->model('Model_final_goods');
        $this->Model_final_goods->deleteFinalGood($id);
        redirect(base_url() . "FinalGoods/final_good");
		$this->final_good();
	}

	public function editFinalGoods($id)
	{
		$this->load->model('Model_final_goods');
		$data['finalGood'] = $this->Model_final_goods->index($id);
		$data['finalGoods'] = $this->Model_final_goods->index();

        $this->load->view('sections/user/header');
        $this->load->view('sections/user/view_final_good/update_final_good', $data);
        $this->load->view('sections/user/footer');
	}

	public function updateFinalGoods()
	{
        $this->session->set_flashdata('update', 'Record updated successfully');

		$this->load->model('Model_final_goods');
        $this->Model_final_goods->updateFinalGood();
        redirect(base_url() . "FinalGoods/final_good");
		$this->final_good();
	}
    
}
