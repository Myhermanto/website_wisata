<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

	public function index()
	{
		$data['artikel'] = $this->db->query("select* from tbl_berita")->result();
		$this->load->view('index_artikel', $data);
	}

	public function tambahdata()
	{
		$this->load->view('tambah_artikel');
	}
	public function simpan()
	{

		$judul = $this->input->post('xjudul');
		$isi = $this->input->post('xisiberita');
		$tgl = $this->input->post('xtanggal');
		$config['upload_path'] = './admin/uploads/';  // Folder untuk menyimpan gambar
		$config['allowed_types'] = 'jpg|jpeg|png|gif';  // Tipe file yang diperbolehkan
		$config['max_size'] = 2048;  // Maksimal ukuran file (dalam KB)
		$config['file_name'] = time() . '_' . $_FILES['xfoto']['name'];

		$this->load->library('upload', $config);


		if ($this->upload->do_upload('xfoto')) {
			$data = $this->upload->data();
			$gambar = $data['file_name'];
		} else {
			$gambar = '';
		}
		$simpan = $this->db->query("INSERT INTO tbl_berita 
			(judul_berita, isi_berita, tgl_berita, gambar) 
			VALUES ('$judul', '$isi', '$tgl', '$gambar')");

		redirect('Artikel');
	}

	public function hapus($id)
	{
		$hapus = $this->db->query(" DELETE FROM  tbl_berita WHERE id_berita='$id' ");
		redirect('Artikel');
	}
}
