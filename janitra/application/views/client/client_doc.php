<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
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
        <h2>Client List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>No</th>
		<th>Kedatangan</th>
		<th>Nama</th>
		<th>Lahir</th>
		<th>Pendidikan</th>
		<th>Kota</th>
		<th>No Hp</th>
		<th>Keperluan</th>
		<th>Program</th>
		<th>Status</th>
		
            </tr><?php
            foreach ($client_data as $client)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $client->No ?></td>
		      <td><?php echo $client->Kedatangan ?></td>
		      <td><?php echo $client->Nama ?></td>
		      <td><?php echo $client->Lahir ?></td>
		      <td><?php echo $client->Pendidikan ?></td>
		      <td><?php echo $client->Kota ?></td>
		      <td><?php echo $client->No_Hp ?></td>
		      <td><?php echo $client->Keperluan ?></td>
		      <td><?php echo $client->Program ?></td>
		      <td><?php echo $client->Status ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>