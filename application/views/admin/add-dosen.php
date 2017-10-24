<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="mhs-container single-mid">
    <form role="form" action="/KRS/admin" method="post">
        <button type="submit"class="back-btn" name="back"></button>
    </form> <!-- back to home -->
    <div class="container-title" id="single-mid">Tambah Data Dosen</div>
    <?php echo form_open('admin/Add_Dosen');?>
    <div class="form-group row">
        <label for="nidn" class="col-md-4 form-control-label">NIDN</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nidn" name="nidn" placeholder="NIDN" value="<?php echo set_value('nidn');?>">
            <span class="text-danger"><?php echo form_error('nidn');?></span>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-md-4 form-control-label">Nama Dosen</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Dosen" value="<?php echo set_value('nama');?>">
            <span class="text-danger"><?php echo form_error('nama');?></span>
        </div>
    </div>
    <div class="box-action-area">
        <button type="submit" class="submit-btn" name="submit" value="Add">Simpan</button>
    </div>
    <?php echo form_close();?>
</div>