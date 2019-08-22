<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Satuan Barang <?php echo form_error('satuan_barang') ?></label>
            <input type="text" class="form-control" name="satuan_barang" id="satuan_barang" placeholder="Satuan Barang" value="<?php echo $satuan_barang; ?>" />
        </div>
        <input type="hidden" name="id_satuan" value="<?php echo $id_satuan; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('satuan_barang') ?>" class="btn btn-default">Cancel</a>
    </form>