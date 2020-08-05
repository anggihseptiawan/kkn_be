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
}
