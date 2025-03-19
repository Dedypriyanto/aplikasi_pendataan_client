<!doctype html>
<html>
    <head>
        <title>Data Client | Print</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
         <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h1>Data Client</h1>
        <table class="table table-bordered" style="margin-bottom: 10px">
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
            foreach ($cetak_data as $cetak)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $cetak->tanggal_kedatangan_jam ?></td>
            <td><?php echo $cetak->nama ?></td>
            <td><?php echo $cetak->tanggal_lahir ?></td>
            <td><?php echo $cetak->pendidikan_terakhir ?></td>
            <td><?php echo $cetak->kota_asal ?></td>
            <td><?php echo $cetak->no_hp ?></td>
            <td><?php echo $cetak->keperluan ?></td>
            <td><?php echo $cetak->program_yang_diambil ?></td>
            </td>
        </tr>
                <?php
            }
            ?>
        </table>
        </div>
        <div class="col-md-6 text-right">
                
            </div>
    </body>
    <script>
        window.print();
    </script>
</html>