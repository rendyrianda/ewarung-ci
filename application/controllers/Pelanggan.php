<?php
defined('BASEPATH') or exit('No direct script access allowed');
class pelanggan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('pelanggan_model');
		is_logged_in2();
	}
	function index()
	{
		$data['judul'] = "Halaman Pelanggan";
		$data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['pelanggan'] = $this->pelanggan_model->get();
		$this->load->view("layout/auth_header", $data);
		$this->load->view("pelanggan/vw_pelanggan", $data);
		$this->load->view("layout/auth_footer", $data);
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah pelanggan";
		$data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama', 'Nama pelanggan', 'required', [
			'required' => 'Nama pelanggan Wajib di isi'
		]);
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin pelanggan Wajib di isi',
		]);

		$this->form_validation->set_rules('email', 'Email', 'required', [
			'required' => 'Email pelanggan Wajib di isi'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required', [
			'required' => 'Password pelanggan Wajib di isi'
		]);

		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat pelanggan Wajib di isi'
		]);

		$this->form_validation->set_rules('no_hp', 'No HP', 'required|integer', [
			'required' => 'NO HP pelanggan Wajib di isi',
			'integer' => 'NO HP harus Angka'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/auth_header", $data);
			$this->load->view("pelanggan/vw_tambah_pelanggan", $data);
			$this->load->view("layout/auth_footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'no_hp' => $this->input->post('no_hp'),
				'alamat' => $this->input->post('alamat'),
			];
			$this->pelanggan_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pelanggan Berhasil Ditambah!</div>');
			redirect('pelanggan');
		}
	}
	function edit($id)
	{
		$data['judul'] = "Halaman Edit pelanggan";
		$data['pelanggan'] = $this->pelanggan_model->getById($id);
		$data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama pelanggan', 'required', [
			'required' => 'Nama pelanggan Wajib di isi'
		]);
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin pelanggan Wajib di isi',
		]);

		$this->form_validation->set_rules('email', 'Email', 'required', [
			'required' => 'Email pelanggan Wajib di isi'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required', [
			'required' => 'Password pelanggan Wajib di isi'
		]);

		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat pelanggan Wajib di isi'
		]);

		$this->form_validation->set_rules('no_hp', 'No HP', 'required|integer', [
			'required' => 'NO HP pelanggan Wajib di isi',
			'integer' => 'NO HP harus Angka'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/auth_header", $data);
			$this->load->view("pelanggan/vw_ubah_pelanggan", $data);
			$this->load->view("layout/auth_footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'no_hp' => $this->input->post('no_hp'),
				'alamat' => $this->input->post('alamat'),
			];
			$id = $this->input->post('id');
			$this->pelanggan_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pelanggan Berhasil DiUbah!</div>');
			redirect('pelanggan');
		}
	}
	public function hapus($id)
	{
		$this->pelanggan_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pelanggan Berhasil Dihapus!</div>');
		redirect('pelanggan');
	}
}
