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
		$this->load->view('login');
		
	}

	public function signUp()
	{
		$this->load->view('signup');
		
	}
}
