<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Panduan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['page'] = 'admin/panduan/index';
        $this->load->view('layouts/backend/main_layout', $data);
    }

    public function add()
    {
        $data['page'] = 'admin/panduan/add';
        $this->load->view('layouts/backend/main_layout', $data);
    }

    public function edit()
    {
        $data['page'] = 'admin/panduan/edit';
        $this->load->view('layouts/backend/main_layout', $data);
    }
}
