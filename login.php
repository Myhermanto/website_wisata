<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$this->load->view('index_login');
	}

	public function masuk()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->db->query("SELECT * FROM tbl_user WHERE username='$username' AND password='$password'")->row();

		if ($user) {
			// Set session data
			$this->session->set_userdata('logged_in', true);
			$this->session->set_userdata('username', $username);

			// Ambil data pengguna
			$idadmin = $user->id_user;
			$username = $user->username;
			$nama = $user->nama;
			$pt = $user->akses;

			// Set session dengan data pengguna
			$this->session->set_userdata('akses', $pt);
			$this->session->set_userdata('id_user', $idadmin);
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('nama', $nama);

			// Redirect ke halaman dashboard
			redirect('dashboard');
		} else {
			// Jika login gagal
			$this->session->set_flashdata('message', 'warning');
			redirect('login');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
}
