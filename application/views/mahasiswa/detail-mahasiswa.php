<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="mhs-container medium-mid">
    <form role="form" action="/KRS/mahasiswa/<?php echo $record[0]->npm;?>/Change-Password" method="post">
        <button type="submit" class="detail-btn" id="gantipass"></button>
    </form>
    <div class="container-title" id="single-mid">KARTU AKADEMIK</div>
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
            <td><?php 
                echo $record[0]->verifikasi;
                ;?></td>
                
        </tr>
        
    </table>

    <div class="box-action-area cf">
        <form role="form" action="/KRS/mahasiswa/<?php echo $record[0]->npm;?>/KKS" method="post">
            <button type="submit" class="proceed-btn" name="kks" id="lihatkks">Lihat KKS</button>
        </form>
        <form role="form" action="/KRS/mahasiswa/<?php echo $record[0]->npm;?>/Isi-Dan-Edit-KRS/<?php echo $record[0]->semester;?>" method="post">
            <button type="submit" class="primary-btn" name="isi"<?php echo $isi_krs;?>>Pengisian KRS</button>
        </form>
        <form role="form" action="/KRS/mahasiswa/<?php echo $record[0]->npm;?>/KRS/<?php echo $record[0]->semester;?>" method="post">
            <button type="submit" class="proceed-btn" name="krs" id="lihatkrs"<?php echo $krs_detail;?>>Lihat KRS</button>
        </form>
    </div>
</div>
<form role="form" action="/KRS/mahasiswa/<?php echo $record[0]->npm;?>/Isi-Dan-Edit-KRS/<?php echo $record[0]->semester;?>" method="post">
    <button type="submit" class="edit-btn" name="edit"></button>
</form>