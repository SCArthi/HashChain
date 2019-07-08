<?php 

class Model_main_stock extends CI_Model
{
	public function __construct()
	{
                $this->load->database();
                        parent::__construct();
        }
    
        
        public function viewMainStock($id=FALSE)
        {
                if(!$id){
                        $query=$this->db->get("main_stock_material");
                        return $query->result_array();
                }
                else{
                        $query=$this->db->get_where('main_stock_material',array('id'=>$id));
                        return $query->row_array();
                }
        }

        public function deleteMainStock($id){
                        
                $this->db->where('id', $id);
                $this->db->delete('main_stock_material');
                return true;
        }  

        public function updateMainStock(){
                  
                $id = url_title($this->input->post('id'));

                $data = array(
                       
                        'Barcode' => $this->input->post('Barcode'),
                        'Purchase_order_no' => $this->input->post('purchase_order_no'),
                        'Name' => $this->input->post('name'),
                        'Type' => $this->input->post('type'),
                        'Quantity' => $this->input->post('quantity'),
                        'Unit_Price' => $this->input->post('unit_price'),
                        'Total' => $this->input->post('total')
                );

                $this->db->where('id', $id);
                return $this->db->update('main_stock_material', $data);
        } 

}

?>