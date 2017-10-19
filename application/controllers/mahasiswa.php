<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Mahasiswa extends CI_Controller {
        public function index(){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'mahasiswa'){
                $npm = $this->session->userdata('username');
                
                $data['title'] = 'KRSAPP - Kartu Akademik';
                $data['record'] = $this->sistemAkademik->GetEntryMahasiswa($npm);
                
                if(count($this->sistemAkademik->GetDataKRS($npm, $data['record'][0]->semester)) > 0){
                    $data['krs_detail'] = '';
                    $data['isi_krs'] = 'disabled';
                }
                else{
                    $data['krs_detail'] = 'disabled';
                    $data['isi_krs'] = '';
                }
                
                $this->load->view('header', $data);
                $this->load->view('mahasiswa/detail-mahasiswa', $data);
                $this->load->view('footer');
            }
            else{
                redirect();
            }
        }
        
        public function KKS($npm){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'mahasiswa' && $this->session->userdata('username') == $npm){
                $data['title'] = 'Sistem Akademik - KKS';
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
                $this->load->view('mahasiswa/kks', $data);
                $this->load->view('footer');
            }
            else{
                redirect();
            }
        }
        
        public function KRS($npm, $semester){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'mahasiswa' && $this->session->userdata('username') == $npm){
                $mahasiswa = $this->sistemAkademik->GetEntryMahasiswa($npm);
            
                $data['title'] = 'Sistem Akademik - KRS';
                $data['npm'] = $npm;
                $data['semester'] = $semester;
                $data['sisa_sks'] = $mahasiswa[0]->sks;
                $data['records'] = $this->sistemAkademik->GetDataKRS($npm, $semester);

                foreach($data['records'] as $record){
                    $record->semester = $this->sistemAkademik->GetEntryKurikulum($record->kd_matkul)[0]->semester;
                }

                $this->load->view('header', $data);
                $this->load->view('mahasiswa/detail-krs', $data);
                $this->load->view('footer');
            }
            else{
                redirect();
            }
        }
        
        public function Isi_Dan_Edit_KRS($npm, $semester){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'mahasiswa' && $this->session->userdata('username') == $npm){
                $data['title'] = 'Sistem Akademik - Pengisian KRS';
                $data['npm'] = $npm;
                $data['semester'] = $semester;
                $data['sisa_sks'] = $this->sistemAkademik->GetEntryMahasiswa($npm)[0]->sks;
                $data['kurikulum'] = array();
                $data['krs'] = $this->sistemAkademik->GetDataKRS($npm, $semester);

                foreach($data['krs'] as $krs){
                    $krs->semester = $this->sistemAkademik->GetEntryKurikulum($krs->kd_matkul)[0]->semester;
                }

                if($semester % 2 != 0){
                    $data['kurikulum'] = array_merge($this->sistemAkademik->GetDataKurikulum(1), $this->sistemAkademik->GetDataKurikulum(3), $this->sistemAkademik->GetDataKurikulum(5), $this->sistemAkademik->GetDataKurikulum(7));
                }
                else{
                    $data['kurikulum'] = array_merge($this->sistemAkademik->GetDataKurikulum(2), $this->sistemAkademik->GetDataKurikulum(4), $this->sistemAkademik->GetDataKurikulum(6), $this->sistemAkademik->GetDataKurikulum(8));
                }

                $this->load->view('header', $data);
                $this->load->view('mahasiswa/isi-dan-edit-krs', $data);
                $this->load->view('footer');
            }
            else{
                redirect();
            }
        }
        
        public function Add_Into_KRS($npm, $kd_matkul){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'mahasiswa' && $this->session->userdata('username') == $npm){
                $val1 = TRUE;
                $val2 = TRUE;
                $val3  = TRUE;

                $semester = $this->sistemAkademik->GetEntryMahasiswa($npm)[0]->semester;
                $all = $this->sistemAkademik->GetDataKRS($npm, $semester);
                $mat_kul = $this->sistemAkademik->GetEntryKurikulum($kd_matkul);

                foreach($all as $matkul){
                    if($kd_matkul == $matkul->kd_matkul){
                        $val1 = FALSE;
                    }
                }

                if($mat_kul[0]->semester > ($semester + 2)){
                    $val2 = FALSE;
                }

                if($mat_kul[0]->sks > $this->sistemAkademik->GetEntryMahasiswa($npm)[0]->sks){
                    $val3 = FALSE;
                }

                if($val1 && $val2 && $val3){
                    $insert = $this->sistemAkademik->AddEntryKRS($npm, $kd_matkul, $semester);
                    if($insert){
                        $this->sistemAkademik->UpdateStatusMahasiswa($npm);
                       redirect('mahasiswa/'.$npm.'/Isi-Dan-Edit-KRS/'.$semester);
                    }
                }
                else{

                    if(!$val1){
                        echo '<script type="text/javascript">
                                    alert("Mata kuliah yang dipilih sudah ada di dalam KRS");
                                    window.location.href="/KRS/mahasiswa/'.$npm.'/Isi-Dan-Edit-KRS/'.$semester.'";
                              </script>';
                    }

                    if(!$val2){
                        echo '<script type="text/javascript">
                                    alert("Mata kuliah yang bisa dipilih hanya sampai mata kuliah semester '.($semester + 2).'");
                                    window.location.href="/KRS/mahasiswa/'.$npm.'/Isi-Dan-Edit-KRS/'.$semester.'";
                              </script>';
                    }

                    if(!$val3){
                        echo '<script type="text/javascript">
                                    alert("Sisa SKS tidak mencukupi");
                                    window.location.href="/KRS/mahasiswa/'.$npm.'/Isi-Dan-Edit-KRS/'.$semester.'";
                              </script>';
                    }
                }
            }
            else{
                redirect();
            }
        }
        
        public function Delete_From_KRS($npm, $kd_matkul){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'mahasiswa' && $this->session->userdata('username') == $npm){
                $semester = $this->sistemAkademik->GetEntryMahasiswa($npm)[0]->semester;
            
                $this->sistemAkademik->DeleteEntryKRS($npm, $kd_matkul, $semester);
                $this->sistemAkademik->UpdateStatusMahasiswa($npm);
                redirect('mahasiswa/'.$npm.'/Isi-Dan-Edit-KRS/'.$semester);
            }
            else{
                redirect();
            }
        }
        
        public function Change_Password($npm){
            if(!empty($this->session->userdata('logged_in')) && $this->session->userdata('status') == 'mahasiswa' && $this->session->userdata('username') == $npm){
                $data['title'] = 'Sistem Akademik - Change Password';
                $data['npm'] = $npm;
                
                $val = $this->input->post('submit');
                
                if($val == 'Change'){
                    $this->form_validation->set_rules('oldpass', 'Old Password', 'trim|required|max_length[50]|callback_Check_Old_Password');
                    $this->form_validation->set_rules('newpass', 'New Password', 'trim|required|max_length[50]');
                }
                
                if($this->form_validation->run() == FALSE){
                    $this->load->view('header', $data);
                    $this->load->view('mahasiswa/change-password', $data);
                    $this->load->view('footer');
                }
                else{
                    $data = array(
                        'username' => $this->session->userdata('username'),
                        'password' => $this->input->post('newpass'),
                        'status' => 'mahasiswa'
                    );
                    
                    $change = $this->sistemAkademik->ChangePassword($data);
                    
                    if($change){
                        redirect();
                    }
                    else{
                        redirect('mahasiswa/'.$npm.'/Change-Password');
                    }
                }
            }
            else{
                redirect();
            }
        }
        
        public function Check_Old_Password($password){
            $oldpassword = $this->sistemAkademik->GetPassword($this->session->userdata('username'));
            
            if($password == $oldpassword){
                return TRUE;
            }
            else{
                $this->form_validation->set_message('Check_Old_Password', 'The Old Password field does not match the old password.');
                return FALSE;
            }
        }
    }
?>