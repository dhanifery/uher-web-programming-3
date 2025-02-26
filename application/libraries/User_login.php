<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_login
{
        protected $ci;

        public function __construct()
        {
        $this->ci =& get_instance();
        $this->ci->load->model('Model_login');
        }

        public function login($username, $password)
        { 
                $cek = $this->ci->Model_login->login_user($username, $password);
                if ($cek){
                  $data =[
                     'username' => $cek['username'],
                     'nama_lengkap' => $cek['nama_lengkap'],
                     'id' => $cek['id'],
                   ];
                $this->ci->session->set_userdata($data);
                     // redirect
                     echo "<script>
                     alert('Selamat anda berhasil login');
                     window.location='" .site_url('awal'),"';
                     </script>";
                } else{
                        // jika salah
                        $this->ci->session->set_flashdata('error', 'Login Gagal! Username atau Password salah');
                        redirect('login/login_user');                  
                      }
        
        }

}

