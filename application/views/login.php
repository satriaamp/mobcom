<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="login-container">
    <?php echo form_open('login', ['class' => 'login-form']);?>
        <div class="title">Sign in to KRSAPP</div>
        <div class="form-login">
            <div class="username-field">
                <div class="label">Email</div>
                <input type="text" id="username" name="username" placeholder="Your email address">
            </div>
            <div class="pass-field">
                <div class="label">Password</div>
                <input type="password" id="password" name="password" placeholder="Password at least 6 characters">
            </div>
            <button type="submit" class="btn-login" name="login" value="Log In">Sign In</button>
        </div>
        <a href="#" class="forgot">Forgot your password? Contact us!</a>
    <?php echo form_close();?>
    <div class="copyright">&copy; Satria, Ilyas, Raka, S1 Teknik Informatika UNPAD, MOBCOM 2017</div>
    </div>
    <div class="faculty-image">
        <span>This page was loaded in <strong>{elapsed_time}</strong> second(s)</span>
    </div>
</div>