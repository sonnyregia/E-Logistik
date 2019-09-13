<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
<?php 
$rs = $adata->row();
 ?>
<div class="row">
    <div class="col-md-12">
        <table id="example" class="table table-bordered" style="margin-bottom: 10px" >
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Ruang</th>
                    <th>Nama Ruang</th>
                    <th>Nama Aset</th>
                    <th>Kode Aset</th>
                    <th>NUP</th>
                    <th>Tahun Peroleh</th>
                    <th>Merk Aset</th>
                    <th>Satuan Aset</th>
                    <th>Pemegang</th>
                    <th>Aksi</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
             $sql = $this->db->query("SELECT * FROM ruang_detail as a,barang_aset as b, barang_aset_sub as s, merk_aset as d, ruang as c, satuan_aset as e where a.id_aset=b.id_aset and a.id_aset_sub=s.id_aset_sub and a.id_merk_aset=d.id_merk_aset and a.id_ruang=c.id_ruang and a.id_satuan_aset=e.id_satuan_aset and c.id_ruang='$rs->id_ruang' ");
                $no =+1;
            foreach ($sql->result() as $row)
            {
                ?>
                <tr>
                    <td width="80px"><?php echo $no++; ?></td>
                     <!-- <td><?php  
                            foreach($all_ruang as $a){
                                if($detail['id_ruang'] == $a['id_ruang']){
                                    echo $a['kode_ruang'].' | '.$detail['id_ruang'];
                                }
                            }
                        ?></td>
                    <td><?php  
                            foreach($all_ruang as $b){
                                if($detail['id_ruang'] == $b['id_ruang']){
                                    echo $b['nama_ruang'].' | '.$detail['id_ruang'];
                                }
                            }
                        ?></td>
                    <td><?php  
                            foreach($all_barang_aset as $c){
                                if($detail['id_aset'] == $c['id_aset']){
                                    echo $c['nama_aset'].' | '.$detail['id_aset'];
                                }
                            }
                        ?></td>
                    <td><?php  
                            foreach($all_barang_aset as $d){
                                if($detail['id_aset'] == $d['id_aset']){
                                    echo $d['kode_aset'].' | '.$detail['id_aset'];
                                }
                            }
                        ?></td>
                    <td><?php  
                            foreach($all_barang_sub as $e){
                                if($detail['id_aset_sub'] == $e['id_aset_sub']){
                                    echo $e['seri'].' | '.$detail['id_aset_sub'];
                                }
                            }
                        ?></td>
                    <td><?php  
                            foreach($all_barang_sub as $f){
                                if($detail['id_aset_sub'] == $f['id_aset_sub']){
                                    echo $f['tahun'].' | '.$detail['id_aset_sub'];
                                }
                            }
                        ?></td>
                    <td><?php  
                            foreach($all_merk_aset as $g){
                                if($detail['id_merk_aset'] == $g['id_merk_aset']){
                                    echo $g['merk_aset'].' | '.$detail['id_merk_aset'];
                                }
                            }
                        ?></td> -->
                    <td><?php echo $row->kode_ruang?></td>
                    <td><?php echo $row->nama_ruang?></td>
                    <td><?php echo $row->nama_aset?></td>
                    <td><?php echo $row->kode_aset?></td>
                    <td><?php echo $row->seri?></td>
                    <td><?php echo $row->tahun?></td>
                    <td><?php echo $row->merk_aset?></td>
                    <td><?php echo $row->satuan_aset?></td>
                    <td><?php echo $row->pemegang ?></td>
                    <td>
                        <a href="ruang_detail/remove/<?php echo $row->id_ruang_detail ?>" class="btn btn-info btn-sm">Delete</a>
                    </td>
                </tr>
                <!-- <?php $no++; ?> -->
                <?php }
                    
                 ?>

            </tbody>
        </table>
        <a href="ruang/index/" class="btn btn-danger btn-sm">Back</a>
    </div>
</div>
        <script type="text/javascript">
       $(document).ready(function() {
          $('#example').dataTable( {
              "searching": true
          } );
        } );
</script>