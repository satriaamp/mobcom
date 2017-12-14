<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="mhs-container">
        <div class="container-title">DAFTAR MAHASISWA</div>
        <div class="table-container">
            <table class="table table-striped table-hover">
                <thead>                                                                                                                
                    <tr>
                        <th class="text-center" style="vertical-align:middle;">NPM</th>
                        <th class="text-center" style="vertical-align:middle;">NAMA MAHASISWA</th>
                        <th class="text-center" style="vertical-align:middle;">SEMESTER</th>
                        <th class="text-center" style="vertical-align:middle;">SISA SKS</th>
                        <?php if(($this->session->userdata('status')) == 'admin'): ?>
                        <th class="text-center" style="vertical-align:middle;" colspan="3">ACTION</th>
                        <?php endif ?>
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
                        <?php if(($this->session->userdata('status')) == 'admin'): ?>
                        <td class="text-center" style="vertical-align:middle;">
                            <form role="form" action="<?php echo site_url('admin/mahasiswa/'.$rec->npm);?>" method="post">
                                <button type="submit" class="btn btn-success" name="read">Detail Mahasiswa</button>
                            </form>
                        </td>
                        <td class="text-center" style="vertical-align:middle;">
                            <form role="form" action="<?php echo base_url('admin/mahasiswa/'.$rec->npm).'/Edit';?>" method="post">
                                <button type="submit" class="btn btn-info" name="edit">Edit Detail</button>
                            </form>
                        </td>
                        <td class="text-center" style="vertical-align:middle;">
                            <form role="form" action="<?php echo base_url('admin/Delete-Mahasiswa/'.$rec->npm);?>" method="post">
                                <button type="submit" class="btn btn-danger" name="delete" onclick="return confirm('Are you sure you want to delete this entry ?')">Hapus Data</button>
                            </form>
                        </td>
                        <?php endif ?>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php if(($this->session->userdata('status')) == 'admin'): ?>
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