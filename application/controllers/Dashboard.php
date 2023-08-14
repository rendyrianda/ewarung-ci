<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('Produk_model');
        $this->load->model('Penjualan_model');
        $this->load->model('Pelanggan_model');
        $this->load->model('Detail_model');
    }

    function index()
    {
        $data['judul'] = "Halaman Dashboard";
        $data['penjualan'] = $this->Penjualan_model->tpenjualan();
        $data['produk'] = $this->Produk_model->tproduk();
        $data['totalb'] = $this->Detail_model->charts();
        $data['us'] = $this->Pelanggan_model->tpelanggan();

        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/auth_header", $data);
        $this->load->view("user/dashboard", $data);
        $this->load->view("layout/auth_footer");
    }
}
