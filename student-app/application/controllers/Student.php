<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
 		parent::__construct();
 		$this->load->helper('url');
 		$this->load->database();
 	}

	public function index()
	{
			redirect('/students');
	}

	public function list_students()
	{
		$this->load->model('Student_Model');

		$data['students_data'] = $this->Student_Model->list_students();

		$this->load->view('header');
		$this->load->view('students', $data);
		$this->load->view('footer');
	}
	public function details()
	{
		$this->load->model('Student_Model');

		$id = $this->uri->segment(2);
		$data['student_data'] = $this->Student_Model->get_student($id);

		$this->load->view('header');
		$this->load->view('student', $data);
		$this->load->view('footer');
	}

	public function add()
	{
		$this->load->helper('form');

		$this->load->view('header');
		$this->load->view('new-student-form');
		$this->load->view('footer');
	}
	public function insert()
	{
		$this->load->model('Student_Model');

		$data = array(
			'student_id' => $this->input->post('student_id', TRUE),
			'name' => $this->input->post('name', TRUE),
			'surname' => $this->input->post('surname', TRUE),
			'gender' => $this->input->post('gender', TRUE),
			);

			$this->Student_Model->insert_student($data);

			redirect('/students');
	}

	public function delete()
	{
		$this->load->model('Student_Model');

		$id = $this->uri->segment(3);

		$this->Student_Model->delete_student($id);

		redirect('/students');
	}

	public function edit()
	{
		$this->load->model('Student_Model');
		$this->load->helper('form');

		$id = $this->uri->segment(3);
		$data['student_data'] = $this->Student_Model->get_student($id);

		$this->load->view('header');
		$this->load->view('edit-form', $data);
		$this->load->view('footer');
	}
	public function update()
	{
		$this->load->model('Student_Model');

		$data = array(
			'id' => $this->input->post('id'),
			'student_id' => $this->input->post('student_id', TRUE),
			'name' => $this->input->post('name', TRUE),
			'surname' => $this->input->post('surname', TRUE),
			'gender' => $this->input->post('gender', TRUE)
			);

			$this->Student_Model->update_student($data);

			redirect('/students');
	}
}
