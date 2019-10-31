<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<form action="<?php echo $action; ?>" method="post">
        <?php echo form_open('barang_aset_sub/edit/'.$barang['id_aset_sub']); ?>
        <div class="form-group">
                        <label for="id_aset" class="control-label"><span class="text-danger"></span>Nama Aset</label>
                   <!--      <div class="form-group"> -->
                            <select name="id_aset" class="js-example-basic-single form-control">
                                <option value="">select Nama Aset | Kode Aset</option>
                                <?php 
                                foreach($all_barang_aset as $aset)
                                {
                                    $selected = ($aset['id_aset'] == $barang['id_aset']) ? ' selected="selected"' : "";

                                    echo '<option value="'.$aset['id_aset'].'" '.$selected.'>'.$aset['nama_aset'].' | '.$aset['kode_aset'].' </option>';
                                } 
                                ?>
                            </select>
                         <!--    <span class="text-danger"><?php echo form_error('grup');?></span> -->
                        <!-- </div> -->
                    </div>
        <div class="form-group">
            <label for="varchar">NUP <?php echo form_error('seri') ?></label>
            <input type="text" class="form-control" name="seri" placeholder="NUP" value="<?php echo $barang['seri']; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Uraian Aset <?php echo form_error('detail_aset') ?></label>
            <input type="text" class="form-control" name="detail_aset" placeholder="Uraian Aset" value="<?php echo $barang['detail_aset']; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Pengusaan Barang <?php echo form_error('penguasaan') ?></label>
            <input type="text" class="form-control" name="penguasaan" placeholder="Pengusaan Barang" value="<?php echo $barang['penguasaan']; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Tahun Peroleh <?php echo form_error('tahun') ?></label>
            <input type="text" class="form-control" name="tahun" placeholder="Tahun Peroleh" value="<?php echo $barang['tahun']; ?>" />
        </div>

        <div class="form-group">
                        <label for="id_merk_aset" class="control-label"><span class="text-danger"></span>Merk</label>
                   <!--      <div class="form-group"> -->
                            <select name="id_merk_aset" class="js-example-basic-single form-control">
                                <option value="">select merk</option>
                                <?php 
                                foreach($all_merk_aset as $merk)
                                {
                                    $selected = ($merk['id_merk_aset'] == $barang['id_merk_aset']) ? ' selected="selected"' : "";

                                    echo '<option value="'.$merk['id_merk_aset'].'" '.$selected.'>'.$merk['merk_aset'].'</option>';
                                } 
                                ?>
                            </select>
                         <!--    <span class="text-danger"><?php echo form_error('grup');?></span> -->
                        <!-- </div> -->
                    </div>
            <div class="form-group">
                        <label for="id_satuan_aset" class="control-label"><span class="text-danger"></span>Satuan</label>
                   <!--      <div class="form-group"> -->
                            <select name="id_satuan_aset" class="js-example-basic-single form-control">
                                <option value="">select satuan</option>
                                <?php 
                                foreach($all_satuan_aset as $satuan)
                                {
                                    $selected = ($satuan['id_satuan_aset'] == $barang['id_satuan_aset']) ? ' selected="selected"' : "";

                                    echo '<option value="'.$satuan['id_satuan_aset'].'" '.$selected.'>'.$satuan['satuan_aset'].'</option>';
                                } 
                                ?>
                            </select>
                         <!--    <span class="text-danger"><?php echo form_error('grup');?></span> -->
                        <!-- </div> -->
                    </div>
            <div class="form-group">
                        <label for="grup" class="control-label"><span class="text-danger"></span>Role</label>
                      
                            <select name="grup" class="js-example-basic-single form-control">
                                <option value="">select role</option>
                                <?php 
                                foreach($all_grup as $g)
                                {
                                    $selected = ($g['grup'] == $barang['grup']) ? ' selected="selected"' : "";

                                    echo '<option value="'.$g['grup'].'" '.$selected.'>'.$g['grup_nama'].'</option>';
                                } 
                                ?>
                            </select>
                            <span class="text-danger"><?php echo form_error('grup');?></span>
                       
                    </div>
           
        <input type="hidden" name="id_aset_sub" value="<?php echo $id_aset_sub; ?>" />
        <button type="submit" class="btn btn-primary">Create</button> 
        <a href="<?php echo site_url('barang_aset_download') ?>" class="btn btn-default">Cancel</a>
    </form>
<script type="text/javascript">
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>