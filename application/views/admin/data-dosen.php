<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="mhs-container">
        <div class="container-title">DAFTAR DOSEN</div>
        <div class="table-container">
            <table class="table table-striped table-hover">
                <thead>                                                                                                        
                    <tr>                                                                                                       
                        <th class="text-center" style="vertical-align:middle;">NIDN</th>
                        <th class="text-center" style="vertical-align:middle;">NAMA DOSEN</th>
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
                        <td class="text-center" style="vertical-align:middle;"><?php echo $rec->nidn;?></td>
                        <td class="text-center" style="vertical-align:middle;"><?php echo $rec->nama_dosen;?></td>
                        <?php if(($this->session->userdata('status')) == 'admin'): ?>
                        <td style="vertical-align:middle;">
                            <form role="form" action="<?php echo base_url('admin/dosen/'.$rec->nidn);?>"  method="post">
                                <button type="submit" class="btn btn-success" name="read">Detail Dosen</button>
                            </form>
                        </td>
                        <td class="text-center" style="vertical-align:middle;">
                            <form role="form" action="<?php echo base_url('admin/dosen/'.$rec->nidn).'/Edit';?>" method="post">
                                <button type="submit" class="btn btn-info" name="edit">Edit Detail</button>
                            </form>
                        </td>
                        <td class="text-center" style="vertical-align:middle;">
                            <form role="form" action="<?php echo base_url('admin/Delete-Dosen/'.$rec->nidn);?>"  method="post">
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
</div> <!-- tutup app-body dari header -->
