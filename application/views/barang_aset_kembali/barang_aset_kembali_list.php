<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
<div class="row">
<div class="col-md-4">
        <a href="barang_aset_kembali/kembalikan" class="btn btn-primary">Tambah</a>
        <!-- <a href="app/export_penjualan" target="_blank" class="btn btn-primary">Export</a> -->
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div><br><br><br>
    <div class="col-md-12">
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
                <th>Nomor kartu</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Pegawai</th>
        <th>Jabatan</th>
        <th>Aset Barang</th>
         <th>NUP</th>
        <th>Keterangan</th>
  <!--       <th>Action</th> -->
            </tr>
<?php
            foreach ($all_kembali as $kembali)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <!-- <td><?php echo $row->kode_pinjam ?></td> -->
            <td><?php foreach($all_kartu as $e){
                        if($kembali['id_kartu'] == $e['id_kartu']){
                            echo $e['nomor_kartu'];
                        }
                }?></td>
            <td><?php foreach($all_pinjam as $a){
                        if($kembali['id_aset_pinjam'] == $a['id_aset_pinjam']){
                            echo $a['tanggal_pinjam'];
                        }
                }?></td>
            <?php $oridate=$kembali['tanggal_balik'];
                $date=date("d-M-Y",strtotime($oridate));?>
            <td><?php echo $date ;?></td>
            <td><?php foreach($all_pinjam as $c){
                        if($kembali['id_aset_pinjam'] == $c['id_aset_pinjam']){
                            echo $c['nama_pegawai'];
                        }
                }?></td>
            <td><?php foreach($all_pinjam as $d){
                        if($kembali['id_aset_pinjam'] == $d['id_aset_pinjam']){
                            echo $d['jabatan'];
                        }
                }?></td>
       <!--      <td><?php  
                            foreach($all_barang_aset as $b){
                                if($pinjam['id_aset'] == $b['id_aset']){
                                    echo $b['nama_aset'].' | '.$pinjam['id_aset'];
                                }
                            }
                        ?></td> -->
             <!-- <td><?php echo $row->seri ?></td> -->
            <td><?php  
                            foreach($all_barang_aset as $z){
                                if($kembali['id_aset'] == $z['id_aset']){
                                    echo $z['nama_aset'];
                                }
                            }
                        ?></td>
             <td><?php  
                            foreach($all_barang_sub as $g){
                                if($kembali['id_aset_sub'] == $g['id_aset_sub']){
                                    echo $g['seri'];
                                }
                            }
                        ?></td>
            <td><?php foreach($all_pinjam as $f){
                        if($kembali['id_aset_pinjam'] == $f['id_aset_pinjam']){
                            echo $f['keterangan'];
                        }
                }?></td>
           <!--  <td style="text-align:center" width="200px">
                <a href="barang_aset_kembali/laporan/<?php echo $row->id_aset_kembali ?>" target="_blank" class="btn btn-info btn-sm">cetak</a>
               
                <a href="<?php echo site_url('ruang_detail/cetak_download/'.$row->id_ruang); ?>"  target="_blank" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Cetak</a>
                <a href="<?php echo site_url('barang_aset_kembali/laporan/'.$kembali['id_aset_kembali']); ?>"  target="_blank" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Cetak</a>
                
            </td> -->
        </tr>
                <?php
            }
            ?>

        </table>
        <a href="<?php echo ('barang_aset_kembali/cetak/'.$kembali['id_aset_kembali']) ?>" target="_blank" class="btn btn-info btn-sm">cetak</a>
        </div>
</div>
<!-- <a href="<?php echo site_url ('barang_aset_kembali/kembali/'.$pinjam['id_aset_pinjam']);?>" class="btn btn-success btn-sm">kembalikan</a> -->