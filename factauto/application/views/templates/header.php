<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fact auto</title>
  
  <link rel="stylesheet" href="<?= base_url(); ?>vendor/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
  
  <link rel="stylesheet" href="<?= base_url(); ?>vendor/AdminLTE-3.0.5/dist/css/adminlte.min.css">
  
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">  

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?= base_url(); ?>vendor/AdminLTE-3.0.5/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Fact auto</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>vendor/AdminLTE-3.0.5/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php 
              if($this->session->has_userdata('username')){
                echo $this->session->userdata('username');
                echo " (".$this->session->userdata('role').")";
              }else{
                echo "Invitado";
              }
              
            ?>
          
          </a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php if($this->session->has_userdata('username')){ ?>
              <li class="nav-item">
                <a href="<?php echo site_url('encuesta/responder') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Responder Encuesta</p>
                </a>
              </li>
                  <?php if($this->session->userdata('role') == "admin"){ ?>
                    <li class="nav-item">
                      <a href="<?php echo site_url('encuesta/listado') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Listado de respuestas</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo site_url('encuesta/grafico') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                      </a>
                    </li>
                    <?php } ?>
              <li class="nav-item">              
                <a href="<?php echo site_url('login/cerrar_sesion') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cerrar sesion</p>
                </a>
              </li>

          <?php } ?>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Fact auto</h1>
          </div><!-- /.col -->          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">