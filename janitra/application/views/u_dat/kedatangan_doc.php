<!doctype html>
<html>
    <head>
        <title>Doc | User</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Kedatangan List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Tanggal Kedatangan Jam</th>
		<th>Nama</th>
		<th>Tanggal Lahir</th>
		<th>Pendidikan Terakhir</th>
		<th>Kota Asal</th>
		<th>No Hp</th>
		<th>Keperluan</th>
		<th>Program Yang Diambil</th>
		
            </tr><?php
            foreach ($u_dat_data as $u_dat)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $u_dat->tanggal_kedatangan_jam ?></td>
		      <td><?php echo $u_dat->nama ?></td>
		      <td><?php echo $u_dat->tanggal_lahir ?></td>
		      <td><?php echo $u_dat->pendidikan_terakhir ?></td>
		      <td><?php echo $u_dat->kota_asal ?></td>
		      <td><?php echo $u_dat->no_hp ?></td>
		      <td><?php echo $u_dat->keperluan ?></td>
		      <td><?php echo $u_dat->program_yang_diambil ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>