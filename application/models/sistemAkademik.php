<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class SistemAkademik extends CI_Model{
        public function GetLoginData($username, $password){
            $check = $this->db->get_where('t_login', array('username' => $username, 'password' => md5($password)));
            
            if(count($check->result()) > 0){
                foreach($check->result() as $login){
                    $sess_data['logged_in'] = 'yes';
                    $sess_data['username'] = $username;
                    
                    if($login->status == 'admin'){
                        $sess_data['status'] = 'admin';
                    }
                    else if($login->status == 'mahasiswa'){
                        $sess_data['status'] = 'mahasiswa';
                    }
                    else {
                        $sess_data['status'] = 'dosen';

                    }
                    
                    $this->session->set_userdata($sess_data);
                    redirect($sess_data['status']);
                }
            }
            else{
                redirect('loginPage');
            }
        }
        
        public function GetPassword($username){
            return $this->db->get_where('t_login', array('username' => $username))->result()[0]->password;
        }
        
        public function ChangePassword($data){
            $this->db->where('username', $data['username']);
            return $this->db->update('t_login', $data);
        }
        
        public function GetAllData($table){
            return $this->db->get($table);
        }
        
        public function GetRequest(){
             $this->db->where('verifikasi', 'pending');
             return $this->db->get('t_mahasiswa')->result();
        }

        public function GetEntryMahasiswa($npm){
            $this->db->where('npm', $npm);
            return $this->db->get('t_mahasiswa')->result();
        }

        public function GetEntryDosen($nidn){
            $this->db->where('nidn', $nidn);
            return $this->db->get('t_dosen')->result();
        }
        
        public function InsertMahasiswa($data){
            $val1 = $this->db->insert('t_mahasiswa', $data);
            $login = array(
                'username' => $data['npm'],
                'password' => $data['npm'],
                'status' => 'mahasiswa'
            );
            
            $val2 = $this->db->insert('t_login', $login);
            
            return $val1 AND $val2;
        }


        public function InsertMatkul($data){
            $val1 = $this->db->insert('t_kurikulum', $data);
            
            return $val1;
        }

        public function InsertDosen($data){
            $val1 = $this->db->insert('t_dosen', $data);

            $login = array(
                'username' => $data['nidn'],
                'password' => $data['nidn'],
                'status' => 'dosen'
            );
            
            $val2 = $this->db->insert('t_login', $login);
            
            return $val1 AND $val2;       
        }
        
        public function UpdateEntryMahasiswa($data){
            $this->db->where('npm', $data['npm']);
            return $this->db->update('t_mahasiswa', $data);
        }

         public function UpdateEntryDosen($data){
            $this->db->where('nidn', $data['nidn']);
            return $this->db->update('t_dosen', $data);
        }

      
        public function UpdateStatusMahasiswa($npm){
            $this->db->set('verifikasi', 'Pending');
            $this->db->where('npm', $npm);
            return $this->db->update('t_mahasiswa');
        }

        public function UpdateVerifikasiMahasiswa($npm){
            $this->db->set('verifikasi', 'Terverifikasi');
            $this->db->where('npm', $npm);
            return $this->db->update('t_mahasiswa');
        }

        public function DeleteMahasiswa($npm){
            $this->db->where('npm', $npm);
            $this->db->delete('t_mahasiswa');
            
            $this->db->where('username', $npm);
            $this->db->delete('t_login');
            
            $this->db->where('npm', $npm);
            $this->db->delete('t_krs');

        }

         public function DeleteDosen($nidn){
            $this->db->where('nidn', $nidn);
            $this->db->delete('t_dosen');
            
            $this->db->where('username', $nidn);
            $this->db->delete('t_login');
           

        }

        
        public function GetDataKurikulum($semester){
            return ($this->db->get_where('t_kurikulum', array('semester' => $semester))->result());
        }
        
        public function GetEntryKurikulum($kd_matkul){
            return ($this->db->get_where('t_kurikulum', array('kd_matkul' => $kd_matkul))->result());
        }
        
        public function GetDataKRS($npm, $semester){
            return ($this->db->get_where('t_krs', array('npm' => $npm, 'semester_diambil' => $semester))->result());
        }
        
        public function AddEntryKRS($npm, $kd_matkul, $semester){
            $matkul = $this->getEntryKurikulum($kd_matkul);
            
            $data = array(
                'npm' => $npm,
                'kd_matkul' => $matkul[0]->kd_matkul,
                'nama_matkul' => $matkul[0]->nama_matkul,
                'semester_diambil' => $this->GetEntryMahasiswa($npm)[0]->semester,
                'sks' => $matkul[0]->sks
            );
            
            $mahasiswa = $this->GetEntryMahasiswa($npm);
            
            $data_mahasiswa = array(
                'npm' => $mahasiswa[0]->npm,
                'nama' => $mahasiswa[0]->nama,
                'semester' => $mahasiswa[0]->semester,
                'sks' => ($mahasiswa[0]->sks - $data['sks'])
            );
            
            $this->UpdateEntryMahasiswa($data_mahasiswa);
            
            return $this->db->insert('t_krs', $data);
        }
        
        public function DeleteEntryKRS($npm, $kd_matkul, $semester){
            $this->db->where(array('npm' => $npm, 'kd_matkul' => $kd_matkul, 'semester_diambil' => $semester));
            $this->db->delete('t_krs');
            
            $mahasiswa = $this->GetEntryMahasiswa($npm);
            $matkul = $this->GetEntryKurikulum($kd_matkul);
            
            $data_mahasiswa = array(
                'npm' => $mahasiswa[0]->npm,
                'nama' => $mahasiswa[0]->nama,
                'semester' => $mahasiswa[0]->semester,
                'sks' => ($mahasiswa[0]->sks + $matkul[0]->sks)
            );
            
            $this->UpdateEntryMahasiswa($data_mahasiswa);
        }
    }
?>