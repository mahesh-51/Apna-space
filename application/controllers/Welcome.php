<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			
			$this->load->helper('url');
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
		print_r($_POST);
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
		if($_POST){
			$username = $_POST['email'];
			$password = $_POST['password'];
			if($username == "admin@gmail.com" && $password == "123456"){
				header("Location: dashboard");
			} else {
				echo "Invalid Login Credntials";
			}
		}
	}

	public function dashboard()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}

	public function space()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/space');
		$this->load->view('admin/footer');
	}
	
	public function client()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/client');
		$this->load->view('admin/footer');
	}
}
