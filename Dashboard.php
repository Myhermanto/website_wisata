<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') != true) {
			$url = base_url('login');
			redirect($url);
		};
	}

	public function index()
	{
		$this->load->view('index_dashboard');
	}
}
