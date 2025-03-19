<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard | Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link href="assets/img/jan.png" rel="icon">
  <link href="assets/img/jan.png" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
   <link href="assets/css/card.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

  <style>

    footer {
   position: container;
   bottom: 0;
   width: 100%;
}
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="http://localhost/janitra/a_home" class="logo d-flex align-items-center">
        <img src="assets/img/jan.png" alt="">
        <span class="d-none d-lg-block">JANITRA</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
       <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/admin.jpg" alt="Profile" class="rounded-circle">
            <?php echo $this->session->userdata('nama') ?></br>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
                  Username : <?php echo $this->session->userdata('username') ?></br>
                   Email    : <?php echo $this->session->userdata('email') ?></br>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>           
            <li>
              <a class="dropdown-item d-flex align-items-center" href="http://localhost/janitra">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="a_home">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!--  Daftar Cllient Nav -->
         <li class="nav-item">
        <a class="nav-link " href="http://localhost/janitra/a_dat">
          <i class="bi bi-person-lines-fill"></i>
          <span>Daftar Client</span>
        </a>
        <!--  pendaftaran -->
         <li class="nav-item">
        <a class="nav-link " href="http://localhost/janitra/a_dat/create.html">
          <i class="bi bi-person-plus-fill"></i>
          <span>Pendaftaran</span>
        </a>
      </li>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-20">
          <div class="row">

            <!-- Daftar Card -->
             <div class="card">
            <div class="card-body">
                <h5 class="card-title"></h5>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-red">
                <div class="inner">
                    <h3>Selamat Datang</h3>
                     <?php echo $this->session->userdata('nama') ?></br>
                </div>
                <div class="icon">
                    <i class="bi bi-person-fill-gear"></i>
                </div>
                <a href="http://localhost/janitra/a_home" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-blue">
                <div class="inner">
                    <h3>Dashboard</h3>
                <br/>
                </div>
                <div class="icon">
                    <i class="bi bi-grid" aria-hidden="true"></i>
                </div>
                <a href="http://localhost/janitra/a_home" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-green">
                <div class="inner">
                    <h3>Daftar Client</h3>
                    <?php echo $total_rows ?>
                    <br/>
                </div>
                <div class="icon">
                    <i class="bi bi-person-lines-fill "aria-hidden="true"></i>
                </div>
                <a href="http://localhost/janitra/a_dat" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-orange">
                <div class="inner">
                    <h3>Pendaftaran</h3>
                    <br/>
                </div>
                <div class="icon">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </div>
                <a href="http://pendaftaran.dedypriyanto.my.id/a_dat/create.html" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        </div>
    </div>
    <!-- DAftar Card -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>JANITRA</span></strong> 2023.
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>