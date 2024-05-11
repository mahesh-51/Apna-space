<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			
			$this->load->helper('url');
			$this->load->model('Space_Model');
			$this->load->model('Client_Model');
	}
	
	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('herosection');
		$this->load->view('footer');
	}

	public function aboutUs()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('aboutus');
		$this->load->view('footer');
	}

	public function services()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('ourservices');
		$this->load->view('footer');
	}

	public function benefits()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('ourbenefits');
		$this->load->view('footer');
	}

	public function pricing()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('pricing');
		$this->load->view('footer');
	}

	public function contact()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
		if($_POST){
			$username = $_POST['email'];
			$password = $_POST['password'];
			if($username == "admin@gmail.com" && $password == "123456"){
				session_start();
				header("Location: dashboard");
			} else {
				echo "Invalid Login Credntials";
			}
		}
	}

	public function logout()
	{
		session_destroy();
		header("Location: " . base_url());
	}

	public function dashboard()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');

		$spacelist = $this->Space_Model->getSpaceList();
		$data['spacecount'] = count($spacelist);

		$clientlist = $this->Client_Model->getClientList();
		$data['clientcount'] = count($clientlist);

		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/footer');
	}

	public function space()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$data['spacelist'] = $this->Space_Model->getSpaceList();
		$this->load->view('admin/space', $data);
		$this->load->view('admin/footer');
	}

	public function client()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$data['clientlist'] = $this->Client_Model->getClientList();
		$this->load->view('admin/client', $data);
		$this->load->view('admin/footer');
	}
}
