<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Merk Aset <?php echo form_error('merk_aset') ?></label>
            <input type="text" class="form-control" name="merk_aset" id="merk_aset" placeholder="Merk Aset" value="<?php echo $merk_aset; ?>" />
        </div>
        <input type="hidden" name="id_merk_aset" value="<?php echo $id_merk_aset; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('merk_aset') ?>" class="btn btn-default">Cancel</a>
    </form>