<?php
defined('BASEPATH') or exit('No direct script access allowed');
class produk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		is_logged_in2();
	}
	function index()
	{
		$data['judul'] = "Halaman Produk";
		$data['produk'] = $this->produk_model->get();
		$data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/auth_header", $data);
		$this->load->view("produk/vw_produk", $data);
		$this->load->view("layout/auth_footer");
	}
	function edit($id)
	{
		$data['judul'] = "Halaman Edit Produk";
		$data['produk'] = $this->produk_model->getById($id);
		$data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama_product', 'Nama produk', 'required', [
			'required' => 'Nama Produk Wajib di isi'
		]);
		$this->form_validation->set_rules('harga_product', 'Pengarang', 'required', [
			'required' => 'Harga Produk Wajib di isi'
		]);
		$this->form_validation->set_rules('ktgr_product', 'Stok', 'required', [
			'required' => 'Kategori Produk di isi'
		]);
		$this->form_validation->set_rules('stok', 'Prodi', 'required', [
			'required' => 'Stok Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/auth_header", $data);
			$this->load->view("produk/vw_ubah_produk", $data);
			$this->load->view("layout/auth_footer");
		} else {
			$data = [
				'nama_product' => $this->input->post('nama_product'),
				'harga_product' => $this->input->post('harga_product'),
				'ktgr_product' => $this->input->post('ktgr_product'),
				'stok' => $this->input->post('stok'),
			];
			$upload_image = $_FILES['img_product']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/produk/';
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('img_product')) {

					$new_image = $this->upload->data('file_name');
					$this->db->set('img_product', $new_image);
					$query = $this->db->set('img_product', $new_image);
					if ($query) {
						$old_image = $this->db->get_where('produk', ['id' => $id])->row();
						unlink(FCPATH . 'assets/img/produk/' . $old_image->img_product);
					}
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->produk_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data produk Berhasil Diubah!</div>');
			redirect('produk');
		}
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah produk";
		$data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama_product', 'Nama produk', 'required', [
			'required' => 'Nama Produk Wajib di isi'
		]);
		$this->form_validation->set_rules('harga_product', 'Pengarang', 'required', [
			'required' => 'Harga Produk Wajib di isi'
		]);
		$this->form_validation->set_rules('ktgr_product', 'Stok', 'required', [
			'required' => 'Kategori Produk di isi'
		]);
		$this->form_validation->set_rules('stok', 'Prodi', 'required', [
			'required' => 'Stok Wajib di isi'
		]);


		if ($this->form_validation->run() == false) {
			$this->load->view("layout/auth_header", $data);
			$this->load->view("produk/vw_tambah_produk", $data);
			$this->load->view("layout/auth_footer");
		} else {

			$data = [
				'nama_product' => $this->input->post('nama_product'),
				'harga_product' => $this->input->post('harga_product'),
				'ktgr_product' => $this->input->post('ktgr_product'),
				'stok' => $this->input->post('stok'),

			];
			$upload_image = $_FILES['img_product']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/produk/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('img_product')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('img_product', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->produk_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data produk Berhasil Ditambah!</div>');
			redirect('produk');
		}
	}


	public function hapus($id)
	{
		$this->produk_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data produk tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data produk Berhasil Dihapus!</div>');
		}
		redirect('produk');
	}
}
