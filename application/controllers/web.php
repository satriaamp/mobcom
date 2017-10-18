<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Web extends CI_Controller {
        public function _construct(){
            session_start();
        }

        public function index(){
            $data['title'] = 'Welcome to KRSAPP!';

            $this->load->view('header_splash', $data);
            $this->load->view('splashscreen');
        }

        public function loginPage(){
            $logged_in = $this->session->userdata('logged_in');
            
            if(empty($logged_in))
            {
                $data['title'] = 'Sign In - KRSAPP';
                
                $this->load->view('header', $data);
                $this->load->view('login');
                $this->load->view('footer');
            }
            else
            {
                $status = $this->session->userdata('status');
                
                redirect($status);
            }
        }

        public function login(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $this->sistemAkademik->GetLoginData($username,$password);
        }

        public function logout(){
            $this->session->sess_destroy();
            redirect('loginPage');
        }
    }
?>