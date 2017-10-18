<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="mhs-container medium-mid">
    <div class="container-title" id="single-mid">Kartu Kemajuan Studi</div>
    <form role="form" action="/KRS/mahasiswa/" method="post">
        <button type="submit" class="back-btn" name="back"></button>
    </form>
    <?php
        $h = 0;
        foreach($terms as $term){
    ?>
    <h3><?php echo $term;?></h3>
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
                foreach($records[$h] as $krs){
            ?>
            <tr class="odd gradeX">
                <td class="text-center" style="vertical-align:middle;"><?php echo $i;?></td>
                <td class="text-center" style="vertical-align:middle;"><?php echo $krs->kd_matkul;?></td>
                <td style="vertical-align:middle;"><?php echo $krs->nama_matkul;?></td>
                <td class="text-center" style="vertical-align:middle;"><?php echo $krs->semester;?></td>			
                <td class="text-center" style="vertical-align:middle;"><?php echo $krs->sks;?></td>
            </tr>
            <?php
                    $i++;
                }
            ?>
        </tbody>
    </table>
    <?php
            $h++;
        }
    ?>
</div>