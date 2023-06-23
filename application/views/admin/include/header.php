<?php foreach($key as $data){} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bindas इंडिया  न्यूज़</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>plugins/summernote/summernote-bs4.min.css">
  <link rel="icon" href="<?php echo base_url('upload/frontend/logo2.png') ?>" type="image/icon type">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url()."admin"; ?>" class="nav-link">Home</a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url()."admin"; ?>" class="brand-link">
      <img src="<?php echo base_url()."upload/admin/";?><?php echo $data['panel_logo'];?>" alt="Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $data['panel_name'];?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()."upload/admin/";?><?php echo $data['admin_image'];?>" class="img-circle elevation-" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url()."admin/admin_profile"; ?>" class="d-block"><?php echo $data['name'];?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="<?php echo base_url()."admin"; ?>" class="nav-link active">
                  <i class="fas fa-tachometer-alt"></i>
                  <p> Dashboard </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-arrows-alt text-danger"></i>
                  <p>
                    CATEGORIES
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()."add_category"; ?>" class="nav-link">
                      <i class="far fa-plus-square nav-icon"></i>
                      <p>Add Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url()."view_category"; ?>" class="nav-link">
                      <i class="fas fa-eye nav-icon"></i>
                      <p>View items</p>
                    </a>
                  </li>
                  </li>     
                </ul>
                <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-asterisk text-danger"></i>
                  <p>
                    SUB CATEGORIES
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()."add_subcategory"; ?>" class="nav-link">
                      <i class="far fa-plus-square nav-icon"></i>
                      <p>Add items</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url()."view_subcategory"; ?>" class="nav-link">
                      <i class="fas fa-eye nav-icon"></i>
                      <p>View items</p>
                    </a>
                  </li>
                  </li>     
                </ul>

                <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-asterisk text-danger"></i>
                  <p>
                    VIDEOS
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()."add_videos"; ?>" class="nav-link">
                      <i class="far fa-plus-square nav-icon"></i>
                      <p>Add videos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url()."view_videos"; ?>" class="nav-link">
                      <i class="fas fa-eye nav-icon"></i>
                      <p>View videos</p>
                    </a>
                  </li>
                  </li>     
                </ul>
          
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cog text-danger"></i>
                <p>
                  SETTINGS
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url()."admin/admin_profile"; ?>" class="nav-link">
                     <i class="fas fa-user nav-icon"></i>
                    <p>Admin Profile</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url()."admin/change_password"; ?>" class="nav-link">
                    <i class="fas fa-lock nav-icon"></i>
                    <p>Change Password</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url()."admin/logout"; ?>" class="nav-link">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>Logout</p>
                  </a>
                </li>
              </ul>
            </li>
            
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  

