<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
<div class="row">
   <!--  <div class="col-md-4">
        <a href="app/tambah_penjualan" class="btn btn-primary">Tambah Transaksi</a>
        <!-- <a href="app/export_penjualan" target="_blank" class="btn btn-primary">Export</a> -->
        <div class="col-md-4">
                <?php echo anchor(site_url('barang_aset/create'),'Tambah Aset', 'class="btn btn-primary"'); ?>
                <?php echo anchor(site_url('barang_aset_sub/create'),'Tambah Detail Aset', 'class="btn btn-info"'); ?>
            </div>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-12">
        <table class="table table-bordered" style="margin-bottom: 10px" id="example">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Aset</th>
                    <th>Nama Aset</th>
                
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = $this->db->query("SELECT * FROM barang_aset order by id_aset");
                    $no = 1;
                foreach ($sql->result() as $row) {
                 ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->kode_aset; ?></td>
                    
                    <td><?php echo $row->nama_aset; ?></td>

                    <td>
                        <a href="barang_aset_download/detail/<?php echo $row->id_aset ?>" class="btn btn-info btn-sm">detail</a>
                       <a href="barang_aset/update/<?php echo $row->id_aset ?>" class="btn btn-warning btn-sm">edit</a>
                         <!-- <a href="barang_aset_download/cetak/<?php echo $row->kode_aset ?>" target="_blank" class="btn btn-success btn-sm">cetak</a> -->
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
     <!--    <div class="row">
            <div class="col-md-6">
               
                <a href="barang_masuk/cetak/<?php echo $barang_masuk->id_barang_masuk ?>" target="_blank" class="btn btn-success">cetak</a>
        </div>
  
        </div> -->
    </div>
</div>
        <script type="text/javascript">
       $(document).ready(function() {
          $('#example').dataTable( {
              "searching": true
          } );
        } );
</script>