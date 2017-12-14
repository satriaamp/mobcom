<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="mhs-container single-mid">
    <form role="form" action="/KRS/admin" method="post">
        <button type="submit"class="back-btn" name="back"></button>
    </form>
    <div class="container-title" id="single-mid">Tambah Mata Kuliah</div>
    <?php echo form_open('admin/Add_Matkul');?>
    <div class="form-group row">
        <label for="kd_matkul" class="col-md-4 form-control-label">Kode Mata Kuliah</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="kd_matkul" name="kd_matkul" placeholder="Kode Mata Kuliah" value="<?php echo set_value('kd_matkul');?>">
            <span class="text-danger"><?php echo form_error('kd_matkul');?></span>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama_matkul" class="col-md-4 form-control-label">Mata Kuliah</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" placeholder="Mata Kuliah" value="<?php echo set_value('nama_matkul');?>">
            <span class="text-danger"><?php echo form_error('nama_matkul');?></span>
        </div>
    </div>
    <div class="form-group row">
        <label for="semester" class="col-md-4 form-control-label">Semester</label>
        <div class="col-md-8">
            <input type="number" class="form-control" id="semester" name="semester" min="1" max="14" placeholder="Semester" value="<?php echo set_value('semester');?>">
            <span class="text-danger"><?php echo form_error('semester');?></span>
        </div>
    </div>
    <div class="form-group row">
        <label for="sks" class="col-md-4 form-control-label">SKS</label>
        <div class="col-md-8">
            <input type="number" class="form-control" id="sks" name="sks" min="1" placeholder="SKS" value="<?php echo set_value('sks');?>">
            <span class="text-danger"><?php echo form_error('sks');?></span>
        </div>
    </div>
    <div class="box-action-area">
        <button type="submit" class="submit-btn" name="submit" value="Add">Simpan</button>
    </div>
    <?php echo form_close();?>