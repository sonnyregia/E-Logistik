<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Nama Ruangan <?php echo form_error('nama_ruang') ?></label>
            <input type="text" class="form-control" name="nama_ruang" placeholder="Nama Ruangan" value="<?php echo $nama_ruang; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Kode Ruang <?php echo form_error('kode_ruang') ?></label>
            <input type="text" class="form-control" name="kode_ruang" placeholder="Kode Ruang" value="<?php echo $kode_ruang; ?>" />
        </div>
        <input type="hidden" name="id_ruang" value="<?php echo $id_ruang; ?>" /> 
        <button type="submit" class="btn btn-primary">Create</button> 
        <a href="<?php echo site_url('ruang') ?>" class="btn btn-default">Cancel</a>
    </form>