<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perizinan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['page'] = 'admin/perizinan/index';
        $data['pengajuan'] = $this->db->where('status !=', 1)->get('surat')->result_array();
        $this->load->view('layouts/backend/main_layout', $data);
    }

    public function detail_pengajuan($user_id, $surat_id)
    {
        $data['page'] = 'admin/perizinan/detail';
        $data['user'] = $this->db->where(['user_id' => $user_id])->get('user')->row_array();
        $data['surat'] = $this->db->where(['surat_id' => $surat_id])->get('surat')->row_array();
        $this->load->view('layouts/backend/main_layout', $data);
    }

    public function submit()
    {
        $fileName = $_FILES["files"]["name"];
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
        if (!$this->upload->do_upload('files')) {
            print_r($this->upload->display_errors());
        }

        $where = ['surat_id' =>  $_POST["surat_id"]];
        $surat = $this->db->get_where('surat', $where)->row_array();
        $data_surat = [
            "user_id" =>  $surat["user_id"],
            "jenis" => $surat["jenis"],
            "keterangan" => $surat["keterangan"],
            "path" => $path . "/" . $fileName,
            "status" => 1
        ];

        $update = $this->db->update('surat', $data_surat, $where);

        $data =  [
            "user_id" =>  $_POST["user_id"],
            "jenis" => $_POST["jenis"],
            "keterangan" => $_POST["keterangan"],
            "path" => $path . "/" . $fileName,
            "status" => 1
        ];

        $insert = $this->db->insert('surat', $data);
        if ($insert) {
            die(json_encode(['success' => true, 'error' => false, 'message' => $_FILES["files"]["name"]]));
        }
    }
}
