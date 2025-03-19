<!doctype html>
<html>
    <head>
        <title>Registrasi Online | User </title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
          <link rel="stylesheet" href="<?php echo base_url('assets/date/jquery.datetimepicker.min.css') ?>"/>
          <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
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
 <link href="<?php echo base_url('assets/jquery/jquery.datetimepicker.min.css') ?>">
    </head>
    <body>
        <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="http://pendaftaran.dedypriyanto.my.id/u_home" class="logo d-flex align-items-center">
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
        <a class="nav-link " href="http://localhost/janitra/u_dat">
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
        <a class="nav-link " href="http://localhost/janitra/u_dat/create.html">
          <i class="bi bi-person-plus-fill"></i>
          <span>Pendaftaran</span>
        </a>
      </li>
  </aside>
  <!-- End Sidebar-->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Pendaftaran </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="u_home">User</a></li>
          <li class="breadcrumb-item active">Pendaftaran</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<!---Menu Dafrat-->
 <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daftar</h5>
        <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="datetime">Tanggal Kedatangan Jam <?php echo form_error('tanggal_kedatangan_jam') ?></label>
            <input type="text" class="form-control" name="tanggal_kedatangan_jam" id="tanggal_kedatangan_jam" placeholder="Silahkan isi Tanggal Kedatangan dan jam sesaui dengan pendaftaran anda" value="<?php echo $tanggal_kedatangan_jam;?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Silahkan isi nama anda dengan benar" value="<?php echo $nama; ?>" />
        </div>
        <div class="form-group">
            <label for="date">Tanggal Lahir <?php echo form_error('tanggal_lahir') ?></label>
            <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Silahkan isi Tanggal lahir anda" value="<?php echo $tanggal_lahir; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Pendidikan Terakhir <?php echo form_error('pendidikan_terakhir') ?></label>
            <input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="Silahkan isi Pendidikan terakhir anda" value="<?php echo $pendidikan_terakhir; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Kota Asal <?php echo form_error('kota_asal') ?></label>
            <input type="text" class="form-control" name="kota_asal" id="kota_asal" placeholder="Silahkan isi kota asal anda dengan tepat" value="<?php echo $kota_asal; ?>" />
        </div>
        <div class="form-group">
            <label for="int">No Hp <?php echo form_error('no_hp') ?></label>
            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Silahkan isi no hp anda dengan benar" value="<?php echo $no_hp; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Keperluan <?php echo form_error('keperluan') ?></label>
            <input type="text" class="form-control" name="keperluan" id="keperluan" placeholder="Jika ambil ikatan dinas  ikatan dinas apa..." value="<?php echo $keperluan; ?>" />
        </div>
        <div class="form-group">
           <label for="varchar">Keperluan <?php echo form_error('keperluan') ?></label>
            <br/>
            <input type="checkbox" id="keperluan" name="keperluan" value="Umum"> Umum<br/>
            <input type="checkbox" id="keperluan" name="keperluan" value="Akpol"> Akpol<br/>
            <input type="checkbox" id="keperluan" name="keperluan" value="Bintara"> Bintara<br/>
            <input type="checkbox" id="keperluan" name="keperluan" value="Tamtama"> Tamtama<br/>
            <input type="checkbox" id="keperluan" name="keperluan" value="SIPSS"> SIPSS<br/>
            <input type="checkbox" id="keperluan" name="keperluan" value="Sespim"> Sespim<br/>
            <input type="checkbox" id="keperluan" name="keperluan" value="SIP"> SIP<br/>
            <input type="checkbox" id="keperluan" name="keperluan" value="PAG"> PAG<br/>
            <input type="checkbox" id="keperluan" name="keperluan" value="Ikatan Dinas"> Ikatan Dinas<br/>

          
            
        </div>
        <div class="form-group">
           <label for="varchar">Program Yang Diambil <?php echo form_error('program_yang_diambil') ?></label>
           <br/>
            <input type="checkbox" id="program_yang_diambil" name="program_yang_diambil" value="Konsultasi PSI"> Konsultasi PSI<br/>
            <input type="checkbox" id="program_yang_diambil" name="program_yang_diambil" value="Bimbingaan PSI"> Bimbingan PSI<br/>
            <input type="checkbox" id="program_yang_diambil" name="program_yang_diambil" value="Bimbingan Akademik"> Bimbingan Akademik<br/>
            <input type="checkbox" id="program_yang_diambil" name="program_yang_diambil" value="SAD"> SAD<br/>
            <input type="checkbox" id="program_yang_diambil" name="program_yang_diambil" value="TPA"> TPA<br/>
            <input type="checkbox" id="program_yang_diambil" name="program_yang_diambil" value="Tes CAT Akademik"> Tes CAT Akademik<br/>
            <input type="checkbox" id="program_yang_diambil" name="program_yang_diambil" value="Tes Masuk Sekolah"> Tes Masuk Sekolah<br/>
            <input type="checkbox" id="program_yang_diambil" name="program_yang_diambil" value="Tes Driver"> Tes Driver<br/>
            <input type="checkbox" id="program_yang_diambil" name="program_yang_diambil" value="Tes Bakat Minat"> Tes Bakat Minat<br/>
      </div>
        <br/>
        <input type="hidden" name="no" value="<?php echo $no; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('u_home') ?>" class="btn btn-danger">Cancel</a>
    </form>

        </div>
        <br//>
    <!---end Menu daftar-->
        <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
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


  

  <script src="<?php echo base_url('assets/date/jquery.js')?>"></script>
  <script src="<?php echo base_url('assets/date/jquery.datetimepicker.full.min.js')?>"></script>
  <script>
$( "#tanggal_kedatangan_jam" ).datetimepicker({
      step: 1
    });
 $( "#tanggal_lahir" ).datetimepicker({
     
    });
  
    


   
  </script>
  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js')?>"></script>
    </body>
</html>