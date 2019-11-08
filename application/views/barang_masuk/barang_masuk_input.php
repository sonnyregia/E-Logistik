<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Invoice <?php echo form_error('invoice') ?></label>
            <input type="text" class="form-control" name="invoice" id="invoice" placeholder="Invoice" value="<?php echo $invoice; ?>" />
        </div>   

       <div class="form-group">
            <label for="varchar">Nama Barang <?php echo form_error('kode_barang') ?></label>
            <select id="id_barang" name="id_barang" class="form-control">
                <option value="">Nama Barang | Stock</option>
                <?php 
                                foreach($all_barang as $barang)
                                {
                                    $selected = ($barang['id_barang'] == $this->input->post('id_barang')) ? ' selected="selected"' : "";
                                    echo '<option value="'.$barang['id_barang'].'" '.$selected.'>'.$barang['nama_barang'].' | '.$barang['stok'].'</option>';
                                } 
                                ?>
            </select>
        </div>
         <!-- <div class="form-group">
            <label for="varchar">Tgl Masuk <?php echo form_error('tanggal') ?></label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div> -->

        <div class="form-group">
            <label for="varchar">Merk </label>
            <select id="id_merk" name="id_merk" class="form-control" readonly>
            <option value=""></option>
               <?php 
                                foreach($all_merk as $merk)
                                {
                                    $selected = ($merk['id_merk'] == $this->input->post('id_merk')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$merk['id_merk'].'" '.$selected.'>'.$merk['merk_barang'].'</option>';
                                } 
                                ?>  
            </select>
           
        </div>

        <div class="form-group">
            <label for="int">Jumlah <?php echo form_error('jumlah') ?></label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $jumlah; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Satuan </label>
            <select id="id_satuan" name="id_satuan" class="form-control" readonly>
            <option value=""></option>
               <?php 
                                foreach($all_satuan as $satuan)
                                {
                                    $selected = ($satuan['id_satuan'] == $this->input->post('id_satuan')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$satuan['id_satuan'].'" '.$selected.'>'.$satuan['satuan_barang'].'</option>';
                                } 
                                ?>  
            </select>
           
        </div>

        <div class="form-group">
            <label for="int">Harga <?php echo form_error('harga') ?></label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo $harga; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Supplier <?php echo form_error('supplier') ?></label>
            <input type="text" class="form-control" name="supplier" id="supplier" placeholder="Supplier" value="<?php echo $supplier; ?>" />
        </div>
        <input type="hidden" name="id_barang_masuk" value="<?php echo $id_barang_masuk; ?>" />
        <input type="hidden" name="tanggal" value="<?php echo date('d F Y') ?>"> 
        <button type="submit" class="btn btn-primary">Tambah</button> 
        <a href="<?php echo site_url('barang_masuk') ?>" class="btn btn-default">Cancel</a>
    </form>
<script type="text/javascript">
  $(document).ready(function(){
    $('#id_barang').change(function() {
      var id = $(this).val();
      $.ajax({
        type : 'POST',
        url : '<?php echo base_url('barang_masuk/cek_data') ?>',
        Cache : false,
        dataType: "json",
        data : 'id_barang='+id,
        success : function(resp) {
            $('#id_merk').val(resp.id_merk); 
            $('#id_satuan').val(resp.id_satuan);
            $('#id_barang').val(resp.id_barang); 
        }
      });
      // alert(id);
    });
  });
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>