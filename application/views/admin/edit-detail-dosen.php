<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="mhs-container single-mid">
    <form role="form" action="/KRS/admin" method="post">
        <button type="submit"class="back-btn" name="back"></button>
    </form>
    <div class="container-title" id="single-mid">Ubah Data Dosen</div>
    <?php echo form_open('admin/Edit_Dosen/'.$record[0]->nidn);?>
        <div class="form-group row">
            <label for="nidn" class="col-md-4 form-control-label">NIDN</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="nidn" name="nidn" value="<?php echo $record[0]->nidn;?>" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-md-4 form-control-label">Nama</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="nama" name="nama_dosen" placeholder="<?php echo $record[0]->nama_dosen;?>" value="<?php echo set_value('nama');?>">
                <span class="text-danger"><?php echo form_error('nama_dosen');?></span>
            </div>
        </div>
        <!-- <div class="form-group row">
            <label for="npm" class="col-md-4 form-control-label">NPM</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="npm" name="npm" placeholder="<?php echo $record[0]->npm;?>" value="<?php echo set_value('npm');?>">
                <span class="text-danger"><?php echo form_error('npm');?></span>
            </div>
        </div> -->
        
        <div class="box-action-area cf">
            <button type="submit" class="submit-btn" name="edit" onclick="return confirm('Are you sure you want to edit this entry ?')" value="Update"><i class="fa fa-edit"></i> Edit</button>
        </div>
    <?php echo form_close();?>
</div>