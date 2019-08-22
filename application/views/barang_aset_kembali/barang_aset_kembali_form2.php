<div class="row">
	<div class="col-md-12">
	<form action="barang_aset_kembali/simpan_kembali" method="POST">
		<div class="form-group">
            <label>Kode Kembali </label>
            <input type="text" class="form-control" name="kode_kembali" id="kode_kembali" value="<?php echo $kodeurut; ?>" readonly/>
        </div>
        <div class="table-resposive">
        <table class="table table-bordered">
        	<tr>
        		<th>No.</th>
        		<th>Kode Pinjam</th>
        		<th>Kode Aset</th>
        		<th>Pegawai</th>
        		<th>
        			<!-- Trigger the modal with a button -->
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Tambah Pesanan</button>
        		</th>
        	</tr>
        	<tr>
        	<?php $i=1; $no=1;?>
            <?php foreach($this->cart->contents() as $items): ?>
        		<td><?php echo $no; ?></td>
                <td><?php echo $items['id']; ?></td>
                <td><?php echo $items['kode_aset']; ?></td>
                <td><?php echo $items['nama_pegawai']; ?></td>
                <td>
                    <a href="barang_aset_kembali/hapus_cart/<?php echo $items['rowid'] ?>" class="btn btn-warning btn-sm">X</a>
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
        	
        	<input type="hidden" name="tanggal_balik" value="<?php echo date('d-m-Y') ?>">
        	
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="barang_aset_kembali" class="btn btn-default">Close</a>
        </div>
	</form>
	</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form action="barang_aset_kembali/simpan_cart" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data</h4>
      </div>
      <div class="modal-body">
      	
        <div class="form-group">
        	<label>Kode Pinjam</label><br>
	      <select id="kode_pinjam" name="kode_pinjam"  class="form-control" >
	        <?php 
	        $sql = $this->db->get('barang_aset_pinjam');
	        foreach ($sql->result() as $row) {
	         ?>
	        <option value="<?php echo $row->kode_pinjam ?>"><?php echo $row->kode_pinjam ?></option>
	        <?php } ?>
	      </select>
	    </div>
        <div class="form-group">
            <label>Kode Pinjam</label>
            <input type="text" class="form-control" name="kode_pinjam" id="kode_pinjam" readonly/>
        </div>
	    <div class="form-group">
            <label>Kode Aset</label>
            <input type="text" class="form-control" name="kode_aset" id="kode_aset" readonly/>
        </div>
	    <div class="form-group">
            <label>Nama Pegawai</label>
            <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" readonly/>
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
    $('#kode_pinjam').change(function() {
      var id = $(this).val();
      $.ajax({
        type : 'POST',
        url : '<?php echo base_url('barang_aset_kembali/cek_barang') ?>',
        Cache : false,
        dataType: "json",
        data : 'kode_pinjam='+id,
        success : function(resp) {
            $('#kode_pinjam').val(resp.kode_pinjam);  
            $('#kode_aset').val(resp.kode_aset); 
            $('#nama_pegawai').val(resp.nama_pegawai); 
        }
      });
      // alert(id);
    });


    
  });
</script>