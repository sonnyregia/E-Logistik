<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
<div class="row">
<div class="col-md-4">
        <a href="barang/create" class="btn btn-primary">Tambah</a>
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
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Action</th>
            </tr>
        </thead>
        <tbody>
             </tr><?php
            foreach ($all_barang as $barang)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $barang['kode_barang'] ?></td>
            <td><?php echo $barang['nama_barang'] ?></td>
            <td><?php echo $barang['stok'] ?></td>
            <td style="text-align:center" width="200px">
                <?php 
                echo anchor(site_url('barang/edit/'.$barang->id_barang),'Update'); 
                echo ' | '; 
                echo anchor(site_url('barang/delete/'.$barang->id_barang),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
       <!--  <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
        </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div> -->
        <script type="text/javascript">
       $(document).ready(function() {
          $('#example').dataTable( {
              "searching": false
          } );
        } );
</script>