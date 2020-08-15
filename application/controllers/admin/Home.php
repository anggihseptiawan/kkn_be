<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['page'] = 'admin/home/index';
		$data['active'] = 'home';
		$data['pengajuan'] = $this->db->where('status =', 0)->order_by('jenis asc , created_at desc')->get('pengajuan')->result_array();
		$data['user'] = $this->db->get_where('admin', ['emails' => $this->session->userdata("emails")])->row_array();
		$data['panduan'] = $this->db->order_by('jenis','ASC')->get("panduan")->result_array();
		$data['desa'] = $this->db->get("profil_desa")->result_array();
		
		$this->load->view('layouts/backend/main_layout', $data);

	}

	
}
