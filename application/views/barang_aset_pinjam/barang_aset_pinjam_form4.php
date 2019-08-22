<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="varchar">Kode Pinjam <?php echo form_error('kode_pinjam') ?></label>
            <input type="text" class="form-control" name="kode_pinjam" id="kode_pinjam" placeholder="Kode Pinjam" value="<?php echo $kode_pinjam; ?>" readonly/>
        </div>
        <div class="form-group">
            <label for="varchar">Nomor Kartu <?php echo form_error('kartu_p') ?></label>
            <input type="text" class="form-control" name="kartu_p" id="kartu_p" placeholder="Nomor Kartu" value="<?php echo $kartu_p; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nama Pegawai <?php echo form_error('nama_pegawai') ?></label>
            <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" placeholder="Nama Pegawai" value="<?php echo $nama_pegawai; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nama Aset <?php echo form_error('kode_aset') ?></label>
            <select id="kode_aset" name="kode_aset" class="form-control">
                <option value="">Nomor Aset | Seri | Nama Aset</option>
                <?php 
                                foreach($all_barang_aset as $barang)
                                {
                                    $selected = ($barang['kode_aset'] == $this->input->post('kode_aset')) ? ' selected="selected"' : "";
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
            <label for="varchar">Seri <?php echo form_error('seri') ?></label>
            <input type="text" class="form-control" name="seri" id="seri" placeholder="Seri" value="<?php echo $seri; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Seri <?php echo form_error('seri') ?></label>
            <input type="text" class="form-control" name="seri" id="seri" placeholder="Seri" value="<?php echo $seri; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Keterangan <?php echo form_error('keterangan') ?></label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $keterangan; ?>" />
        </div>
        <input type="hidden" name="id_aset_pinjam" value="<?php echo $id_aset_pinjam; ?>" />
        <input type="hidden" name="tanggal_pinjam" value="<?php echo date('d F Y') ?>">   
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo site_url('barang_aset_pinjam') ?>" class="btn btn-default">Cancel</a>
    </form>

<script type="text/javascript">
  $(document).ready(function(){
    $('#kode_aset').change(function() {
      var id = $(this).val();
      $.ajax({
        type : 'POST',
        url : '<?php echo base_url('barang_aset_pinjam/cek_data') ?>',
        Cache : false,
        dataType: "json",
        data : 'kode_aset='+id,
        success : function(resp) {
            $('#kode_aset').val(resp.kode_aset); 
            $('#nama_aset').val(resp.nama_aset); 
            $('#seri').val(resp.seri); 
            $('#merk_aset').val(resp.merk_aset); 
            $('#satuan_aset').val(resp.satuan_aset); 
        }
      });
      // alert(id);
    });


    
  });
</script>