<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['page'] = 'user/home/index';
		$this->load->view('layouts/frontend/main_layout', $data);
	}
}
