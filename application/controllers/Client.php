<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('Space_Model');
		$this->load->model('Client_Model');
	}

    public function index() {
        // Load view or perform other actions
    }

    public function create() {

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'profile' => $this->input->post('profile'),
            'doc_type' => $this->input->post('doc_type'),
            'doc_number' => $this->input->post('doc_number'),
            'space' => $this->input->post('space'),
            'time_period' => $this->input->post('time_period')
        );
        $insert_id = $this->Tenant_model->insert_data($data);

    }

    public function edit($id) {

    }

    public function update($id) {

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'profile' => $this->input->post('profile'),
            'doc_type' => $this->input->post('doc_type'),
            'doc_number' => $this->input->post('doc_number'),
            'space' => $this->input->post('space'),
            'time_period' => $this->input->post('time_period')
        );
        $affected_rows = $this->Tenant_model->update_data($id, $data);

    }

    public function delete($id) {

        $affected_rows = $this->Tenant_model->delete_data($id);

    }
}
