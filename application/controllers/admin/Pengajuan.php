<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['page'] = 'admin/pengajuan/index';
        $data['active'] = 'pengajuan';
        $data['pengajuan'] = $this->db->order_by('jenis','ASC')->get('pengajuan')->result_array();
$data['pengajuan'] = $this->db->where('status =', 0)->order_by('jenis asc , created_at desc')->get('pengajuan')->result_array();
        $data['user'] = $this->db->get_where('admin', ['emails' => $this->session->userdata("emails")])->row_array();
        $data['desa'] = $this->db->get("profil_desa")->result_array();
        
        $this->load->view('layouts/backend/main_layout', $data);
    }

    public function allapproval()
    {
        $data['page'] = 'admin/pengajuan/allapproval';
        $data['active'] = 'pengajuan';
        $data['pengajuan'] = $this->db->order_by('jenis','ASC')->get('pengajuan')->result_array();
        $data['active'] = 'pengajuan';
        $data['user'] = $this->db->get_where('admin', ['emails' => $this->session->userdata("emails")])->row_array();
        $data['desa'] = $this->db->get("profil_desa")->result_array();
        $this->load->view('layouts/backend/main_layout', $data);
    }


    public function detail_pengajuan($user_id, $pengajuan_id)
    {
        $data['page'] = 'admin/pengajuan/detail';
        $data['active'] = 'pengajuan';
        $data['pemohon'] = $this->db->where(['user_id' => $user_id])->get('user')->row_array();
        $data['pengajuan'] = $this->db->where(['pengajuan_id' => $pengajuan_id])->get('pengajuan')->row_array();
        $data['user'] = $this->db->get_where('admin', ['emails' => $this->session->userdata("emails")])->row_array();
        $data['desa'] = $this->db->get("profil_desa")->result_array();
        $this->load->view('layouts/backend/main_layout', $data);
    }
     public function detail_approval($user_id, $pengajuan_id)
    {
        $data['page'] = 'admin/pengajuan/detail_approval';
        $data['active'] = 'pengajuan';
        $data['pemohon'] = $this->db->where(['user_id' => $user_id])->get('user')->row_array();
        $data['pengajuan'] = $this->db->where(['pengajuan_id' => $pengajuan_id])->get('pengajuan')->row_array();
        $data['user'] = $this->db->get_where('admin', ['emails' => $this->session->userdata("emails")])->row_array();
        $data['desa'] = $this->db->get("profil_desa")->result_array();
        $this->load->view('layouts/backend/main_layout', $data);
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
        $config['allowed_types'] = 'doc|docx|pdf|xls|xlsx';
        $config['file_name'] = '/' . $fileName;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('files')) {
            print_r($this->upload->display_errors());
        }

        $where = ['pengajuan_id' =>  $_POST["pengajuan_id"]];
        $pengajuan = $this->db->get_where('pengajuan', $where)->row_array();
        $data_pengajuan = [
            "user_id" =>  $pengajuan["user_id"],
            "jenis" => $pengajuan["jenis"],
            "keterangan" => $pengajuan["keterangan"],
            "path" => $pengajuan["path"],
            "path_admin" => $path . "/" . $fileName,
            "status" => 1
        ];

        $update = $this->db->update('pengajuan', $data_pengajuan, $where);

        if ($update) {
            die(json_encode(['success' => true, 'error' => false, 'message' => $_FILES["files"]["name"]]));
            redirect('admin/pengajuan');
        }
    }


    public function reject()
    {
        $where = ['pengajuan_id' =>  $this->input->post('pengajuan_id')];
        $pengajuan = $this->db->get_where('pengajuan', $where)->row_array();
        $data = [
            "user_id" =>  $pengajuan["user_id"],
            "jenis" => $pengajuan["jenis"],
            "keterangan" => $pengajuan["keterangan"],
            "path" => $pengajuan["path"],
            "feedback" => $this->input->post("keterangan"),
            "status" => 2
        ];

        $update = $this->db->update('pengajuan', $data, $where);
        if ($update) {
            $this->session->set_flashdata('add', '<div class="alert alert-success text-center">Sukses Tolak Pengajuan</div>');
            redirect('admin/pengajuan');
        }
    }
}
