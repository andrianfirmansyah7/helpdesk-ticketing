<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Helpdesk | Birutekno Inc</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/morris/morris.css">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="<?php echo base_url()?>home" class="logo">
      <span class="logo-mini"><b>B</b></span>
      <span class="logo-lg"><b>Birutekno</b>Inc</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
	  <?php
		foreach ($gambar as $a){
	  ?>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<img src="<?php echo base_url()?>asset/gambar/<?php echo $a->gambar?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama');?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url()?>asset/gambar/<?php echo $a->gambar?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo $this->session->userdata('nama');?>
                  <small><?php echo $this->session->userdata('level');?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url()?>home/profile/<?php echo $this->session->userdata('id_user')?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url()?>login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <li>
		  <?php
		}
		  ?>
		  &nbsp;&nbsp;&nbsp;
          </li>
        </ul>
      </div>
    </nav>
	</header>