<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
      <!--   <div class="form-group">
            <label for="varchar">Kode Pinjam <?php echo form_error('kode_pinjam') ?></label>
            <input type="text" class="form-control" name="kode_pinjam" id="kode_pinjam" placeholder="Kode Pinjam" value="<?php echo $kode_pinjam; ?>" readonly/>
        </div> -->
        <!-- <div class="form-group">
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
        </div> -->
        <label for="varchar">Aset <?php echo form_error('id_aset_pinjam') ?></label>
        <div class="form-group">
            <select id="id_aset_pinjam" name="id_aset_pinjam" class="js-example-basic-single form-control">
                <option value="">Nomor Kartu | Pegawai | Nama Aset</option>
                 <?php 
                                foreach($all_pinjam as $pinjam)
                                {
                                    $selected = ($pinjam['id_aset_pinjam'] == $this->input->post('id_aset_pinjam')) ? ' selected="selected"' : "";
                                    foreach($all_barang_aset as $aset){
                                        if($pinjam['id_aset'] == $aset['id_aset'] && $pinjam['status']==1){
                                    echo '<option value="'.$pinjam['id_aset_pinjam'].'" '.$selected.'>'.$pinjam['kartu_p'].' | '.$pinjam['nama_pegawai'].' | '.$aset['nama_aset'].'</option>';
                                        }
                                    }
                                } 
                                ?>            
            </select>
        </div>
       <!--  <div class="form-group">
            <label for="varchar">Nama Aset </label>
            <input type="hidden" class="form-control" id="id_aset" name="id_aset" readonly />
            
        </div> -->
        <div class="form-group">
            <label for="varchar">Barang Aset </label>
            <select id="id_aset" name="id_aset" class="form-control" readonly>
            <option value="">Kode Aset | Nama Aset </option>
               <?php 
                                foreach($all_barang_aset as $barang)
                                {
                                    $selected = ($barang['id_aset'] == $this->input->post('id_aset')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$barang['id_aset'].'" '.$selected.'>'.$barang['kode_aset'].' | '.$barang['nama_aset'].'</option>';
                                } 
                                ?>  
            </select>
           
        </div>
        <div class="form-group">
            <label for="varchar">NUP </label>
            <select id="id_aset_sub" name="id_aset_sub" class="form-control" readonly>
            <option value=""></option>
               <?php 
                                foreach($all_barang_aset_sub as $sub)
                                {
                                    $selected = ($sub['id_aset_sub'] == $this->input->post('id_aset_sub')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$sub['id_aset_sub'].'" '.$selected.'>'.$sub['seri'].'</option>';
                                } 
                                ?>  
            </select>
           
        </div>
        <div class="form-group">
            <label for="varchar">Merk Aset </label>
            <select id="id_merk_aset" class="form-control" readonly>
            <option value=""></option>
               <?php 
                                foreach($all_merk_aset as $merk)
                                {
                                    $selected = ($merk['id_merk_aset'] == $this->input->post('id_merk_aset')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$merk['id_merk_aset'].'" '.$selected.'>'.$merk['merk_aset'].'</option>';
                                } 
                                ?>  
            </select>
           
        </div>
        <div class="form-group">
            <label for="varchar">Satuan Aset </label>
           <select id="id_satuan_aset" class="form-control" readonly>
            <option value=""></option>
               <?php 
                                foreach($all_satuan_aset as $satuan)
                                {
                                    $selected = ($satuan['id_satuan_aset'] == $this->input->post('id_satuan_aset')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$satuan['id_satuan_aset'].'" '.$selected.'>'.$satuan['satuan_aset'].'</option>';
                                } 
                                ?>  
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">Tanggal Pinjam </label>
            <select id="tanggal_pinjam" name="tanggal_pinjam" class="form-control" readonly>
            <option value=""></option>
               <?php 
                                foreach($all_pinjam as $pnj)
                                {
                                    $selected = ($pnj['tanggal_pinjam'] == $this->input->post('tanggal_pinjam')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$pnj['tanggal_pinjam'].'" '.$selected.'>'.$pnj['tanggal_pinjam'].'</option>';
                                } 
                                ?>  
            </select>
           
        </div>
       <!--  <div class="form-group">
            <label for="varchar">Tanggal Balik <?php echo form_error('tanggal_balik') ?></label>
            <input type="date" class="form-control" name="tanggal_balik" id="tanggal_balik" placeholder="Tanggal Balik" value="<?php echo $tanggal_balik; ?>" />
        </div> -->        
        <!-- <input type="hidden" name="status" value="<?php echo $status; ?>" /> -->
        <input type="hidden" name="id_aset_kembali" value="<?php echo $id_aset_kembali; ?>" />
        <input type="hidden" name="tanggal_balik">   
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo site_url('barang_aset_kembali') ?>" class="btn btn-default">Cancel</a>
    </form>

<script type="text/javascript">
  $(document).ready(function(){
    $('#id_aset_pinjam').change(function() {
      var id = $(this).val();
      $.ajax({
        type : 'POST',
        url : '<?php echo base_url('barang_aset_kembali/cek_data') ?>',
        Cache : false,
        dataType: "json",
        data : 'id_aset_pinjam='+id,
        success : function(resp) {
            $('#kode_aset').val(resp.kode_aset); 
            $('#id_aset_pinjam').val(resp.id_aset_pinjam); 
            $('#seri').val(resp.seri); 
            $('#id_merk_aset').val(resp.id_merk_aset); 
            $('#id_satuan_aset').val(resp.id_satuan_aset);
            $('#tanggal_pinjam').val(resp.tanggal_pinjam); 
            $('#id_aset_sub').val(resp.id_aset_sub);
            $('#id_aset').val(resp.id_aset); 
        }
      });
      // alert(id);
    });
  });
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

  