<?php 

class Model_final_goods extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function index($id = FALSE)
	{
		if (!$id) {
			$query = $this->db->get("final_good");
			return $query->result_array();
		} else {
			$query = $this->db->get_where('final_good', array('id' => $id));
			return $query->row_array();
		}
	}

	public function saveFinalGood()
	{
		$data = array(
			'Date' => $this->input->post('date'),
			'Section' => $this->input->post('section'),
			'Quantity' => $this->input->post('quantity'),
			'Product_name' => $this->input->post('name'),
			'Barcode' => $this->input->post('barcode')
		);
		return $this->db->insert('final_good', $data);
	}

	public function deleteFinalGood($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('final_good');
		return true;
	}

	public function updateFinalGood()
	{
		$id = url_title($this->input->post('id'));

		$data = array(
			'Date' => $this->input->post('date'),
			'Section' => $this->input->post('section'),
			'Quantity' => $this->input->post('quantity'),
			'Product_name' => $this->input->post('name'),
			'Barcode' => $this->input->post('barcode')
		);

		$this->db->where('id', $id);
		return $this->db->update('final_good', $data);
	}
}

?>