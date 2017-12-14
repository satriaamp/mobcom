<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="mhs-container">
        <div class="container-title">VERIFIKASI KRS</div>
        <div class="table-container">
            <table class="table table-striped table-hover">
                <thead>                                                                                                                                
                    <tr>                                                                                                                                  
                        <th class="text-center" style="vertical-align:middle;">NPM</th>
                        <th class="text-center" style="vertical-align:middle;">NAMA MAHASISWA</th>
                        <th class="text-center" style="vertical-align:middle;">SEMESTER</th>
                        <th class="text-center" style="vertical-align:middle;">SISA SKS</th>
                        <th class="text-center" style="vertical-align:middle;">DETAIL</th>
                        <th class="text-center" style="vertical-align:middle;">VERIFIKASI KRS?</th>
                    </tr>                                                                                                                                 
                </thead>                                                                                                                                
                <tbody>
                    <?php
                        foreach($records as $rec){
                    ?>
                    <tr>
                        <td class="text-center" style="vertical-align:middle;"><?php echo $rec->npm;?></td>
                        <td style="vertical-align:middle;"><?php echo $rec->nama;?></td>
                        <td class="text-center" style="vertical-align:middle;"><?php echo $rec->semester;?></td>			
                        <td class="text-center" style="vertical-align:middle;"><?php echo $rec->sks;?></td>
                        <td class="text-center">
                            <form role="form" action="<?php echo site_url('admin/mahasiswa/'.$rec->npm);?>" method="post">
                                <button type="submit" class="btn btn-primary">Lihat Mahasiswa</button>
                            </form>
                        </td>
                        <td class="text-center" style="vertical-align:middle;">
                            <form role="form" action="admin/Verifikasi-Mahasiswa/<?php echo $rec->npm;?>" method="post">
                                <button type="submit" class="verify-btn" name="verify" onclick="return confirm('Are you sure you want to verify this entry?')"></button>
                            </form>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php if(isset($this->session->userdata['status']) == 'dosen'): ?>
        <button type="submit" class="add-btn" name="add"></button>
        <div class="add-btn-popup-box">
            <form action="/KRS/admin/Add-Mahasiswa" method="post">
                <button type="submit" class="item" name="add">Mahasiswa</button>
            </form>
            <form action="/KRS/admin/Add-Dosen" method="post">
                <button type="submit" class="item" name="add">Dosen</button>
            </form>
            <form action="/KRS/admin/Add-Matkul" method="post">
                <button type="submit" class="item" name="add">Mata Kuliah</button>
            </form>
        </div>
    <?php endif ?>
</div> <!-- tutup app-body dari header -->
