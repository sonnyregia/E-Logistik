<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<form action="<?php echo $action; ?>" method="post">
        <?php echo form_open('barang_aset_sub/edit/'.$barang['id_aset_sub']); ?>
        <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="id_merk_aset" class="control-label"><span class="text-danger">*</span>Merk</label>
                        <div class="form-group">
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
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="grup" class="control-label"><span class="text-danger">*</span>Role</label>
                        <div class="form-group">
                            <select name="grup" class="form-control">
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
                    </div>
                </div>
            </div>
           
        <input type="hidden" name="id_aset_sub" value="<?php echo $id_aset_sub; ?>" />
        <button type="submit" class="btn btn-primary">Create</button> 
        <a href="<?php echo site_url('barang_aset_sub') ?>" class="btn btn-default">Cancel</a>
    </form>
<script type="text/javascript">
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>