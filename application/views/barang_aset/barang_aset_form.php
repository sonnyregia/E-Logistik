<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="varchar">Kode Aset <?php echo form_error('kode_aset') ?></label>
            <input type="text" class="form-control" name="kode_aset" id="kode_aset" placeholder="Kode Aset"  value="<?php echo $kode_aset; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Uraian Aset <?php echo form_error('nama_aset') ?></label>
            <input type="text" class="form-control" name="nama_aset" id="nama_aset" placeholder="Nama Aset" value="<?php echo $nama_aset; ?>" />
        </div>
        <input type="hidden" name="id_aset" value="<?php echo $id_aset; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('barang_aset') ?>" class="btn btn-default">Cancel</a>
    </form>