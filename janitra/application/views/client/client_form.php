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
        <h2 style="margin-top:0px">Client <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">No <?php echo form_error('No') ?></label>
            <input type="text" class="form-control" name="No" id="No" placeholder="No" value="<?php echo $No; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Kedatangan <?php echo form_error('Kedatangan') ?></label>
            <input type="text" class="form-control" name="Kedatangan" id="Kedatangan" placeholder="Kedatangan" value="<?php echo $Kedatangan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('Nama') ?></label>
            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Lahir <?php echo form_error('Lahir') ?></label>
            <input type="text" class="form-control" name="Lahir" id="Lahir" placeholder="Lahir" value="<?php echo $Lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pendidikan <?php echo form_error('Pendidikan') ?></label>
            <input type="text" class="form-control" name="Pendidikan" id="Pendidikan" placeholder="Pendidikan" value="<?php echo $Pendidikan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kota <?php echo form_error('Kota') ?></label>
            <input type="text" class="form-control" name="Kota" id="Kota" placeholder="Kota" value="<?php echo $Kota; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Hp <?php echo form_error('No_Hp') ?></label>
            <input type="text" class="form-control" name="No_Hp" id="No_Hp" placeholder="No Hp" value="<?php echo $No_Hp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Keperluan <?php echo form_error('Keperluan') ?></label>
            <input type="text" class="form-control" name="Keperluan" id="Keperluan" placeholder="Keperluan" value="<?php echo $Keperluan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Program <?php echo form_error('Program') ?></label>
            <input type="text" class="form-control" name="Program" id="Program" placeholder="Program" value="<?php echo $Program; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Status <?php echo form_error('Status') ?></label>
            <input type="text" class="form-control" name="Status" id="Status" placeholder="Status" value="<?php echo $Status; ?>" />
        </div>
	    <input type="hidden" name="" value="<?php echo $; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('client') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>