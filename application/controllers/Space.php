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
		$this->load->view("space-add-form");
	}

	public function create() {
        // Handle form submission to insert data
        $data = array(
            'Space' => $this->input->post('space'),
            'Floor_No' => $this->input->post('floor_no'),
            'Furnished' => $this->input->post('furnished'),
            'Area' => $this->input->post('area'),
            'Price' => $this->input->post('price'),
            'Availability' => $this->input->post('availability')
        );
        $this->Space_model->insert_data($data);
        // Redirect or load view accordingly
    }

    public function edit($id) {
        $data['data'] = $this->Space_model->get_space($id);
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
       $this->Property_model->update_data($id, $data);
        // Redirect or load view accordingly
    }

    public function delete($id) {
        $this->Property_model->delete_data($id);
    }
}
