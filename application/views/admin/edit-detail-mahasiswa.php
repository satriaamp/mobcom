<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="mhs-container single-mid">
    <form role="form" action="/KRS/admin" method="post">
        <button type="submit"class="back-btn" name="back"></button>
    </form>
    <div class="container-title" id="single-mid">Ubah Data Mahasiswa</div>
    <?php echo form_open('admin/Edit_Mahasiswa/'.$record[0]->npm);?>
        <div class="form-group row">
            <label for="npm" class="col-md-4 form-control-label">NPM</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="npm" name="npm" value="<?php echo $record[0]->npm;?>" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-md-4 form-control-label">Nama</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="<?php echo $record[0]->nama;?>" value="<?php echo set_value('nama');?>">
                <span class="text-danger"><?php echo form_error('nama');?></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="semester" class="col-md-4 form-control-label">Semester</label>
            <div class="col-md-8">
                <input type="number" class="form-control" id="semester" name="semester" min="1" max="8" placeholder="<?php echo $record[0]->semester;?>" value="<?php echo set_value('semester');?>">
                <span class="text-danger"><?php echo form_error('semester');?></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="sks" class="col-md-4 form-control-label">SKS</label>
            <div class="col-md-8">
                <input type="number" class="form-control" id="sks" name="sks" min="18" max="24" placeholder="<?php echo $record[0]->sks;?>" value="<?php echo set_value('sks');?>">
                <span class="text-danger"><?php echo form_error('sks');?></span>
            </div>
        </div>
        

        <div class="box-action-area cf">
            <button type="submit" class="submit-btn" name="edit" onclick="return confirm('Are you sure you want to edit this entry ?')" value="Update"><i class="fa fa-edit"></i> Edit</button>
        </div>
    <?php echo form_close();?>
</div>