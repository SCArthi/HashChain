<?php 

class Model_attendance extends CI_Model
{
        public function __construct()
        {
            $this->load->database();
        }
    
        public function viewAttendance($id=FALSE)
        {
                if(!$id){
                        $query=$this->db->get("attendance");
                        return $query->result_array();
                }
                else{
                        $query=$this->db->get_where('attendance',array('id'=>$id));
                        return $query->row_array();
                }
        }

        public function addAttendance()
        {

            $data = array(

                'Presented' => $this->input->post('date'),
                'Name' => $this->input->post('name'),
                'Start_time' => $this->input->post('start_time'),
                'End_time' => $this->input->post('end_time')
            );

            return $this->db->insert("attendance", $data);
                
        }

        public function deleteAttendance($id){
                        
			$this->db->where('id', $id);
			$this->db->delete('attendance');
                        return true;
        }  

        public function updateAttendance(){
                  
                $id = url_title($this->input->post('id'));

                $data = array(
                    'Presented' => $this->input->post('date'),
                    'Name' => $this->input->post('name'),
                    'Start_time' => $this->input->post('start_time'),
                    'End_time' => $this->input->post('end_time')
                );

                $this->db->where('id', $id);
                return $this->db->update('attendance', $data);
        } 


}

?>