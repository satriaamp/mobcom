<<<<<<< HEAD
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

        <div class="container" style="margin-top:13%;">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 well">
                    <h3><i class="fa fa-gear"></i> Change Password</h3>
                    <hr>
                    <?php echo form_open('mahasiswa/Change_Password/'.$npm);?>
                        <div class="form-group">
                            <label for="oldpass" class="form-control-label">Old Password</label>
                            <input type="password" class="form-control" id="oldpass" name="oldpass" value="<?php echo set_value('oldpass');?>">
                            <span class="text-danger"><?php echo form_error('oldpass');?></span>
                        </div>
                        <div class="form-group">
                            <label for="newpass" class="form-control-label">New Password</label>
                            <input type="password" class="form-control" id="newpass" name="newpass" value="<?php echo set_value('newpass');?>">
                            <span class="text-danger"><?php echo form_error('newpass');?></span>
                        </div>
                        <br>
                    <button type="submit" class="col-md-6 btn btn-primary" name="submit" value="Change"><i class="fa fa-lock"></i> Change Password</button>
                    <?php echo form_close();?>
                    <form role="form" action="/KRS/mahasiswa" method="post">
                        <button type="submit" class="col-md-6 btn btn-danger" name="cancel"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
                    </form>
                </div>
            </div>
=======
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

        <div class="container" style="margin-top:13%;">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 well">
                    <h3><i class="fa fa-gear"></i> Change Password</h3>
                    <hr>
                    <?php echo form_open('mahasiswa/Change_Password/'.$npm);?>
                        <div class="form-group">
                            <label for="oldpass" class="form-control-label">Old Password</label>
                            <input type="password" class="form-control" id="oldpass" name="oldpass" value="<?php echo set_value('oldpass');?>">
                            <span class="text-danger"><?php echo form_error('oldpass');?></span>
                        </div>
                        <div class="form-group">
                            <label for="newpass" class="form-control-label">New Password</label>
                            <input type="password" class="form-control" id="newpass" name="newpass" value="<?php echo set_value('newpass');?>">
                            <span class="text-danger"><?php echo form_error('newpass');?></span>
                        </div>
                        <br>
                    <button type="submit" class="col-md-6 btn btn-primary" name="submit" value="Change"><i class="fa fa-lock"></i> Change Password</button>
                    <?php echo form_close();?>
                    <form role="form" action="/KRS/mahasiswa" method="post">
                        <button type="submit" class="col-md-6 btn btn-danger" name="cancel"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
                    </form>
                </div>
            </div>
>>>>>>> 63ddceff6ca33b55de2b9c39b3565fb3cca56dd4
        </div>