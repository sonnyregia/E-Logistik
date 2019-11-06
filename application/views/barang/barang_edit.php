<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
     <?php echo form_open('barang/edit/'.$barang['id_barang']); ?>
        <div class="form-group">
            <label for="varchar">Kode Barang <?php echo form_error('kode_barang') ?></label>
            <input type="text" class="form-control" name="kode_barang" id="kode_barang" placeholder="Kode Barang" value="<?php echo $barang['kode_barang']; ?>" readonly/>
        </div>
        <div class="form-group">
            <label for="varchar">Nama Barang <?php echo form_error('nama_barang') ?></label>
            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" value="<?php echo $barang['nama_barang']; ?>" />
        </div>
 
        <div class="form-group">
                        <label for="id_satuan" class="control-label"><span class="text-danger"></span>Satuan</label>
                   <!--      <div class="form-group"> -->
                            <select name="id_satuan" class="js-example-basic-single form-control">
                                <option value="">select satuan</option>
                                <?php 
                                foreach($all_satuan as $satuan)
                                {
                                    $selected = ($satuan['id_satuan'] == $barang['id_satuan']) ? ' selected="selected"' : "";

                                    echo '<option value="'.$satuan['id_satuan'].'" '.$selected.'>'.$satuan['satuan_barang'].'</option>';
                                } 
                                ?>
                            </select>
                         <!--    <span class="text-danger"><?php echo form_error('grup');?></span> -->
                        <!-- </div> -->
                    </div>

        <div class="form-group">
                        <label for="id_merk" class="control-label"><span class="text-danger"></span>Merk</label>
                   <!--      <div class="form-group"> -->
                            <select name="id_merk" class="js-example-basic-single form-control">
                                <option value="">select merk</option>
                                <?php 
                                foreach($all_merk as $merk)
                                {
                                    $selected = ($merk['id_merk'] == $barang['id_merk']) ? ' selected="selected"' : "";

                                    echo '<option value="'.$merk['id_merk'].'" '.$selected.'>'.$merk['merk_barang'].'</option>';
                                } 
                                ?>
                            </select>
                         <!--    <span class="text-danger"><?php echo form_error('grup');?></span> -->
                        <!-- </div> -->
                    </div>

          <div class="form-group">
            <label for="int">Stok <?php echo form_error('stok') ?></label>
            <input type="text" class="form-control" name="stok" id="stok" placeholder="Stok" value="<?php echo $barang['stok']; ?>" />
        </div>

        
        <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>" /> 
        <button type="submit" class="btn btn-primary">Tambah</button> 
        <a href="<?php echo site_url('barang') ?>" class="btn btn-default">Cancel</a>
    </form>
<script type="text/javascript">
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>