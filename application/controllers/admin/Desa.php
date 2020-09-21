<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Desa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['page'] = 'admin/desa/index';
		$data['active'] = 'desa';
        $data['user'] = $this->db->get_where('admin', ['emails' => $this->session->userdata("emails")])->row_array();
        $data['desa'] = $this->db->get("profil_desa")->result_array();
		
		$this->load->view('layouts/backend/main_layout', $data);

	}

	public function edit($id)
	{
		$data['page'] = 'admin/desa/edit';
		$data['active'] = 'desa';
        $data['user'] = $this->db->get_where('admin', ['emails' => $this->session->userdata("emails")])->row_array();
		$data['profil_desa'] = $this->db->get_where('profil_desa', ["profil_desa_id" => $id])->row_array();
		$data['desa'] = $this->db->get("profil_desa")->result_array();
		
		$this->load->view('layouts/backend/main_layout', $data);

	}
	

	public function update($id)
    {
        

       
        $where = ['profil_desa_id' => $id];

      
            $data = [
				"nama" => $this->input->post("nama"),
				"alamat" => $this->input->post("alamat"),
				"telp" => $this->input->post("telp"),
				"email" => $this->input->post("email"),
				"total_pria" => $this->input->post("total_pria"),
				"total_wanita" => $this->input->post("total_wanita"),
				"total_penduduk" => $this->input->post("total_penduduk"),
				"gmaps" => $this->input->post("gmaps"),
				"deskripsi" => $this->input->post("deskripsi"),
               
               
            ];
            $update = $this->db->update('profil_desa', $data, $where);
    

        if ($update) {
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center">Sukses ubah data</div>');
            redirect('admin/desa/');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center">Gagal ubah data</div>');
            redirect('admin/desa');
        }
    }

	
}
