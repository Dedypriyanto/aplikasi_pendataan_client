<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Client Read</h2>
        <table class="table">
	    <tr><td>No</td><td><?php echo $No; ?></td></tr>
	    <tr><td>Kedatangan</td><td><?php echo $Kedatangan; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $Nama; ?></td></tr>
	    <tr><td>Lahir</td><td><?php echo $Lahir; ?></td></tr>
	    <tr><td>Pendidikan</td><td><?php echo $Pendidikan; ?></td></tr>
	    <tr><td>Kota</td><td><?php echo $Kota; ?></td></tr>
	    <tr><td>No Hp</td><td><?php echo $No_Hp; ?></td></tr>
	    <tr><td>Keperluan</td><td><?php echo $Keperluan; ?></td></tr>
	    <tr><td>Program</td><td><?php echo $Program; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $Status; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('client') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>