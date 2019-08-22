<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Satuan Aset <?php echo form_error('satuan_aset') ?></label>
            <input type="text" class="form-control" name="satuan_aset" id="satuan_aset" placeholder="Satuan Aset" value="<?php echo $satuan_aset; ?>" />
        </div>
        <input type="hidden" name="id_satuan_aset" value="<?php echo $id_satuan_aset; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('satuan_aset') ?>" class="btn btn-default">Cancel</a>
    </form>