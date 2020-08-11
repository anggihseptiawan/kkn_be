<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mekanisme extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['page'] = 'admin/mekanisme/index';
        $data['active'] = 'mekanisme';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata("email")])->row_array();
        $data['layanan'] = $this->db->get("layanan")->result_array();
        $this->load->view('layouts/backend/main_layout', $data);
    }

    public function submit()
    {
        $mekanisme = $this->db->get_where("mekanisme", ["layanan_id" => $this->input->post("layanan_id")])->row_array();
        $data = [
            "layanan_id" => $this->input->post("layanan_id"),
            "deskripsi" => $this->input->post("mekanisme")
        ];

        if ($mekanisme) {
            $where = ["mekanisme_id" => $mekanisme["mekanisme_id"]];
            $update = $this->db->update("mekanisme", $data, $where);

            if ($update) {
                $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">Data berhasil diubah</div>');
                redirect('admin/mekanisme');
            }
        } else {
            $insert = $this->db->insert("mekanisme", $data);
            if ($insert) {
                $this->session->set_flashdata('message', '
                    <div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
                redirect('admin/mekanisme');
            }
        }
    }

    public function detail($id)
    {
        $data['page'] = 'admin/mekanisme/detail';
        $data['active'] = 'mekanisme';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata("email")])->row_array();
        $data['layanan_id'] = $id;
        $data['layanan'] = $this->db->get_where('layanan', ['layanan_id' => $id])->row_array();
        $data['mekanisme'] = $this->db->get_where("mekanisme", ["layanan_id" => $id])->row_array();
        $this->load->view('layouts/backend/main_layout', $data);
    }
}
