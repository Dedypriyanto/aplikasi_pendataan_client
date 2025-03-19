<!doctype html>
<html>
    <head>
        <title>Client Read| User</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <style>
              footer {
   position: container;
   bottom: 0;
   width: 100%;
}
            body{
                padding: 15px;
            }
        </style>
        <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/jan.png') ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/jan.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/quill/quill.snow.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/quill/quill.bubble.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/simple-datatables/style.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

    </head>
    <body>
        <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <div class="logo d-flex align-items-center">
        <img src="<?php echo base_url('assets/img/jan.png') ?>" alt="">
        <span class="d-none d-lg-block">JANITRA</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
  
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="http://localhost/janitra/u_home">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!--  Daftar Cllient Nav -->
         <li class="nav-item">
        <a class="nav-link " href="http://localhost/janitra/u_dat">
          <i class="bi bi-person-lines-fill"></i>
          <span>Daftar Client</span>
        </a>
      </li>
      <!--  pendaftaran -->
         <li class="nav-item">
        <a class="nav-link " href="http://localhost/janitra/u_dat/create">
          <i class="bi bi-person-plus-fill"></i>
          <span>Pendaftaran</span>
        </a>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Client Read </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">User</a></li>
          <li class="breadcrumb-item active">Read</li>
        </ol>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px"></h2>
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data</h5>
        <table class="table">
        <tr><td>Tanggal Kedatangan Jam</td><td><?php echo $tanggal_kedatangan_jam; ?></td></tr>
        <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
        <tr><td>Tanggal Lahir</td><td><?php echo $tanggal_lahir; ?></td></tr>
        <tr><td>Pendidikan Terakhir</td><td><?php echo $pendidikan_terakhir; ?></td></tr>
        <tr><td>Kota Asal</td><td><?php echo $kota_asal; ?></td></tr>
        <tr><td>No Hp</td><td><?php echo $no_hp; ?></td></tr>
        <tr><td>Keperluan</td><td><?php echo $keperluan; ?></td></tr>
        <tr><td>Program Yang Diambil</td><td><?php echo $program_yang_diambil; ?></td></tr>
    </table>
          <!-- ======= Footer ======= -->
    <div class="copyright">
      &copy; Copyright <strong><span>JANITRA</span></strong> 2023.
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/apexcharts/apexcharts.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/chart.js/chart.umd.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/echarts/echarts.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/quill/quill.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/simple-datatables/simple-datatables.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/tinymce/tinymce.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js')?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js')?>"></script>
    </body>
</html>