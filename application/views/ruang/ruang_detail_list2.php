<?php 
 ?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered" style="margin-bottom: 10px" >
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
                    
                </tr>
            </thead>
            <tbody>
                <?php
             
                // $sql = $this->db->query("SELECT * FROM barang_aset as a,barang_aset_sub as b where a.id_aset=b.id_aset and a.id_aset='$rs->kode_aset' ");
                $no =+1;
            foreach ($query as $detail)
            {
                ?>
                <tr>
                    <td width="80px"><?php echo $no++; ?></td>
                     <td><?php  
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
                        ?></td> 
                    <!-- <td><?php  
                            foreach($all_satuan_aset as $h){
                                if($detail['id_satuan_aset'] == $h['id_satuan_aset']){
                                    echo $h['satuan_aset'].' | '.$detail['id_satuan_aset'];
                                }
                            }
                        ?></td> -->
                        <td><?php  
                            foreach($all_satuan_aset as $h){
                                if($detail->id_satuan_aset == $h->id_satuan_aset){
                                    echo $h->satuan_aset;
                                }
                            }
                        ?></td>
                    <td><?php echo $detail->pemegang ?></td>
                   <!--  <td>
                        <a href="barang_aset_download/update/<?php echo $row->id_aset_sub ?>" class="btn btn-info btn-sm">update</a>
                    </td> -->
                </tr>
                <!-- <?php $no++; ?> -->
                <?php }
                
                 ?>
            </tbody>
        </table>
    </div>
</div>