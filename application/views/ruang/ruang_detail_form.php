<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<form action="<?php echo $action; ?>" method="post">
      <!--   <div class="form-group">
            <label for="varchar">Kode Pinjam <?php echo form_error('kode_pinjam') ?></label>
            <input type="text" class="form-control" name="kode_pinjam" id="kode_pinjam" placeholder="Kode Pinjam" value="<?php echo $kode_pinjam; ?>" readonly/>
        </div> -->
       <!--  <div class="form-group">
            <label for="varchar">ID Ruang</label>
            <input type="text" class="form-control" name="id_ruang"  placeholder="ID Ruang" value="<?php echo $id_ruang; ?>" disabled="disabled"/>
            <input type="hidden" class="form-control" name="id_ruang" value="<?php echo $id_ruang; ?>"/>
        </div> -->
        <div class="form-group">
            <label for="varchar">Ruang <?php echo form_error('id_ruang') ?></label>
            <select name="id_ruang" class="js-example-basic-single form-control">
            <option value="">Nama Ruang | Kode Ruang </option>
               <?php 
                                foreach($all_ruang as $ruang)
                                {
                                    $selected = ($ruang['id_ruang'] == $this->input->post('id_ruang')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$ruang['id_ruang'].'" '.$selected.'>'.$ruang['nama_ruang'].' | '.$ruang['kode_ruang'].'</option>';
                                } 
                                ?>  
            </select>
           
        </div>
        <label for="varchar">Aset <?php echo form_error('id_aset_sub') ?></label>
        <div class="form-group">
            <select id="id_aset_sub" name="id_aset_sub" class="js-example-basic-single form-control">
                <option value="">Nama Aset | Kode Aset | NUP | Detail</option>
                <?php 
                                foreach($all_barang_aset_sub as $sub)
                                {
                                    $selected = ($sub['id_aset_sub'] == $this->input->post('id_aset_sub')) ? ' selected="selected"' : "";
                                    foreach($all_barang_aset as $barang){
                                        if($sub['id_aset'] == $barang['id_aset'] && $sub['grup']==1){
                                            echo '<option value="'.$sub['id_aset_sub'].'" '.$selected.'>'.$barang['nama_aset'].' | '.$barang['kode_aset'].' | '.$sub['seri'].' | '.$sub['detail_aset'].' </option>';
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
            <select id="id_merk_aset" name="id_merk_aset" class="form-control" readonly>
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
           <select id="id_satuan_aset" name="id_satuan_aset" class="form-control" readonly>
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
            <label for="varchar">Pemegang <?php echo form_error('pemegang') ?></label>
            <input type="text" class="form-control" name="pemegang" id="pemegang" placeholder="Pemegang" value="<?php echo $pemegang; ?>" />
        </div>
        <!-- <input type="hidden" name="status" value="<?php echo $status; ?>" /> -->
        <input type="hidden" name="id_ruang_detail" value="<?php echo $id_ruang_detail; ?>" />  
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo site_url('ruang') ?>" class="btn btn-default">Cancel</a>
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

  