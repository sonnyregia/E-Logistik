<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <!--   <div class="form-group">
            <label for="varchar">Kode Pinjam <?php echo form_error('kode_pinjam') ?></label>
            <input type="text" class="form-control" name="kode_pinjam" id="kode_pinjam" placeholder="Kode Pinjam" value="<?php echo $kode_pinjam; ?>" readonly/>
        </div> -->
        <div class="form-group">
           <select name="id_kartu" class="js-example-basic-single form-control">
               <option value="">Nomor Kartu</option>
               <?php
                    foreach($all_kartu as $kartu){
                        $selected = ($kartu['id_kartu'] == $this->input->post('id_kartu')) ? ' selected="selected"' : "";
                        if($kartu['id_kartu'] && $kartu['grup_k']==1){
                        echo '<option value="'.$kartu['id_kartu'].'" '.$selected.'>'.$kartu['nomor_kartu'].'</option>';
                    }
                    }
               ?>
           </select>
        </div>
        <div class="form-group">
            <label for="varchar">Nama Pegawai <?php echo form_error('nama_pegawai') ?></label>
            <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" placeholder="Nama Pegawai" value="<?php echo $nama_pegawai; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" />
        </div>
        <label for="varchar">Aset <?php echo form_error('id_aset_sub') ?></label>
        <div class="form-group">
            <select id="id_aset_sub" name="id_aset_sub" class="js-example-basic-single form-control">
                <option value="">Nama Aset | Kode Aset | NUP</option>
                <?php 
                                foreach($all_barang_aset_sub as $sub)
                                {
                                    $selected = ($sub['id_aset_sub'] == $this->input->post('id_aset_sub')) ? ' selected="selected"' : "";
                                    foreach($all_barang_aset as $barang){
                                        if($sub['id_aset'] == $barang['id_aset'] && $sub['grup']==1){
                                            echo '<option value="'.$sub['id_aset_sub'].'" '.$selected.'>'.$barang['nama_aset'].' | '.$barang['kode_aset'].' | '.$sub['seri'].' </option>';
                                        }
                                    }
                                } 
                                ?>
            </select>
        </div>
        <div class="form-group">
           <!--  <label for="varchar">Nama Aset </label> -->
            <input type="hidden" class="form-control" id="id_aset" name="id_aset" readonly />
            
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
        <!-- <div class="form-group">
            <label for="varchar">Tgl Balik <?php echo form_error('tgl_balik') ?></label>
            <input data-provide="datepicker" class="bootstrap-datepicker form-control" name="tgl_balik" id="tgl_balik" placeholder="Tgl Balik" value="<?php echo $tgl_balik; ?>" />
        </div> -->        
        <div class="form-group">
            <label for="varchar">Keterangan <?php echo form_error('keterangan') ?></label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $keterangan; ?>" />
        </div>
        <!-- <input type="hidden" name="status" value="<?php echo $status; ?>" /> -->
        <input type="hidden" name="id_aset_pinjam" value="<?php echo $id_aset_pinjam; ?>" />
        <input type="hidden" name="tanggal_pinjam">
        <input type="hidden" name="status" value="<?php echo $status; ?>" />   
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo site_url('barang_aset_pinjam') ?>" class="btn btn-default">Cancel</a>
    </form>

<script type="text/javascript">
  $(document).ready(function(){
    $('#id_aset_sub').change(function() {
      var id = $(this).val();
      $.ajax({
        type : 'POST',
        url : '<?php echo base_url('barang_aset_pinjam/cek_data') ?>',
        Cache : false,
        dataType: "json",
        data : 'id_aset_sub='+id,
        success : function(resp) {
            $('#kode_aset').val(resp.kode_aset); 
            $('#nama_aset').val(resp.nama_aset); 
            $('#seri').val(resp.seri); 
            $('#id_merk_aset').val(resp.id_merk_aset); 
            $('#id_satuan_aset').val(resp.id_satuan_aset);
            $('#kodeurut').val(resp.kodeurut); 
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

  