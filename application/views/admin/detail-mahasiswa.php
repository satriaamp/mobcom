<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="mhs-container single-mid">
    <form role="form" action="/KRS/admin" method="post">
        <button type="submit"class="back-btn" name="back"></button>
    </form>
    <div class="container-title" id="single-mid">Detail Mahasiswa</div>
    <table class="table table-striped table-hover">
        <tr>
            <th>NPM</th>
            <td><?php echo $record[0]->npm;?></td>
        </tr>
        <tr>
            <th>Nama Mahasiswa</th>
            <td><?php echo $record[0]->nama;?></td>
        </tr>
        <tr>
            <th>Semester</th>
            <td><?php echo $record[0]->semester;?></td>
        </tr>
        <tr>
            <th>SISA SKS</th>
            <td><?php echo $record[0]->sks;?></td>
        </tr>
         <tr>
            <th>Verifikasi Dosen</th>
            <td><?php echo $record[0]->verifikasi;?></td>
                
        </tr>
        
    </table>
    <div class="box-action-area cf">
        <form role="form" action="/KRS/admin/mahasiswa/<?php echo $record[0]->npm;?>/KKS" method="post">
            <button type="submit" class="proceed-btn" id="lihatkks">Lihat KKS</button>
        </form>
        <form role="form" action="/KRS/admin/mahasiswa/<?php echo $record[0]->npm;?>/KRS/<?php echo $record[0]->semester;?>" method="post">
            <button type="submit" class="proceed-btn"<?php echo $krs_detail;?>>Lihat KRS</button>
        </form>
    </div>
</div>
<form role="form" action="/KRS/admin/mahasiswa/<?php echo $record[0]->npm;?>/Edit" method="post">
    <button type="submit" class="edit-btn" name="edit"></button>
</form>