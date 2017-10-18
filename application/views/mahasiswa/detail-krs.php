<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="mhs-container medium-mid">
    <form role="form" action="/KRS/mahasiswa" method="post">
        <button type="submit"class="back-btn" name="back"></button>
    </form>
    <div class="container-title" id="single-mid">Kartu Rencana Studi</div>
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

    <h4>Sisa SKS: <?php echo $sisa_sks;?></h4>
</div>
<form role="form" action="/KRS/mahasiswa/<?php echo $npm;?>/Isi-Dan-Edit-KRS/<?php echo $semester;?>">
    <button type="submit" class="edit-btn" name="pkrs"></button>
</form>