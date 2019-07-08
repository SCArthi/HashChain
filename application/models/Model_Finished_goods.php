<?php 

class Model_Finished_goods extends CI_Model
{
	public function __construct()
	{
                $this->load->database();
                $this->load->library('form_validation');
		        parent::__construct();
        }
    
        public function createFinishedGoods($data){
                $this->db->insert("finished_goods", $data);
        }

        public function viewFinishedGoods(){
                $query = $this->db->query("SELECT * FROM finished_goods");
                return $query->result_array();
            }

}

?>