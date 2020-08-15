<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        logged_in();
    }

    public function index()
    {
        $data['page'] = 'admin/profil/index';
        $data['user'] = $this->db->get_where('admin', ['emails' => $this->session->userdata('emails')])->row_array();
        $data['nama'] = $data['user']['name'];
        $data['emails'] = $data['user']['emails'];
        $data['active'] = 'user';
        $data['desa'] = $this->db->get("profil_desa")->result_array();
        
        $this->load->view('layouts/backend/main_layout', $data);
    }

    public function edit()
    {
         $data['page'] = 'admin/profil/edit';
        $data['user'] = $this->db->get_where('admin', ['emails' => $this->session->userdata('emails')])->row_array();
       
        $data['nama'] = $data['user']['name'];
        $data['emails'] = $data['user']['emails'];
        $data['active'] = 'user';
        $data['desa'] = $this->db->get("profil_desa")->result_array();
        $this->load->view('layouts/backend/main_layout', $data);
    }
}
