<div class="row">
    <div class="col-md-12">
    <form action="barang_aset_pinjam/simpan_pinjam" method="POST">
        <div class="form-group">
            <label>Kode Pinjam </label>
            <input type="text" class="form-control" name="kode_pinjam" id="kode_pinjam" value="<?php echo $kodepinjam; ?>" readonly/>
        </div>
        <div class="table-resposive">
        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Kode Aset</th>
                <th>Nama Aset</th>
                <th>Pegawai</th>
                <th>Jabatan</th>
                <th>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Tambah Pinjam</button>
                </th>
            </tr>
            <tr>
            <?php $i=1; $no=1;?>
            <?php foreach($this->cart->contents() as $items): ?>
                <td><?php echo $no; ?></td>
                <td><?php echo $items['id']; ?></td>
                <td><?php echo $items['nama_aset']; ?></td>
                <td><?php echo $items['nama_pegawai']; ?></td>
                <td><?php echo $items['jabatan']; ?></td>
                <td>
                    <a href="barang_aset_pinjam/hapus_cart/<?php echo $items['rowid'] ?>" class="btn btn-warning btn-sm">X</a>
                </td>
            </tr>
            <?php $i++; $no++;?>
            <?php endforeach; ?>
        </table>
        </div>
        <!-- <div class="form-group">
            <label>Pelanggan</label>
            <input type="text" name="pelanggan" class="form-control" placeholder="Nama Pelanggan">
        </div> -->
        
        <div class="form-group">
            <input type="hidden" name="tanggal_pinjam" value="<?php echo date('Y-m-d') ?>">
            
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="barang_aset_pinjam" class="btn btn-default">Close</a>
        </div>
    </form>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form action="barang_aset_pinjam/simpan_cart" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Pinjam</h4>
      </div>
      <div class="modal-body">
        
        <div class="form-group">
            <label>Nama Aset</label><br>
          <select id="nama_aset" name="nama_aset"  class="form-control" >
              <option value="">Nomor Aset | Seri | Nama Aset</option>
                <?php 
                        foreach($all_barang_aset as $barang)
                                {
                                    $selected = ($barang['nama_aset'] == $this->input->post('nama_aset')) ? ' selected="selected"' : "";
                                    foreach($all_barang_aset_sub as $sub){
                                        if($barang['nama_aset'] == $sub['nama_aset']){
                                            echo '<option value="'.$barang['kode_aset'].'" '.$selected.'>'.$barang['kode_aset'].' | '.$sub['seri'].' | '.$barang['nama_aset'].'</option>';
                                        }
                                    }
                                } 
                                ?>

          </select>
        </div>
        <div class="form-group">
            <label>Kode Aset</label>
            <input type="text" class="form-control" name="kode_aset" id="kode_aset" readonly/>
        </div>
        <div class="form-group">
            <label>Seri Aset</label>
            <input type="text" class="form-control" name="seri" id="seri" readonly/>
        </div>
        <div class="form-group">
            <label>Nama Aset</label>
            <input type="text" class="form-control" name="nama_aset" id="nama_aset" readonly/>
        </div>
        <div class="form-group">
            <label>Pegawai </label>
            <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai"/>
        </div>
        <div class="form-group">
            <label>Jabatan </label>
            <input type="text" class="form-control" name="jabatan" id="jabatan"/>
        </div>
        <div class="form-group">
            <label>keterangan </label>
            <input type="text" class="form-control" name="keterangan" id="keterangan"/>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-info" type="submit">Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    </form>

  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#nama_aset').change(function() {
      var id = $(this).val();
      $.ajax({
        type : 'POST',
        url : '<?php echo base_url('barang_aset_pinjam/cek_aset') ?>',
        Cache : false,
        dataType: "json",
        data : 'kode_aset='+id,
        success : function(resp) {
            $('#kode_aset').val(resp.kode_aset); 
            $('#seri').val(resp.seri); 
            $('#nama_aset').val(resp.nama_aset); 
        }
      });
      // alert(id);
    });


    
  });
</script>