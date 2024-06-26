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

    public function client_add()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view("admin/client-add-form");
        $this->load->view('admin/footer');
    }

    public function create()
    {

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'document_type' => $this->input->post('document_type'),
            'document_number' => $this->input->post('document_number'),
            'time_period' => $this->input->post('time_period')
        );
        if (!empty($this->input->post('id'))) {
            $this->Client_Model->update_data($this->input->post('id'), $data);
        } else {
            $this->Client_Model->insert_data($data);
        }
        redirect("client");
    }

    public function edit($id)
    {
        $data['data'] = $this->Client_Model->get_data($id);
        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view("admin/client-add-form",$data);
        $this->load->view('admin/footer');
    }

    public function update($id)
    {

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'profile' => $this->input->post('profile'),
            'document_type' => $this->input->post('document_type'),
            'document_number' => $this->input->post('document_number'),
            'space' => $this->input->post('space'),
            'time_period' => $this->input->post('time_period')
        );
        $affected_rows = $this->Client_Model->update_data($id, $data);
        redirect("client");
    }

    public function delete($id)
    {

        $affected_rows = $this->Client_Model->delete_data($id);
        redirect("client");
    }
}
