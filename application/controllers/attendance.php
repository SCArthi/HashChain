<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function view_attendance()
		{

			$this->load->model('Model_attendance');
			$data['attendance'] = $this->Model_attendance->viewAttendance();

			$this->load->view('sections/user/header');
			$this->load->view('sections/user/view_attendance/attendance',$data);
			$this->load->view('sections/user/footer');
		}

		//add attendance
		public function addAttendance()
		{
				$this->form_validation->set_rules("date", "Date", 'required');
				$this->form_validation->set_rules("name", "Name", 'required');
				$this->form_validation->set_rules("start_time", "Start Time", 'required');
				$this->form_validation->set_rules("end_time", "End Time", 'required');
		
				if($this->form_validation->run()==FALSE)
						{		
							$this->session->set_flashdata('error', 'Fill all the fields with valid data');

							$this->view_attendance();
						}
				else
						{
							$this->session->set_flashdata('success', 'Attendance marked successfully');

							$this->load->model('Model_attendance');				
							$this->Model_attendance->addAttendance();
							redirect(base_url() . "Attendance/view_attendance");	
							$this->view_attendance();						
						}
		}

		//delete function
	public function deleteAttendance($id)
	{
		$this->session->set_flashdata('delete', 'Record deleted successfully');

		$this->load->model('Model_attendance');
		$this->Model_attendance->deleteAttendance($id);
		redirect(base_url() . "Attendance/view_attendance");
		$this->view_attendance();
	}

	//edit to update data
	public function editAttendance($id)
	{
		$this->load->model('Model_attendance');
		$data['attendance'] = $this->Model_attendance->viewAttendance();
		$data['attendances'] = $this->Model_attendance->viewAttendance($id);

		$this->load->view('sections/user/header');
		$this->load->view('sections/user/view_attendance/update_attendance',$data);
		$this->load->view('sections/user/footer');
	}

	//update edited data
	public function updateAttendance()
	{
		$this->session->set_flashdata('update', 'Record updated successfully');

		$this->load->model('Model_attendance');
		$this->Model_attendance->updateAttendance();
		redirect(base_url() . "Attendance/view_attendance");
		$this->view_attendance();
	}

}
