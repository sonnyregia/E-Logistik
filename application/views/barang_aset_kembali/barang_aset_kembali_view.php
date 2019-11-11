<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
<div class="row">
<div class="col-md-4">
        <a href="barang_aset_kembali/create" class="btn btn-primary">Tambah</a>
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
                <th>Tanggal Kembali</th>
             <!--    <th>Tanggal Balik</th> -->
                <th>Pegawai</th>
        <th>Jabatan</th>
        <th>Aset Barang</th>
        
         <th>NUP</th> 
       <!--  <th>Status</th> -->
        <th>Keterangan</th>
      <!--   <th>Action</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($all_kembali as $kembali)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <!-- <td><?php echo $row->kode_pinjam ?></td> -->
            <td><?php foreach($all_kartu as $k){
                if($kembali['id_kartu'] == $k['id_kartu']){
                    echo $k['nomor_kartu'];
                }
            } 
            ?></td>
            <td><?php foreach($all_pinjam as $a){
                if($kembali['id_aset_pinjam'] == $a['id_aset_pinjam']){
                    echo $a['tanggal_pinjam'];
                }
            } 
            ?></td>
            <?php $oridate=$kembali['tanggal_balik'];
                $date=date("d-M-Y",strtotime($oridate));?>
            <td><?php echo $date;?></td>
           <!--  <?php $oridate2=$pinjam['tgl_balik'];
                $date2=date("d-M-Y",strtotime($oridate2));?>
            <td><?php echo $date2;?></td> -->
            <td><?php foreach($all_pinjam as $b){
                if($kembali['id_aset_pinjam'] == $b['id_aset_pinjam']){
                    echo $b['nama_pegawai'];
                }
            } 
            ?></td>
            <td><?php foreach($all_pinjam as $c){
                if($kembali['id_aset_pinjam'] == $c['id_aset_pinjam']){
                    echo $c['jabatan'];
                }
            } 
            ?></td>
            <td><?php  
                            foreach($all_barang_aset as $d){
                                
                                if($kembali['id_aset'] == $d['id_aset']){
                                    echo $d['nama_aset'].' | ' .$d['kode_aset'] ;
                                    }    
                            }
                        ?></td>
             <td><?php  
                            foreach($all_barang_sub as $e){
                                if($kembali['id_aset_sub'] == $e['id_aset_sub']){
                                    echo $e['seri'];
                                }
                            }
                        ?></td>
           
             <!-- <td><?php echo $row->seri ?></td> -->
             <td><?php foreach($all_pinjam as $f){
                if($kembali['id_aset_pinjam'] == $f['id_aset_pinjam']){
                    echo $f['keterangan'];
                }
            } 
            ?></td>
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
        <a href="<?php echo ('barang_aset_kembali/cetak/'.$kembali['id_aset_kembali']) ?>" target="_blank" class="btn btn-info btn-sm">cetak</a>
        </div>
</div>
        <script type="text/javascript">
       $(document).ready(function() {
          $('#example').dataTable( {
              "searching": true
          } );
        } );
</script>