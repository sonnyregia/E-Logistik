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
<!--         <th>Seri Aset Barang</th> -->
        <th>Keterangan</th>
        <th>Action</th>
            </tr>
<?php
            foreach ($all_kembali as $kembali)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <!-- <td><?php echo $row->kode_pinjam ?></td> -->
            <td><?php foreach($all_pinjam as $e){
                        if($kembali['id_aset_pinjam'] == $e['id_aset_pinjam']){
                            echo $e['kartu_p'];
                        }
                }?></td>
            <td><?php foreach($all_pinjam as $a){
                        if($kembali['id_aset_pinjam'] == $a['id_aset_pinjam']){
                            echo $a['tanggal_pinjam'];
                        }
                }?></td>
            <td><?php echo $kembali['tanggal_balik'] ;?></td>
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
            <td><?php foreach($all_pinjam as $f){
                        if($kembali['id_aset_pinjam'] == $f['id_aset_pinjam']){
                            echo $f['keterangan'];
                        }
                }?></td>
            <td style="text-align:center" width="200px">
                <a href="barang_aset_pinjam/detail/<?php echo $row->id_aset_pinjam ?>" class="btn btn-info btn-sm">detail</a>
                <a href="barang_aset_pinjam/delete/<?php echo $row->id_aset_pinjam ?>" class="btn btn-danger btn-sm">delete</a>
                <!-- <a href="<?php echo site_url ('barang_aset_kembali/kembali/'.$pinjam['id_aset_pinjam']);?>" class="btn btn-success btn-sm">kembalikan</a> -->
            </td>
        </tr>
                <?php
            }
            ?>

        </table>
        </div>
</div>