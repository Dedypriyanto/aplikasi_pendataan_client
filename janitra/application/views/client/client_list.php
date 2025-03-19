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
        <h2 style="margin-top:0px">Client List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('client/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('client/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('client'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
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
		<th>Action</th>
            </tr><?php
            foreach ($client_data as $client)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
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
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('client/read/'.$client->),'Read'); 
				echo ' | '; 
				echo anchor(site_url('client/update/'.$client->),'Update'); 
				echo ' | '; 
				echo anchor(site_url('client/delete/'.$client->),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
		<?php echo anchor(site_url('client/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('client/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>