<?php 

class Model_transfer extends CI_Model
{
	public function __construct()
	{
                $this->load->database();
                
        }
    
        public function viewTransfer($id=FALSE)
        {
                if(!$id){
                        $query=$this->db->get("transfer");
                        return $query->result_array();
                }
                else{
                        $query=$this->db->get_where('transfer',array('id'=>$id));
                        return $query->row_array();
                }
        }

        public function createTransfer()
        {
                $data = array(

                        'Date' => $this->input->post('date'),
                        'Barcode' => $this->input->post('Barcode'),
                        'Unit_Cost' => $this->input->post('unitCost'),
                        'Transfer_to_section' => $this->input->post('sections'),
                        'Quantity' => $this->input->post('quantity'),
                        'Cost' => $this->input->post('cost')
                );

                
                return $this->db->insert("transfer", $data);
        }

        
        public function deleteTransfer($id){
                        
			$this->db->where('id', $id);
			$this->db->delete('transfer');
                        return true;
        }  

        public function updateTransfer(){
                  
                $id = url_title($this->input->post('id'));

                $data = array(
                        'Date' => $this->input->post('date'),
                        'Barcode' => $this->input->post('Barcode'),
                        'Unit_Cost' => $this->input->post('unitCost'),
                        'Transfer_to_section' => $this->input->post('sections'),
                        'Quantity' => $this->input->post('quantity'),
                        'Cost' => $this->input->post('cost')
                );

                $this->db->where('id', $id);
                return $this->db->update('transfer', $data);
        } 

}
?>