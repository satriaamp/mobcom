<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<form role="form" action="/KRS/mahasiswa" method="post">
    <button type="submit" class="back-btn" name="back"></button>
</form>
<div class="page-title">PENGISIAN KARTU RENCANA STUDI</div>
<div class="mhs-container krs">
    <div class="container-title" id="single-mid">Mata Kuliah yang Diambil</div>
    <h4>Sisa SKS: <?php echo $sisa_sks;?></h4>
    <table class="table table-striped table-hover">
        <thead>                                                                                                                                
            <tr>                                                                                                                                  
                <th class="text-center" style="vertical-align:middle;">NO</th>
                <th class="text-center" style="vertical-align:middle;">KODE</th>
                <th class="text-center" style="vertical-align:middle;">MATA KULIAH</th>
                <th class="text-center" style="vertical-align:middle;">SEMESTER</th>
                <th class="text-center" style="vertical-align:middle;">SKS</th>
                <th class="text-center" style="vertical-align:middle;"></th>
            </tr>                                                                                                                                 
        </thead>                                                                                                                                
        <tbody>
            <?php
                $no = 1;
                foreach($krs as $rec){
            ?>

            <tr class="odd gradeX">
                <td class="text-center" style="vertical-align:middle;"><?php echo $no;?></td>
                <td class="text-center" style="vertical-align:middle;"><?php echo $rec->kd_matkul;?></td>
                <td style="vertical-align:middle;"><?php echo $rec->nama_matkul;?></td>
                <td class="text-center" style="vertical-align:middle;"><?php echo $rec->semester;?></td>            
                <td class="text-center" style="vertical-align:middle;"><?php echo $rec->sks;?></td>
                <td class="text-center" style="vertical-align:middle;">
                    <form role="form" action="/KRS/mahasiswa/<?php echo $npm.'/Delete-From-KRS/'.$rec->kd_matkul;?>/" method="post">
                        <button type="submit" class="btn btn-danger" name="remove" onclick="return confirm('Are you sure you want to delete this entry ?')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php
                $no++;
                }
            ?>
        </tbody>
    </table>
    <form role="form" action="/KRS/mahasiswa/<?php echo $npm;?>/KRS/<?php echo $semester;?>" method="post">
        <button type="submit" class="finish-btn" name="finish">Simpan</button>
    </form>
</div>
<div class="mhs-container matkul">
    <div class="container-title" id="single-mid">Mata Kuliah Yang Tersedia</div>
    <table class="table table-striped table-hover">
        <thead>                                                                                                                                
            <tr>                                                                                                                                  
                <th class="text-center" style="vertical-align:middle;">NO</th>
                <th class="text-center" style="vertical-align:middle;">KODE</th>
                <th class="text-center" style="vertical-align:middle;">MATA KULIAH</th>
                <th class="text-center" style="vertical-align:middle;">SEMESTER</th>
                <th class="text-center" style="vertical-align:middle;">SKS</th>
                <th class="text-center" style="vertical-align:middle;"></th>
            </tr>                                                                                                                                 
        </thead>                                                                                                                                
        <tbody>
            <?php
                $no = 1;
                foreach($kurikulum as $rec){
            ?>
            <tr class="odd gradeX">
                <td class="text-center" style="vertical-align:middle;"><?php echo $no;?></td>
                <td class="text-center" style="vertical-align:middle;"><?php echo $rec->kd_matkul;?></td>
                <td style="vertical-align:middle;"><?php echo $rec->nama_matkul;?></td>
                <td class="text-center" style="vertical-align:middle;"><?php echo $rec->semester;?></td>			
                <td class="text-center" style="vertical-align:middle;"><?php echo $rec->sks;?></td>
                <td class="text-center" style="vertical-align:middle;">
                    <form role="form" action="/KRS/mahasiswa/<?php echo $npm.'/Add-Into-KRS/'.$rec->kd_matkul;?>" method="post">
                        <button type="submit" class="primary-btn" name="insert" id="ambil-matkul">Ambil</button>
                    </form>
                </td>
            </tr>

            <?php
                    $no++;
                }
            ?>
        </tbody>
    </table>
</div>