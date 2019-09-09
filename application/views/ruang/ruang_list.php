<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
<div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('ruang/tambah_upb'),'Tambah UPB', 'class="btn btn-primary"'); ?>
                <?php echo anchor(site_url('ruang_detail/tambah_detail_upb'),'Tambah Detail UPB', 'class="btn btn-info"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">,,
                <form action="<?php echo site_url('ruang/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('ruang'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px" id="selector">
            <tr>
                     </table>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ruangan</th>
                <th>Kode Ruang</th>
       <!--  <th>Barcode</th> -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody><?php
            foreach ($all_ruang as $ruang)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $ruang['nama_ruang'] ;?></td>
            <td><?php echo $ruang['kode_ruang'] ;?></td>
            <!-- <td><?php echo base_url(). $barang->gambar ?></td> -->
  <!--           <td><?php echo $barang->penguasaan ?></td>
            <td><?php echo $barang->keterangan ?></td> -->
            <td style="text-align:center" width="200px">
                <a href="<?php echo site_url('ruang_detail/detail/'.$ruang['id_ruang']); ?>" class="btn btn-primary btn-xs"><span class="fa fa-pencil"></span> Detail</a>
                <a href="<?php echo site_url('ruang/update/'.$ruang['id_ruang']); ?>" class="btn btn-warning btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                <a href="<?php echo site_url('ruang_detail/cetak/'.$ruang['id_ruang']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Cetak</a>
                <!-- <?php 
                echo anchor(site_url('ruang_detail/index/?id_ruang='.$ruang['id_ruang']),'Detail'); 
                echo ' | ';
                echo anchor(site_url('barang_aset_sub/update/'.$ruang['id_ruang']),'Update'); 
                echo ' | '; 
                echo anchor(site_url('barang_aset_sub/delete/'.$ruang['id_ruang']),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?> -->
            </td>
        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
      <!--   <div class="row">
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