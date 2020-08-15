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
        $data['page'] = 'user/member/index';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nik'] = $data['user']['nik'];
        $data['nama'] = $data['user']['nama_lengkap'];
        $data['gender'] = $data['user']['gender'];
        $data['tmp_lahir'] = $data['user']['tmp_lahir'];
        $data['tgl_lahir'] = $data['user']['tgl_lahir'];
        $data['alamat'] = $data['user']['alamat'];
        $data['username'] = $data['user']['username'];
        $data['nohp'] = $data['user']['nohp'];
        $data['email'] = $data['user']['email'];
        $data['active'] = 'user';
        $data['desa'] = $this->db->get("profil_desa")->result_array();
        $this->load->view('layouts/frontend/main_layout', $data);
    }

    

    public function edit()
    {
        $data['page'] = 'user/member/edit';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['desa'] = $this->db->get("profil_desa")->result_array();
        $data['nik'] = $data['user']['nik'];
        $data['nama'] = $data['user']['nama_lengkap'];
        $data['gender'] = $data['user']['gender'];
        $data['tmp_lahir'] = $data['user']['tmp_lahir'];
        $data['tgl_lahir'] = $data['user']['tgl_lahir'];
        $data['alamat'] = $data['user']['alamat'];
        $data['username'] = $data['user']['username'];
        $data['nohp'] = $data['user']['nohp'];
        $data['email'] = $data['user']['email'];
        $data['active'] = 'user';

        $this->load->view('layouts/frontend/main_layout', $data);
    }
    public function update($id){
         $where = ['user' => $id];

      
            $data = [
                "nama" => $this->input->post("nama_lengkap"),
                "gender" => $this->input->post("gender"),
                "tmp_lahir" => $this->input->post("tmp_lahir"),
                "tgl_lahir" => $this->input->post("tgl_lahir"),
                "alamat" => $this->input->post("alamat"),
                "nohp" => $this->input->post("nohp"),
                "email" => $this->input->post("email"),
            ];
            $update = $this->db->update('user', $data, $where);
    

        if ($update) {
            $this->session->set_flashdata('add', '<div class="alert alert-success text-center">Sukses ubah data</div>');
            redirect('member');
        } else {
            $this->session->set_flashdata('add', '<div class="alert alert-danger text-center">Gagal ubah data</div>');
            redirect('member');
        }
    }

    public function changepassword()
    {
        $data['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['active'] = 'user';
        
        // $this->load->view('layouts/frontend/main_layout', $data);

        

        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('newpassword', 'Password Baru', 'trim|required|min_length[6]|matches[repassword]');
        $this->form_validation->set_rules('repassword', 'Kofirmasi Password', 'trim|required|min_length[6]|matches[newpassword]');


        if ($this->form_validation->run() == false) 
        {
            $data['page'] = 'user/member/changepassword';
            $data['desa'] = $this->db->get("profil_desa")->result_array();
            $this->load->view('layouts/frontend/main_layout', $data);
        }else {
            $password = $this->input->post('password');
            $newpassword = $this->input->post('newpassword');
            $repassword = $this->input->post('repassword');
            if(!password_verify($password,$data['user']['password'])){
                $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">Password Anda Salah</div>');
            redirect('user/changepassword');
            }else {
            if($password == $newpassword){
                $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">Password Baru tidak boleh sama dengan password lama</div>');
            redirect('user/changepassword');
            }
                
            else{

                $newpassword = $this->input->post('newpassword');
                $repassword = $this->input->post('repassword');

                if ( $repassword == $newpassword   ) {
                    $password_hash = password_hash($newpassword, PASSWORD_DEFAULT);
                $this->db->set('password',$password_hash);
                $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                $this->db->update('user');

                $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">Password Berhasil dirubah</div>');
            redirect('user/changepassword');
                    # code...
                } else  {
                        $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">Konfirmasi gagal</div>');
            redirect('user/changepassword');
                }
            }
        }
        }

    }
}
