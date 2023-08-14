<?php

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelanggan_model');
        $this->load->model('Produk_model');
        $this->load->model('Keranjang_model');
        $this->load->model('Penjualan_model');
        $this->load->model('Detail_model');
        is_logged_in();
    }

    function index()
    {
        $data['judul'] = "Halaman User";
        $data['pelanggan'] = $this->Pelanggan_model->getBy();
        $data['produk'] = $this->Produk_model->get();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view("layout/header", $data);
        $this->load->view("user/index", $data);
        $this->load->view("layout/footer");
    }
    public function produk()
    {
        $data['judul'] = "List Produk";
        $data['pelanggan'] = $this->Pelanggan_model->getBy();
        $data['produk'] = $this->Produk_model->get();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header', $data);
        $this->load->view('user/vw_produk', $data);
        $this->load->view('layout/footer', $data);
    }
    public function keranjang($id)
    {
        $data['keranjang'] = $this->Keranjang_model->get();
        $data['judul'] = "Detail Produk";
        $data['pelanggan'] = $this->Pelanggan_model->getBy();
        $data['produk'] = $this->Produk_model->getById($id);
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required', [
            'required' => 'Jumlah Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('User/vw_keranjang', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $data = [
                'id_pelanggan' => $this->session->userdata('id'),
                'id_produk' => $this->input->post('id'),
                'jumlah' => $this->input->post('jumlah'),
                'total' => $this->input->post('total'),
                'tanggal' => $this->input->post('tanggal'),
            ];
            $this->Keranjang_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Ditambahkan ke keranjang!</div>');
            redirect('User/detail');
        }
    }
    public function detail()
    {
        $data['judul'] = "Detail Keranjang";
        $data['pelanggan'] = $this->Pelanggan_model->getBy();
        $data['produk'] = $this->Produk_model->get();
        $data['keranjang'] = $this->Keranjang_model->get();
        $data['jlh'] = $this->Keranjang_model->jumlah();

        $this->load->view('layout/header', $data);
        $this->load->view('User/vw_detail_keranjang', $data);
        $this->load->view('layout/footer', $data);
    }
    public function delkeranjang($id)
    {
        $this->Keranjang_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Keranjang Berhasil dihapus!</div>');
        redirect('User/detail');
    }
    public function pesanan()
    {
        $jumlah_beli = count($this->input->post('produk'));
        $data_p = [
            'no_penjualan' => $this->input->post('no_penjualan'),
            'id_pelanggan' => $this->session->userdata('id'),
            'tanggal' => $this->input->post('tanggal'),
            'total_bayar' => $this->input->post('bayar'),
            'alamat' => $this->input->post('alamat'),
            'pembayaran' => $this->input->post('pembayaran'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/pembayaran/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data_detail = [];
        for ($i = 0; $i < $jumlah_beli; $i++) {
            array_push($data_detail, ['id_produk' => $this->input->post('produk')[$i]]);
            $data_detail[$i]['no_penjualan'] = $this->input->post('no_penjualan');
            $data_detail[$i]['id_pelanggan'] = $this->session->userdata('id');
            $data_detail[$i]['jumlah'] = $this->input->post('jumlah_p')[$i];
            $data_detail[$i]['total'] = $this->input->post('total_p')[$i];
        }
        if ($this->Penjualan_model->insert($data_p, $upload_image) && $this->Detail_model->insert($data_detail)) {
            for ($i = 0; $i < $jumlah_beli; $i++) {
                $this->Produk_model->min_stok($data_detail[$i]['jumlah'], $data_detail[$i]['id_produk']) or die('gagal min stok');
            }
            $id_us = $this->session->userdata('id');
            $this->Keranjang_model->delete_all($id_us);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesanan Berhasil dibuat!</div>');
            redirect('User/Produk');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesanan Gagal dibuat!</div>');
            redirect('User/Produk');
        }
    }
    public function pembelian()
    {
        $data['judul'] = "Data Pembelian";
        $data['pelanggan'] = $this->Pelanggan_model->getBy();
        $data['pembelian'] = $this->Penjualan_model->getByUser();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header', $data);
        $this->load->view('User/pembelian_user', $data);
        $this->load->view('layout/footer', $data);
    }
    public function statusbeli($id)
    {
        $data['judul'] = "Ubah Data Pembelian";
        $data['pelanggan'] = $this->Pelanggan_model->getBy();
        $data['produk'] = $this->Produk_model->get();
        $data['pembelian'] = $this->Penjualan_model->getByUser2($id);
        $data['detailbeli'] = $this->Detail_model->getByUser($id);
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib Diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("User/detail_beli", $data);
            $this->load->view("layout/footer");
        } else {
            $status = $this->input->post('status');
            $idp = $this->input->post('no_penjualan');
            $this->Penjualan_model->updatestatus($status, $idp);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status berhasil diubah</div>');
            redirect('User/pembelian');
        }
    }
}
