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
     <?php foreach($keluar as $k){ ?>
        <h2 style="margin-top:0px">Barang_keluar Read</h2>
        <table class="table">
	    <tr><td>Kode Barang</td><td><?php echo $kode_barang; ?></td></tr>
        <tr><td>
        <?php  
        foreach($all_barang as $b){
            if($k['id_barang'] == $b['id_barang']){
                echo $b['nama_barang'].' | '.$k['id_barang'];
            }
        }
            ?></td></tr>
	    <tr><td>Tgl Keluar</td><td><?php echo $tanggal; ?></td></tr>
	    <tr><td>Jumlah</td><td><?php echo $jumlah; ?></td></tr>
        <tr><td>Pegawai</td><td><?php echo $pegawai; ?></td></tr>
        <tr><td>Bidang</td><td><?php echo $bidang; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('barang_keluar') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>