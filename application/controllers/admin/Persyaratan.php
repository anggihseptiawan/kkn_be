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
        $data['layanan'] = $this->db->get("layanan")->result_array();
        $this->load->view('layouts/backend/main_layout', $data);
    }

    public function submit()
    {
        $persyaratan = $this->db->get_where("persyaratan", ["layanan_id" => $this->input->post("layanan_id")])->row_array();
        $data = [
            "layanan_id" => $this->input->post("layanan_id"),
            "deskripsi" => $this->input->post("persyaratan")
        ];

        if ($persyaratan) {
            $where = ["persyaratan_id" => $persyaratan["persyaratan_id"]];
            $update = $this->db->update("persyaratan", $data, $where);

            if ($update) {
                $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">Data berhasil diubah</div>');
                redirect('admin/persyaratan');
            }
        } else {
            $insert = $this->db->insert("persyaratan", $data);
            if ($insert) {
                $this->session->set_flashdata('message', '
                    <div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
                redirect('admin/persyaratan');
            }
        }
    }

    public function detail($id)
    {
        $data['page'] = 'admin/persyaratan/detail';
        $data['active'] = 'persyaratan';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata("email")])->row_array();
        $data['layanan_id'] = $id;
        $data['layanan'] = $this->db->get_where('layanan', ['layanan_id' => $id])->row_array();
        $data['persyaratan'] = $this->db->get_where("persyaratan", ["layanan_id" => $id])->row_array();
        $this->load->view('layouts/backend/main_layout', $data);
    }
}
