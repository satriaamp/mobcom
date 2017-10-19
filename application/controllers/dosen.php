<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Dosen extends CI_Controller {
        public function index(){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'dosen'){
                $nidn = $this->session->userdata('username');
                
                $data['title'] = 'KRSAPP - Kartu Akademik';
                $data['records'] = $this->sistemAkademik->GetRequest();
                
                
                
                $this->load->view('header', $data);
                $this->load->view('dosen/homepage', $data);
                $this->load->view('footer');
            }
            else{
                redirect();
            }
        }


        public function Verifikasi_Mahasiswa($npm){
             if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'dosen'){
                $data['title'] = 'Ubah Data - KRSAPP';
                $data['record'] = $this->sistemAkademik->GetEntryMahasiswa($npm);
            
    
                    $update = $this->sistemAkademik->UpdateVerifikasiMahasiswa($npm);


                    if($update){
                        redirect('dosen');
                    }
                    else{
                        redirect('dosen/mahasiswa/'.$npm);
                    }
                }
            
            else{
                redirect();
            }
        
        }


    }

?>