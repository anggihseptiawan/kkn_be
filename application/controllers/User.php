<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['page'] = 'user/member/index';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layouts/frontend/main_layout', $data);
    }

    public function edit()
    {
        $data['page'] = 'user/member/edit';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layouts/frontend/main_layout', $data);
    }
}
