<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Daftar Client | User</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
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
      <h1>Daftar Client </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="u_home">User</a></li>
          <li class="breadcrumb-item active">Daftar Client</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('u_dat/create'),'Tambah', 'class="btn btn-primary"'); ?>
            </div>

            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            
            <div class="col-md-3 text-right">

                <form action="<?php echo site_url('u_dat'); ?>" class="form-inline" method="get">
                    <div class="input-group"> 
                        <input type="text" class="form-control" placeholder="Search" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn"> 
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('u_dat'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                       
                        </span>
                     
                    </div>
                </form>
            </div>
        </div>
         <div class="card">
            <div class="card-body">
              <h1 class="card-title">Table</h1>
        <div class="table-responsive">
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Tanggal Kedatangan Jam</th>
		<th>Nama</th>
		<th>Nama</th>
		<th>Pendidikan Terakhir</th>
		<th>Kota Asal</th>
		<th>No Hp</th>
		<th>Keperluan</th>
		<th>Program Yang Diambil</th>
		<th>Action</th>
            </tr><?php
            foreach ($u_dat_data as $u_dat)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $u_dat->tanggal_kedatangan_jam ?></td>
			<td><?php echo $u_dat->nama ?></td>
			<td><?php echo $u_dat->tanggal_lahir ?></td>
			<td><?php echo $u_dat->pendidikan_terakhir ?></td>
			<td><?php echo $u_dat->kota_asal ?></td>
			<td><?php echo $u_dat->no_hp ?></td>
			<td><?php echo $u_dat->keperluan ?></td>
			<td><?php echo $u_dat->program_yang_diambil ?></td>
			<td style="text-align:center" width="200px">
				<?php 
        echo anchor(site_url('u_dat/read/'.$u_dat->no),'Read', 'class="btn btn-info"'); 
        echo ''; 
        ?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
                	 <?php echo anchor(site_url('cetak'),'Print', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
        </div>
        </div>
        </div>
      <br//>
    
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

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js')?>"></script>
    </body>
</html>