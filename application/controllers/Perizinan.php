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
        $fileName = $_FILES["files"]["name"][1];
        $fileName =  rand(2112, 9999) . "-" . $fileName;

        $path = "./uploads/perizinan/" . date("Y/m");
        if (!is_dir($path)) {
            mkdir($path, 0777, TRUE);
        }

        $config['upload_path'] = $path;
        $config['allowed_types'] = 'doc|docx|pdf|xls|xlsx';
        $config['file_name'] = '/' . $fileName;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file')) {
            print_r($this->upload->display_errors());
        }

        $data =  [
            "jenis" => $_POST["jenis"],
            "keterangan" => $_POST["keterangan"],
            "path" => $path . "/" . $fileName,
            "status" => 0
        ];
        $insert = $this->db->insert('surat', $data);
        if ($insert) {
            die(json_encode(['success' => true, 'error' => false, 'message' => $_FILES["files"]["name"]]));
        }
    }
}
