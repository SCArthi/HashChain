<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
    */
        
    public function view_main_stock()
        {
            $this->load->model("Model_main_stock");
            $data['main_stock'] = $this ->Model_main_stock->viewMainStock();

            // $this->fetch();

            $this->load->view('sections/user/header');
            $this->load->view('sections/user/view_main_stock/main_stock', $data);
            $this->load->view('sections/user/footer');
        }

        public function fetch()
        {
            $output = '';
            $query = '';
            $this->load->model('Model_main_stock');

            if($this->input->post('query'))
            {
                $query = $this->input->post('query');
            }
            $data =  $this->Model_main_stock->fetch_data($query);

            $output .= '
                <div class="table-responsive">
                    <table class = "table table-bordered table-striped">
                        <tr>
                            <th>Purchase Order No</th>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                        
                        </tr>
            ';

            if($data->num_rows() > 0)
            {
                foreach($data->result() as $row)
                {
                    $output .= '
                    <tr>
                        <td>'.$row->Purchase_order_no.'</td>
                        <td>'.$row->Barcode.'</td>
                        <td>'.$row->Name.'</td>
                        <td>'.$row->Type.'</td>
                        <td>'.$row->Quantity.'</td>
                        <td>'.$row->Unit_Price.'</td>
                        <td>'.$row->Total.'</td>
                    </tr>
                ';
                }
            }
            else
            {
                $output .= '
                    <tr>
                        <td colspan ="7">No Data Found</td>
                    </tr>
                ';
            }
            $output .= '</table>';
            echo $output;
        }

        //delete function
        public function deleteMainStock($id)
        {
            $this->session->set_flashdata('delete', 'Record deleted successfully');

            $this->load->model('Model_main_stock');
            $this->Model_main_stock->deleteMainStock($id);
            redirect(base_url() . "Stock/view_main_stock");
            $this->view_main_stock();
        }

        //edit to update data
        public function editMainStock($id)
        {
            $this->load->model('Model_main_stock');
            $data['main_stock'] = $this->Model_main_stock->viewMainStock();
            $data['mainstock'] = $this->Model_main_stock->viewMainStock($id);

            $this->load->view('sections/user/header');
            $this->load->view('sections/user/view_main_stock/main_stock', $data);
            $this->load->view('sections/user/footer');
        }

        //update edited data
        public function updateMainStock()
        {
            $this->session->set_flashdata('update', 'Record updated successfully');

            $this->load->model('Model_main_stock');

            $data['main_stock'] = $this->Model_main_stock->viewMainStock();
            $data['mainstock'] = $this->Model_main_stock->viewMainStock($id);
            
            $this->Model_main_stock->updateMainStock();
            redirect(base_url() . "Stock/view_main_stock");
            $this->view_main_stock();
        }
 
}
