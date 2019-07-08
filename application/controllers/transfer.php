<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();
	}

		//page view
   		public function transfer()
		{
				$this->load->model('Model_transfer');
				$data['transfer_data'] = $this->Model_transfer->viewTransfer();
				

				$this->load->view('sections/user/header');
				$this->load->view('sections/user/transfer/transfer',$data);
				$this->load->view('sections/user/footer');
				
		}   

		//create transfer
		public function createTransfer()
		{
				$this->form_validation->set_rules("Barcode", "Valid Barcode", 'required');
				$this->form_validation->set_rules("unitCost", "Select Unit Cost", 'required');
				$this->form_validation->set_rules("sections", "Select proper section", 'required');
				$this->form_validation->set_rules("quantity", "Quantity", 'callback_quantity_check');
				$this->form_validation->set_rules("cost", "Cost", 'required');

				if($this->form_validation->run()==FALSE)
						{		
							$this->session->set_flashdata('error', 'Fill all the fields with valid data');

							$this->transfer();
						}
				else
						{
							$this->session->set_flashdata('success', 'Data transfered successfully');

							$this->load->model('Model_transfer');				
							$this->Model_transfer->createTransfer();
							
							redirect(base_url() . "Transfer/transfer");
							$this->transfer();
						}
		}

		//quantity validation
		public function quantity_check($str)
        {
                if ($str == '')
                {
                        $this->form_validation->set_message('quantity_check', 'The Quantity field required to be filled');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }

	//delete function

	public function deleteTransfer($id)
	{
		$this->session->set_flashdata('delete', 'Record deleted successfully');

		$this->load->model('Model_transfer');
		$this->Model_transfer->deleteTransfer($id);
		redirect(base_url() . "Transfer/transfer");
		$this->transfer();
	}

	//edit to update data
	public function editTransfer($id)
	{
		$this->load->model('Model_transfer');
		$data['transfer_data'] = $this->Model_transfer->viewTransfer();
		$data['transferData'] = $this->Model_transfer->viewTransfer($id);

		$this->load->view('sections/user/header');
		$this->load->view('sections/user/transfer/update_transfer',$data);
		$this->load->view('sections/user/footer');
	}

	//update edited data
	public function updateTransfer()
	{
		$this->session->set_flashdata('update', 'Record updated successfully');

		$this->load->model('Model_transfer');
		$this->Model_transfer->updateTransfer();
		redirect(base_url() . "Transfer/transfer");
		$this->transfer();
	}

}
