<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
<div class="row">
<div class="col-md-4">
        <a href="barang_aset_pinjam/create" class="btn btn-primary">Tambah</a>
        <!-- <a href="app/export_penjualan" target="_blank" class="btn btn-primary">Export</a> -->
    </div>
    <div class="col-md-4"></div>
<!--     <a href="barang_aset_pinjam/view_pinjam" class="btn btn-info">Data Pinjam</a>
    <a href="barang_aset_kembali/view_kembali" class="btn btn-success">Data Kembali</a> -->
    <div class="col-md-4"></div><br><br><br>
    <div class="col-md-12">
        <table class="table table-bordered" style="margin-bottom: 10px" id="selector">
            <tr>
                     </table>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
               <!--  <th>Kode Pinjam</th> -->
                <th>Nomor Kartu</th>
                <th>Tanggal Pinjam</th>
             <!--    <th>Tanggal Balik</th> -->
                <th>Pegawai</th>
        <th>Jabatan</th>
        <th>Aset Barang</th>
<!--         <th>Seri Aset Barang</th> -->
       <!--  <th>Status</th> -->
        <th>Keterangan</th>
      <!--   <th>Action</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($all_pinjam as $pinjam)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <!-- <td><?php echo $row->kode_pinjam ?></td> -->
            <td><?php echo $pinjam['kartu_p'] ;?></td>
            <?php $oridate=$pinjam['tanggal_pinjam'];
                $date=date("d-M-Y",strtotime($oridate));?>
            <td><?php echo $date;?></td>
           <!--  <?php $oridate2=$pinjam['tgl_balik'];
                $date2=date("d-M-Y",strtotime($oridate2));?>
            <td><?php echo $date2;?></td> -->
            <td><?php echo $pinjam['nama_pegawai'] ;?></td>
            <td><?php echo $pinjam['jabatan'] ;?></td>
            <td><?php  
                            foreach($all_barang_aset as $b){
                                if($pinjam['id_aset'] == $b['id_aset']){
                                    echo $b['nama_aset'].' | '.$pinjam['id_aset'];
                                }
                            }
                        ?></td>
             <!-- <td><?php echo $row->seri ?></td> -->
        <!--      <td><?php  
                            foreach($all_barang_sub as $d){
                                if($pinjam['id_aset_sub'] == $d['id_aset_sub']){
                                    echo $b['grup'];
                                }
                            }
                        ?></td> -->
            <td><?php echo $pinjam['keterangan'] ;?></td>
            <!-- <td style="text-align:center" width="200px">
                <a href="barang_aset_pinjam/detail/<?php echo $row->id_aset_pinjam ?>" class="btn btn-info btn-sm">detail</a>
                <a href="barang_aset_pinjam/delete/<?php echo $row->id_aset_pinjam ?>" class="btn btn-danger btn-sm">delete</a>
                
            </td> -->
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
<!-- <a href="<?php echo site_url ('barang_aset_kembali/kembali/'.$pinjam['id_aset_pinjam']);?>" class="btn btn-success btn-sm">kembalikan</a> -->