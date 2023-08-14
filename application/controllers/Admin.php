<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('Admin_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Admin";
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['admin'] = $this->Admin_model->get();
        $this->load->view("layout/auth_header", $data);
        $this->load->view("admin/vw_admin", $data);
        $this->load->view("layout/auth_footer", $data);
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Admin";
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Admin', 'required', [
            'required' => 'Nama Admin Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Admin Wajib di isi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password Admin Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/auth_header", $data);
            $this->load->view("admin/vw_tambah_admin", $data);
            $this->load->view("layout/auth_footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];
            $this->Admin_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Admin Berhasil Ditambah!</div>');
            redirect('Admin');
        }
    }
    function edit($id)
    {
        $data['judul'] = "Halaman Edit admin";
        $data['admin'] = $this->Admin_model->getById($id);
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Admin', 'required', [
            'required' => 'Nama Admin Wajib di isi'
        ]);

        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Admin Wajib di isi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password Admin Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/auth_header", $data);
            $this->load->view("Admin/vw_ubah_admin", $data);
            $this->load->view("layout/auth_footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            ];
            $id = $this->input->post('id');
            $this->Admin_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Admin Berhasil DiUbah!</div>');
            redirect('Admin');
        }
    }
    public function hapus($id)
    {
        $this->Admin_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Admin Berhasil Dihapus!</div>');
        redirect('Admin');
    }
}
