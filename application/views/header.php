<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title;?></title>

        <link rel="icon" href="<?php echo base_url('/images/unpad.png'); ?>">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
		<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css');?>">
        <!-- <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.css"> -->
        <link rel="stylesheet" href="<?php echo base_url();?>css/main.css">
        <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css"> -->
        <link rel="stylesheet" href="<?php echo base_url();?>css/animate.css">

        <script src="<?php echo base_url();?>js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>js/main.js"></script>
    </head>
    <body>
        <div class="app-header cf">
            <?php if(isset($this->session->userdata['logged_in'])): ?>
                <div class="main-menu-btn"></div>
                <a href="<?php echo base_url('mahasiswa'); ?>" class="app-title">
                    <b><?php echo $this->session->userdata['status']; ?> | </b>
            <?php else: ?>
                <div class="logo-unpad"></div>
            <?php endif ?>
            <a href="<?php echo base_url('mahasiswa'); ?>" class="app-title">
                <b>| KRSAPP</b> Universitas Padjadjaran
            </a>
            <?php if(isset($this->session->userdata['logged_in'])): ?>
            <form role="form" action="<?php echo base_url().'logout'; ?>" method="post">
                <button type="submit" class="logout-btn" onclick="return confirm('Are you sure to sign out?')">Keluar dari KRS APP</button> 
            </form>
            <?php endif ?>
        </div>
        <div class="main-menu"> <!-- MAIN MENU -->
            <div class="main-menu-container">
              <li class="main-menu-list <?php if ($this->uri->segment(2) == '' ) echo "active" ?>">
                <a href="<?php echo base_url('admin');?>">Halaman Utama</a>
              </li>
              <li class="main-menu-list <?php if ($this->uri->segment(2) == 'Lihat-Mahasiswa') echo "active" ?>">
                <a href="<?php echo base_url('admin/Lihat-Mahasiswa'); ?>">Daftar Mahasiswa</a>
              </li>
              <li class="main-menu-list <?php if ($this->uri->segment(2) == 'Lihat-Dosen') echo "active" ?>">
                <a href="<?php echo base_url('admin/Lihat-Dosen'); ?>">Daftar Dosen</a>
              </li>
              <li class="main-menu-list <?php if ($this->uri->segment(2) == 'Lihat-Matkul') echo "active" ?>">
                <a href="<?php echo base_url('admin/Lihat-Matkul'); ?>">Kurikulum & Mata Kuliah</a>
              </li>
              <li class="main-menu-list">
                <a href="<?php echo base_url('logout'); ?>" onclick="return confirm('Are you sure to sign out?')">Keluar</a>
              </li>
            </div>
            <div class="smoke"></div>
        </div>
        <div class="white-smoke"></div>
        <div class="app-body">