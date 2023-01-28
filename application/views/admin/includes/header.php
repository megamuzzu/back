<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome <?php echo $name; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url()?>assets/admin/img/favicon.png" rel="icon">
  <link href="<?php echo base_url()?>assets/admin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url()?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/admin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/admin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/admin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/admin/vendor/simple-datatables/style.css" rel="stylesheet">  
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/jquery.dataTables.min.css" />

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url()?>assets/admin/css/style.css" rel="stylesheet">

</head>

<body class="toggle-sidebar">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url()?>admin" class="logo d-flex align-items-center">
        <img src="<?php echo base_url()?>assets/admin/img/logo.png" alt="">
        <span class="d-none d-lg-block">Hey, <?php echo $name; ?></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo base_url()?>assets/admin/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $name; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">

              <h6><?php echo $name; ?></h6>
              <span><?php echo $this->session->userdata('email'); ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> 

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url()?>admin/login/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url()?>admin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url()?>admin/lead">
          <i class="bi bi-table"></i>
          <span>Leads USA</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url()?>admin/leadaus">
          <i class="bi bi-table"></i>
          <span>Leads Aus</span>
        </a>
      </li>


      <?php if($this->session->userdata('role') == 1){ ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url()?>admin/users">
          <i class="bi bi-person"></i>
          <span>Admin</span>
        </a>
      </li>
      <?php }?>
    </ul>

  </aside><!-- End Sidebar-->