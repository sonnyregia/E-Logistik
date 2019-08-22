<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="varchar">Kode Kembali</label>
            <input type="text" class="form-control" name="kode_kembali" id="kode_kembali" placeholder="Kode Kembali" value="<?php echo $kode_kembali; ?>" readonly/>
        </div>
        <div class="form-group">
            <label for="varchar">Kode Pinjam</label>
            <select id="kode_pinjam" name="kode_pinjam" class="form-control">
                <option value="">Kode Pinjam</option>
                <?php 
                    $sql = $this->db->get('barang_aset_pinjam');
                    foreach ($sql->result() as $row){
                        ?>
                    <option value="<?php echo $row->kode_pinjam ?>"><?php echo $row->kode_pinjam ?></option>
                    <?php }
                ?>
            </select>
        </div>
         <div class="form-group">
            <label>Kode Aset</label>
            <input type="text" class="form-control" name="kode_aset" id="kode_aset" readonly/>
        </div>
        <div class="form-group">
            <label>Nama Aset</label>
            <input type="text" class="form-control" name="nama_aset" id="nama_aset" readonly/>
        </div>
        <div class="form-group">
            <label>Seri Aset</label>
            <input type="text" class="form-control" name="seri" id="seri" readonly/>
        </div>
        <div class="form-group">
            <label>Nama Pegawai</label>
            <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" readonly/>
        </div>
        <div class="form-group">
            <label>Jabatan</label>
            <input type="text" class="form-control" name="jabatan" id="jabatan" readonly/>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" readonly/>
        </div>
        <input type="hidden" name="id_aset_kembali" value="<?php echo $id_aset_kembali; ?>" />
        <input type="hidden" name="tanggal_balik" value="<?php echo date('d F Y') ?>">  
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo site_url('barang_aset_kembali') ?>" class="btn btn-default">Cancel</a>
    </form>

<script type="text/javascript">
  $(document).ready(function(){
    $('#kode_pinjam').change(function() {
      var id = $(this).val();
      $.ajax({
        type : 'POST',
        url : '<?php echo base_url('barang_aset_kembali/cek_data') ?>',
        Cache : false,
        dataType: "json",
        data : 'kode_pinjam='+id,
        success : function(resp) {
            $('#kode_pinjam').val(resp.kode_pinjam); 
            $('#kode_aset').val(resp.kode_aset); 
            $('#nama_aset').val(resp.nama_aset); 
            $('#seri').val(resp.seri); 
            $('#nama_pegawai').val(resp.nama_pegawai); 
            $('#jabatan').val(resp.jabatan); 
            $('#keterangan').val(resp.keterangan); 
        }
      });
      // alert(id);
    });


    
  });
</script>