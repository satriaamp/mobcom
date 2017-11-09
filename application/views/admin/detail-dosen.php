<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="mhs-container single-mid">
    <form role="form" action="/KRS/admin" method="post">
        <button type="submit"class="back-btn" name="back"></button>
    </form>
    <div class="container-title" id="single-mid">Detail Dosen</div>
    <table class="table table-striped table-hover">
        <tr>
            <th>NIDN</th>
            <td><?php echo $record[0]->nidn;?></td>
        </tr>
        <tr>
            <th>Nama Dosen</th>
            <td><?php echo $record[0]->nama_dosen;?></td>
        </tr>
        <!-- <tr>
            <th>Nama Mahasiswa Yang di Bimbing</th>
            <td><?php echo $record[0]->npm; ?> </td>
        </tr> -->
    </table>
     
</div>