<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
<div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('barang_aset_sub/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
           <!--  <div class="col-md-3 text-right">,,
                <form action="<?php echo site_url('barang_aset_sub/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('barang_aset_sub'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div> -->
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px" id="selector">
            <tr>
                     </table>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
        <th>Nama Aset</th>
        <th>Uraian Aset</th>
        <th>NUP</th>
        <th>Tanggal Input Aset</th>
        <th>Tahun Aset</th>
        <th>Merk</th>
        <th>Satuan Aset</th>
         <th>Status</th>
       <!--  <th>Barcode</th> -->
<!--         <th>Action</th> -->
            </tr>
        </thead>
        <tbody><?php
            foreach ($all_barang_aset_sub as $barang)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php  
                            foreach($all_barang_aset as $b){
                                if($barang['id_aset'] == $b['id_aset']){
                                    echo $b['nama_aset'];
                                }
                            }
                        ?></td>
            <td><?php echo $barang['detail_aset'] ;?></td>
            <td><?php echo $barang['seri'] ;?></td>
            <td><?php echo $barang['tanggal_input'] ;?></td>
            <td><?php echo $barang['tahun'] ?></td>
            <td><?php  
                            foreach($all_merk_aset as $c){
                                if($barang['id_merk_aset'] == $c['id_merk_aset']){
                                    echo $c['merk_aset'];
                                }
                            }
                        ?></td>
            <td><?php  
                            foreach($all_satuan_aset as $d){
                                if($barang['id_satuan_aset'] == $d['id_satuan_aset']){
                                    echo $d['satuan_aset'];
                                }
                            }
                        ?></td>
             <td><?php $grup=$barang['grup'];
             if($grup==1){
                echo '<span class="label label-success">Tersedia</span>';
             }elseif($grup==2){
                echo '<span class="label label-info">Dilokasi</span>';  
             }
             else{
                echo '<span class="label label-danger">Dipinjamkan</span>';
            }
              ?></td>
            <!-- <td><?php echo base_url(). $barang->gambar ?></td> -->
  <!--           <td><?php echo $barang->penguasaan ?></td>
            <td><?php echo $barang->keterangan ?></td> -->
         <!--    <td style="text-align:center" width="200px">
                <?php 
                // echo anchor(site_url('barang_aset/detail/'.$barang->id_aset),'Detail'); 
                // echo ' | ';
                echo anchor(site_url('barang_aset_sub/update/'.$barang['id_aset_sub']),'Update'); 
                echo ' | '; 
                echo anchor(site_url('barang_aset_sub/delete/'.$barang['id_aset_sub']),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td> -->
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
              "searching": true
          } );
        } );
</script>