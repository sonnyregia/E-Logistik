<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="varchar">Kode Barang <?php echo form_error('kode_barang') ?></label>
            <input type="text" class="form-control" name="kode_barang" id="kode_barang" placeholder="Kode Barang" value="<?php echo $kode_barang; ?>" readonly/>
        </div>
        <div class="form-group">
            <label for="varchar">Nama Barang <?php echo form_error('nama_barang') ?></label>
            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" value="<?php echo $nama_barang; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Satuan Barang </label>
            <select name="id_satuan" class="js-example-basic-single form-control">
                <option value="<?php echo $id_satuan ?>" >Satuan</option>
                <?php
                $sql = $this->db->get('satuan_barang');
                foreach ($sql->result() as $row){
                    ?>
                <option value="<?php echo $row->id_satuan ?>"><?php echo $row->satuan_barang ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">Merk Barang </label>
            <select name="id_merk" class="js-example-basic-single form-control">
                <option value="<?php echo $id_merk ?>">Merk</option>
                <?php 
                $sql = $this->db->get('merk_barang');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->id_merk ?>"><?php echo $row->merk_barang ?></option>
            <?php } ?>
            </select>
        </div>


        <div class="form-group">
            <label for="int">Stok <?php echo form_error('stok') ?></label>
            <input type="text" class="form-control" name="stok" id="stok" placeholder="Stok" value="<?php echo $stok; ?>" />
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