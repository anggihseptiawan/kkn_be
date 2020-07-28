<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perizinan extends CI_Controller
{
    public function index()
    {
        $data['page'] = 'user/perizinan/index';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layouts/frontend/main_layout', $data);
    }

    public function submit()
    {
        // $data =  [
        //     "jenis" => $_POST["jenis"],
        //     "keterangan" => $_POST["keterangan"],
        //     "path" => $_FILES["files"]["name"][1],
        //     "status" => 0
        // ];
        // $insert = $this->db->insert('surat', $data);
        // if ($insert) {
            die(json_encode(['success' => true, 'error' => false, 'message' => $_FILES["files"]["name"]]));
        // }
    }
}
