<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
<div class="row">
<div class="col-md-4">
        <a href="barang_masuk/create" class="btn btn-primary">Tambah</a>
        <!-- <a href="app/export_penjualan" target="_blank" class="btn btn-primary">Export</a> -->
    </div>
    <div class="col-md-4"></div>
     <div class="col-md-4"></div><br><br><br>
     <div class="col-md-12">
        <table class="table table-bordered" style="margin-bottom: 10px" id="selector">
            <tr>
                     </table>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Invoice</th>
                <th>Kode Barang | Nama Barang</th>
                <th>Merk</th>
        <th>Tanggal</th>
        <th>Jumlah</th>
        <th>Satuan</th>
        <th>Harga</th>
        <th>Supplier</th>
        <th>Action</th>
            </tr>
        </thead>
        <tbody><?php
            foreach ($all_masuk as $masuk)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $masuk['invoice'] ?></td>
            <td><?php foreach($all_barang as $a){
                if($masuk['id_barang'] == $a['id_barang']){
                    echo $a['kode_barang'].' | '.$a['nama_barang'];
                }
                }  ?></td>
            <td><?php foreach($all_merk as $b){
                if($masuk['id_merk'] == $b['id_merk']){
                    echo $b['merk_barang'];
                }
                }  ?></td>
            <td><?php echo $masuk['tanggal'] ?></td>
            <td><?php echo $masuk['jumlah'] ?></td>
            <td><?php foreach($all_satuan as $c){
                if($masuk['id_satuan'] == $c['id_satuan']){
                    echo $c['satuan_barang'];
                }
                }  ?></td>
            <td><?php echo $masuk['harga'] ?></td>
            <td><?php echo $masuk['supplier'] ?></td>
            <td style="text-align:center" width="200px">
                <?php  
                echo anchor(site_url('barang_masuk/edit/'.$masuk['id_barang_masuk']),'Update'); 
                echo ' | '; 
                echo anchor(site_url('barang_masuk/delete/'.$masuk['id_barang_masuk']),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td>
        </tr>
                <?php
            }
            ?>
        </tbody>
        </table>
    </div>
</div>
    <!--     <a href="barang_masuk/cetak/<?php echo $barang_masuk->id_barang_masuk ?>" target="_blank" class="btn btn-success">cetak</a> -->
   
        <script type="text/javascript">
       $(document).ready(function() {
          $('#example').dataTable( {
              "searching": true
          } );
        } );
</script>