<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
<div class="row">
<div class="col-md-4">
        <a href="barang_keluar/create" class="btn btn-primary">Tambah</a>
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
        <th>Kode Barang | Nama Barang</th>
        <th>Merk</th>
        <th>Tanggal Keluar</th>
        <th>Jumlah</th>
        <th>Satuan</th>
        <th>Pegawai</th>
        <th>NIP</th>
        <th>Bidang</th>
        <th>Action</th>
            </tr>
        </thead>
        <tbody><?php
            foreach ($all_keluar as $keluar)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php foreach($all_barang as $a){
                if($keluar['id_barang'] == $a['id_barang']){
                    echo $keluar['kode_barang'].' | '.['nama_barang'];
                }
                }  ?></td>
            <td><?php foreach($all_merk as $b){
                if($keluar['id_merk'] == $b['id_merk']){
                    echo $keluar['merk_barang'];
                }
                }  ?></td>
            <td><?php echo $pinjam['tanggal'] ?></td>
            <td><?php echo $pinjam['jumlah'] ?></td>
            <td><?php foreach($all_satuan as $c){
                if($keluar['id_satuan'] == $c['id_satuan']){
                    echo $keluar['satuan_barang'];
                }
                }  ?></td>
            <td><?php echo $pinjam['pegawai'] ?></td>
            <td><?php echo $pinjam['nip'] ?></td>
            <td><?php echo $pinjam['bidang'] ?></td>
            <td style="text-align:center" width="200px">
                <?php 
                echo anchor(site_url('barang_keluar/update/'.$barang_keluar['id_barang_keluar']),'Update'); 
                echo ' | '; 
                echo anchor(site_url('barang_keluar/delete/'.$barang_keluar['id_barang_keluar']),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
        <script type="text/javascript">
       $(document).ready(function() {
          $('#example').dataTable( {
              "searching": true
          } );
        } );
</script>
<!-- <a href="barang_keluar/cetak/<?php echo $barang_keluar->id_barang_keluar ?>" target="_blank" class="btn btn-success">cetak</a> -->