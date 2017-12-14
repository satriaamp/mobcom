<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Controller {
        public function index(){
            if(!empty($this->session->userdata('logged_in')) && ($this->session->userdata('status') == 'admin') || ($this->session->userdata('status') == 'dosen')){
                $data['records'] = $this->sistemAkademik->GetRequest();
                $data['title'] = 'Admin KRSAPP - Verifikasi KRS';
                
                $this->load->view('header', $data);
                $this->load->view('admin/homepage', $data);
                $this->load->view('footer');
            }
            else{
                redirect();
            }
        }
        
        public function Add_Mahasiswa(){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'admin'){
                $data = array();
                
                $data['title'] = 'Add Mahasiswa - KRSAPP';

                $val = $this->input->post('submit');
                
                if($val == 'Add'){
                    $this->form_validation->set_rules('npm', 'NPM', 'trim|required|numeric|min_length[12]|max_length[12]|is_unique[t_mahasiswa.npm]');
                    $this->form_validation->set_rules('nama', 'Nama', 'trim|required|max_length[25]');
                    $this->form_validation->set_rules('semester', 'Semester', 'trim|required');
                    $this->form_validation->set_rules('sks', 'SKS', 'trim|required');
                }
                    
                if($this->form_validation->run() == FALSE){
                    $this->load->view('header', $data);
                    $this->load->view('admin/add-mahasiswa', $data);
                    $this->load->view('footer');
                }
                else{
                    $data = array(
                        'npm' => $this->input->post('npm'),
                        'nama' => $this->input->post('nama'),
                        'semester' => $this->input->post('semester'),
                        'sks' => $this->input->post('sks'),
                    );

                    $insert = $this->sistemAkademik->InsertMahasiswa($data);
                    // var_dump($data);

                    if($insert){
                        redirect('admin');
                    }
                    else{
                        redirect('admin/Add-Mahasiswa');
                    }
                }
            }
            else{
                redirect();
            }
        }

        public function Add_Matkul(){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'admin'){
                $data = array();
                
                $data['title'] = 'Add Mata Kuliah - KRSAPP';

                $val = $this->input->post('submit');
                
                if($val == 'Add'){
                    $this->form_validation->set_rules('kd_matkul', 'Kode Mata Kuliah', 'trim|required');
                    $this->form_validation->set_rules('nama_matkul', 'Mata Kuliah', 'trim|required|max_length[25]');
                    $this->form_validation->set_rules('semester', 'Semester', 'trim|required');
                    $this->form_validation->set_rules('sks', 'SKS', 'trim|required');
                }
                    
                if($this->form_validation->run() == FALSE){
                    $this->load->view('header', $data);
                    $this->load->view('admin/add-matkul', $data);
                    $this->load->view('footer');
                }
                else{
                    $data = array(
                        'no' => $this->input->post('no'),
                        'kd_matkul' => $this->input->post('kd_matkul'),
                        'nama_matkul' => $this->input->post('nama_matkul'),
                        'semester' => $this->input->post('semester'),
                        'sks' => $this->input->post('sks')
                    );

                    $insert = $this->sistemAkademik->InsertMatkul($data);
                    //var_dump($data);

                    if($insert){
                        redirect('admin');
                    }
                    else{
                        redirect('admin/Add-Matkul');
                    }
                }
            }
            else{
                redirect();
            }
        }

        public function Add_Dosen(){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'admin'){
                $data = array();
                
                $data['title'] = 'Add Dosen - KRSAPP';

                $val = $this->input->post('submit');
                
                if($val == 'Add'){
                    $this->form_validation->set_rules('nidn', 'NIDN', 'trim|required');
                    $this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'trim|required|max_length[50]');
                }
                    
                if($this->form_validation->run() == FALSE){
                    $this->load->view('header', $data);
                    $this->load->view('admin/add-dosen', $data);
                    $this->load->view('footer');
                }
                else{
                    $data = array(
                        'nidn' => $this->input->post('nidn'),
                        'nama_dosen' => $this->input->post('nama_dosen'),
                    );

                    $insert = $this->sistemAkademik->InsertDosen($data);
                    //var_dump($data);

                    if($insert){
                        redirect('admin/Lihat-Dosen');
                    }
                    else{
                        redirect('admin/Add-Dosen');
                    }
                }
            }
            else{
                redirect();
            }
        }

        public function Lihat_Mahasiswa(){
            if(!empty($this->session->userdata('logged_in'))){
                $data['records'] = $this->sistemAkademik->GetAllData('t_mahasiswa')->result();
                $data['title'] = 'Daftar Mahasiswa - KRSAPP';
                
                $this->load->view('header', $data);
                $this->load->view('admin/data-mahasiswa', $data);
                $this->load->view('footer');
            }
            else{
                redirect();
            }
        }

        public function Lihat_Dosen(){
            if(!empty($this->session->userdata('logged_in'))){
                $data['records'] = $this->sistemAkademik->GetAllData('t_dosen')->result();
                $data['title'] = 'Daftar Dosen - KRSAPP';
                
                $this->load->view('header', $data);
                $this->load->view('admin/data-dosen', $data);
                $this->load->view('footer');
            }
            else{
                redirect();
            }
        }

        public function Lihat_Matkul(){
            if(!empty($this->session->userdata('logged_in'))){
                $data['records'] = $this->sistemAkademik->GetAllData('t_kurikulum')->result();
                $data['title'] = 'Kurikulum & Mata Kuliah - KRSAPP';
                
                $this->load->view('header', $data);
                $this->load->view('admin/data-matkul', $data);
                $this->load->view('footer');
            }
            else{
                redirect();
            }
        }

        public function Detail_Mahasiswa($npm){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'admin'){
                $data['title'] = 'Detail Mahasiswa - KRSAPP';
                $data['record'] = $this->sistemAkademik->GetEntryMahasiswa($npm);

                if(count($this->sistemAkademik->GetDataKRS($npm, $data['record'][0]->semester)) > 0){
                    $data['krs_detail'] = '';
                }
                else{
                    $data['krs_detail'] = 'disabled';
                }
                
                $this->load->view('header', $data);
                $this->load->view('admin/detail-mahasiswa', $data);
                $this->load->view('footer');
            }
            else{
                redirect();
            }
        }

        public function Detail_Dosen($nidn){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'admin'){
                $data['title'] = 'Detail Dosen - KRSAPP';
                $data['record'] = $this->sistemAkademik->GetEntryDosen($nidn);

                
                
                $this->load->view('header', $data);
                $this->load->view('admin/detail-dosen', $data);
                $this->load->view('footer');
            }
            else{
                redirect();
            }
        }
        
        public function Edit_Mahasiswa($npm){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'admin'){
                $data['title'] = 'Ubah Data - KRSAPP';
                $data['record'] = $this->sistemAkademik->GetEntryMahasiswa($npm);
            
                $val = $this->input->post('edit');

                if($val == 'Update'){
                    $this->form_validation->set_rules('nama', 'Nama', 'trim|required|max_length[25]');
                    $this->form_validation->set_rules('semester', 'Semester', 'trim|required');
                    $this->form_validation->set_rules('sks', 'SKS', 'trim|required');
                }

                if($this->form_validation->run() == FALSE){
                    $this->load->view('header', $data);
                    $this->load->view('admin/edit-detail-mahasiswa', $data);
                    $this->load->view('footer');
                }
                else{
                    $data = array(
                        'npm' => $npm,
                        'nama' => $this->input->post('nama'),
                        'semester' => $this->input->post('semester'),
                        'sks' => $this->input->post('sks')
                    );

                    $update = $this->sistemAkademik->UpdateEntryMahasiswa($data);

                    if($update){
                        redirect('admin');
                    }
                    else{
                        redirect('admin/mahasiswa/'.$npm);
                    }
                }
            }
            else{
                redirect();
            }
        }

         public function Edit_Dosen($nidn){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'admin'){
                $data['title'] = 'Ubah Data - KRSAPP';
                $data['record'] = $this->sistemAkademik->GetEntryDosen($nidn);
            
                $val = $this->input->post('edit');

                if($val == 'Update'){
                    $this->form_validation->set_rules('nama', 'Nama', 'trim|required|max_length[25]');
                    
                }

                if($this->form_validation->run() == FALSE){
                    $this->load->view('header', $data);
                    $this->load->view('admin/edit-detail-dosen', $data);
                    $this->load->view('footer');
                }
                else{
                    $data = array(
                        'nidn' => $nidn,
                        'nama_dosen' => $this->input->post('nama_dosen'),
                        'npm'  => $this->input->post('npm')
                       
                    );

                    $update = $this->sistemAkademik->UpdateEntryDosen($data);

                    if($update){
                        redirect('admin');
                    }
                    else{
                        redirect('admin/dosen/'.$nidn);
                    }
                }
            }
            else{
                redirect();
            }
        }
        
        public function Delete_Mahasiswa($npm){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'admin'){
                $this->sistemAkademik->DeleteMahasiswa($npm);
                redirect('admin/Lihat-Mahasiswa');
            }
            else{
                redirect();
            }
        }

        public function Delete_Dosen($nidn){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'admin'){
                $this->sistemAkademik->DeleteDosen($nidn);
                redirect('admin/Lihat-Dosen');
            }
            else{
                redirect();
            }
        }

        public function Verifikasi_Mahasiswa($npm){
             if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'admin'){
                // $data['title'] = 'Ubah Data - KRSAPP';
                $data['record'] = $this->sistemAkademik->GetEntryMahasiswa($npm);
                    $update = $this->sistemAkademik->UpdateVerifikasiMahasiswa($npm);
                    if($update){
                        redirect('admin');
                    }
                    else{
                        redirect('admin/mahasiswa/'.$npm);
                    }
                }
            
            else{
                redirect();
            }
        
        }

        public function KKS($npm){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'admin'){
                $data['title'] = 'Kartu Kemajuan Studi - KRSAPP';
                $data['npm'] = $npm;
                $data['terms'] = array();
                $data['records'] = array();

                $h = 0;

                for($i = 1 ; $i <= 14 ; $i++){
                    if(count($this->sistemAkademik->GetDataKRS($npm, $i)) > 0){
                        $data['terms'][$h] = 'Semester '.$i;
                        $data['records'][$h] = $this->sistemAkademik->GetDataKRS($npm, $i);

                        foreach($data['records'][$h] as $record){
                            $record->semester = $this->sistemAkademik->GetEntryKurikulum($record->kd_matkul)[0]->semester;
                        }

                        $h++;
                    }
                }
                
                $this->load->view('header', $data);
                $this->load->view('admin/kks', $data);
                $this->load->view('footer');
            }
            else{
                redirect();
            }
        }
        
        public function KRS($npm, $semester){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'admin'){
                $mahasiswa = $this->sistemAkademik->GetEntryMahasiswa($npm);
            
                $data['title'] = 'Kartu Rencana Studi - KRSAPP';
                $data['npm'] = $npm;
                $data['semester'] = $semester;
                $data['sisa_sks'] = $mahasiswa[0]->sks;
                $data['records'] = $this->sistemAkademik->GetDataKRS($npm, $semester);

                foreach($data['records'] as $record){
                    $record->semester = $this->sistemAkademik->GetEntryKurikulum($record->kd_matkul)[0]->semester;
                }

                $this->load->view('header', $data);
                $this->load->view('admin/detail-krs', $data);
                $this->load->view('footer');
            }
            else{
                redirect();
            }
        }
    }
?>