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

    public function changepassword()
    {
        $data['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('admin', ['emails' => $this->session->userdata('emails')])->row_array();
        $data['active'] = 'user';
        
        // $this->load->view('layouts/frontend/main_layout', $data);

        

        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('newpassword', 'Password Baru', 'trim|required|min_length[6]|matches[repassword]');
        $this->form_validation->set_rules('repassword', 'Kofirmasi Password', 'trim|required|min_length[6]|matches[newpassword]');


        if ($this->form_validation->run() == false) 
        {
            $data['page'] = 'admin/profil/changepassword';
            $data['desa'] = $this->db->get("profil_desa")->result_array();
            $this->load->view('layouts/backend/main_layout', $data);
        }else {
            $password = $this->input->post('password');
            $newpassword = $this->input->post('newpassword');
            $repassword = $this->input->post('repassword');
            if(!password_verify($password,$data['user']['password'])){
                $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">Password Anda Salah</div>');
            redirect('admin/user/changepassword');
            }else {
            if($password == $newpassword){
                $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">Password Baru tidak boleh sama dengan password lama</div>');
            redirect('admin/user/changepassword');
            }
                
            else{

                $newpassword = $this->input->post('newpassword');
                $repassword = $this->input->post('repassword');

                if ( $repassword == $newpassword   ) {
                    $password_hash = password_hash($newpassword, PASSWORD_DEFAULT);
                $this->db->set('password',$password_hash);
                $this->db->get_where('admin', ['emails' => $this->session->userdata('emails')])->row_array();
                $this->db->update('admin');

                $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">Password Berhasil dirubah</div>');
            redirect('admin/user/changepassword');
                    # code...
                } else  {
                        $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">Konfirmasi gagal</div>');
            redirect('admin/user/changepassword');
                }
            }
        }
        }

    }
}
