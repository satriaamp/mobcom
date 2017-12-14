<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="mhs-container">
        <div class="container-title">KURIKULUM & MATA KULIAH</div>
        <div class="table-container">
            <table class="table table-striped table-hover">
                <thead>                                                                                                        
                    <tr>                                                                                                       
                        <th class="text-center" style="vertical-align:middle;">NO</th>
                        <th class="text-center" style="vertical-align:middle;">KODE MATA KULIAH</th>
                        <th class="text-center" style="vertical-align:middle;">MATA KULIAH</th>
                        <th class="text-center" style="vertical-align:middle;">SEMESTER</th>
                        <th class="text-center" style="vertical-align:middle;">SKS</th>
                        <th class="text-center" style="vertical-align:middle;" colspan="3">ACTION</th>
                    </tr>                                                                                                      
                </thead>                                                                                                       
                <tbody>
                    <?php
                        $no = 1;
                        foreach($records as $rec){
                    ?>
                    <tr>
                        <td class="text-center" style="vertical-align:middle;"><?php echo $no;?></td>
                        <td class="text-center" style="vertical-align:middle;"><?php echo $rec->kd_matkul;?></td>
                        <td class="text-center" style="vertical-align:middle;"><?php echo $rec->nama_matkul;?></td>            
                        <td class="text-center" style="vertical-align:middle;"><?php echo $rec->semester;?></td>			
                        <td class="text-center" style="vertical-align:middle;"><?php echo $rec->sks;?></td>
                        <td class="text-center" style="vertical-align:middle;">
                            <form role="form" action="#" method="post">
                                <button type="submit" class="btn btn-success" name="read">Detail Mata Kuliah</button>
                            </form>
                        </td>
                        <?php if(($this->session->userdata('status')) == 'admin'): ?>
                        <td class="text-center" style="vertical-align:middle;">
                            <form role="form" action="#" method="post">
                                <button type="submit" class="btn btn-info" name="edit">Edit Detail</button>
                            </form>
                        </td>
                        <td class="text-center" style="vertical-align:middle;">
                            <form role="form" action="#" method="post">
                                <button type="submit" class="btn btn-danger" name="delete" onclick="return confirm('Are you sure you want to delete this entry ?')">Hapus Data</button>
                            </form>
                        </td>
                        <?php endif ?>
                    </tr>
                    <?php
                       $no++;
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