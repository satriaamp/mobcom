<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="mhs-container medium-mid">
    <form role="form" action="/KRS/admin" method="post">
        <button type="submit"class="back-btn" name="back"></button>
    </form>
    <form role="form" action="/KRS/admin/mahasiswa/<?php echo $npm;?>" method="post">
        <button type="submit"class="detail-btn"></button>
    </form>
    <div class="container-title" id="single-mid">Kartu Rencana Studi (NPM <?php echo $npm; ?>)</div>
    <table class="table table-striped table-hover">
        <thead>                                                                                                                                
            <tr> 
                <th class="text-center" style="vertical-align:middle;">NO</th>
                <th class="text-center" style="vertical-align:middle;">KODE</th>
                <th class="text-center" style="vertical-align:middle;">MATA KULIAH</th>
                <th class="text-center" style="vertical-align:middle;">SEMESTER</th>
                <th class="text-center" style="vertical-align:middle;">SKS</th>
            </tr>                                                                                                                                 
        </thead>                                                                                                                                
        <tbody>
            <?php
                $i = 1;
                foreach($records as $record){
            ?>
            <tr class="odd gradeX">
                <td class="text-center" style="vertical-align:middle;"><?php echo $i;?></td>
                <td class="text-center" style="vertical-align:middle;"><?php echo $record->kd_matkul;?></td>
                <td style="vertical-align:middle;"><?php echo $record->nama_matkul;?></td>
                <td class="text-center" style="vertical-align:middle;"><?php echo $record->semester;?></td>			
                <td class="text-center" style="vertical-align:middle;"><?php echo $record->sks;?></td>
            </tr>
            <?php
                    $i++;
                }
            ?>
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-3">
            <h4>Sisa SKS : <?php echo $sisa_sks;?></h4>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <form role="form" action="<?php echo base_url("admin/Verifikasi-Mahasiswa/<?php echo $record->npm;?>"); ?>" method="post">
                <button type="submit" class="btn btn-primary" style="width: 100%;" onclick="return confirm('Lanjutkan ke Verifikasi?')">Continue</button>
            </form>
        </div>
    </div>
</div>