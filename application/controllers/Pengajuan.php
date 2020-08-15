<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        logged_in();
    }

    public function index()
    {
        $data['page'] = 'user/pengajuan/index';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['active'] = 'user';
        $data['panduan'] = $this->db->order_by('jenis' , 'ASC')->get("panduan")->result_array();
        $data['desa'] = $this->db->get("profil_desa")->result_array();
        $this->load->view('layouts/frontend/main_layout', $data);
    }

    public function list_pengajuan()
    {
        $data['page'] = 'user/pengajuan/list_pengajuan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengajuan'] = $this->db->order_by('created_at desc, jenis asc')->get_where('pengajuan', ['user_id' => $data['user']['user_id']])->result_array();
        $data['active'] = 'user';
        $data['desa'] = $this->db->get("profil_desa")->result_array();
        $this->load->view('layouts/frontend/main_layout', $data);
    }

    public function submit()
    {
        $fileName = $_FILES["files"]["name"];
        $fileName =  rand(2112, 9999) . "-" . $fileName;

        $path = "./uploads/pengajuan/" . date("Y/m");
        if (!is_dir($path)) {
            mkdir($path, 0777, TRUE);
        }

        $config['upload_path'] = $path;
        $config['allowed_types'] = 'doc|docx|pdf|xls|xlsx|zip';
        $config['file_name'] = '/' . $fileName;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('files')) {
            print_r($this->upload->display_errors());
        }

        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data =  [
            "user_id" => $user['user_id'],
            "jenis" => $_POST["jenis"],
            "keterangan" => $_POST["keterangan"],
            "path" => $path . "/" . $fileName,
            "status" => 0
        ];
        $insert = $this->db->insert('pengajuan', $data);
        if ($insert) {
            die(json_encode(['success' => true, 'error' => false, 'message' => $_FILES["files"]["name"]]));
        }
    }
}
