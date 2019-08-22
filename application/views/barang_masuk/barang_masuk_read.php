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
     <?php foreach($masuk as $m){ ?>
        <h2 style="margin-top:0px">Barang_masuk Read</h2>
        <table class="table">
	    <tr><td>Kode Barang</td>
        <tr><td>
        <?php  
        foreach($all_barang as $b){
            if($m['id_barang'] == $b['id_barang']){
                echo $b['nama_barang'].' | '.$m['id_barang'];
            }
        }
            ?></td></tr>
        <tr><td>Tanggal</td><td><?php echo $m->tanggal; ?></td></tr>
	    <tr><td>Jumlah</td><td><?php echo $m->jumlah; ?></td></tr>
	    <tr><td>Harga</td><td><?php echo $m->harga; ?></td></tr>
        <tr><td>Kode Supplier</td><td><?php echo $->supplier; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('barang_masuk') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>