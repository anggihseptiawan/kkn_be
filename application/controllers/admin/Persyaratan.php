<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persyaratan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['page'] = 'admin/persyaratan/index';
        $data['active'] = 'persyaratan';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata("email")])->row_array();
        $this->load->view('layouts/backend/main_layout', $data);
    }

    public function submit()
    {
        $data = [
            "jenis" => $this->input->post("jenis"),
            "deskripsi" => $this->input->post("persyaratan")
        ];

        $insert = $this->db->insert("persyaratan", $data);
        if ($insert) {
            $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect('admin/persyaratan');
        }
    }

    public function detail($id)
    {
        $data['page'] = 'admin/persyaratan/detail';
        $data['active'] = 'persyaratan';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata("email")])->row_array();
        $data['jenis'] = $id;
        $this->load->view('layouts/backend/main_layout', $data);
    }
}
