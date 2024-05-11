<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Space extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('Space_Model');
		$this->load->model('Client_Model');
	}

	function add_form() {
        $this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view("admin/space-add-form");
        $this->load->view('admin/footer');
	}

	public function create() {
        // Handle form submission to insert data
        $data = array(
            'space' => $this->input->post('space'),
            'floor_no' => $this->input->post('floor_no'),
            'furnished' => $this->input->post('furnished'),
            'price' => $this->input->post('price'),
            'availability' => $this->input->post('availability')
        );
        $this->Space_Model->insert_data($data);
        redirect('space');
    }

    public function edit($id) {
        $data['data'] = $this->Space_Model->get_space($id);
		$this->load->view("space-add-form",$data);
        // Load view with form pre-filled with data to edit
    }

    public function update($id) {
        // Handle form submission to update data
        $data = array(
            'Space' => $this->input->post('space'),
            'Floor_No' => $this->input->post('floor_no'),
            'Furnished' => $this->input->post('furnished'),
            'Area' => $this->input->post('area'),
            'Price' => $this->input->post('price'),
            'Availability' => $this->input->post('availability')
        );
       $this->Space_Model->update_data($id, $data);
        // Redirect or load view accordingly
    }

    public function delete($id) {
        $this->Space_Model->delete_data($id);
    }
}
