<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <!-- <input type="hidden" class="form-control" name="kodeurut" value="<?php echo $kodeurut; ?>" readonly/> -->
        
            <label for="varchar">Nama Aset <?php echo form_error('nama_aset') ?></label>
            <select name="id_aset" class="js-example-basic-single form-control">
                <option value="<?php echo $id_aset ?>">Nama Aset</option>
                <?php 
                $sql = $this->db->get('barang_aset');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->id_aset ?>"><?php echo $row->nama_aset ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">Uraian Aset <?php echo form_error('detail_aset') ?></label>
            <input type="text" class="form-control" name="detail_aset" placeholder="Uraian Aset" value="<?php echo $detail_aset; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">NUP Aset <?php echo form_error('seri') ?></label>
            <input type="text" class="form-control" name="seri" id="seri" placeholder="NUP Aset" value="<?php echo $seri; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Merk Aset <?php echo form_error('merk_aset') ?></label>
            <select name="id_merk_aset" class="js-example-basic-single form-control">
                <option value="<?php echo $id_merk_aset ?>">Merk</option>
                <?php 
                $sql = $this->db->get('merk_aset');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->id_merk_aset ?>"><?php echo $row->merk_aset ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">Satuan Aset <?php echo form_error('satuan_aset') ?></label>
            <select name="id_satuan_aset" class="js-example-basic-single form-control">
                <option value="<?php echo $id_satuan_aset ?>">Satuan</option>
                <?php 
                $sql = $this->db->get('satuan_aset');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->id_satuan_aset ?>"><?php echo $row->satuan_aset ?></option>
            <?php } ?>
            </select>
        </div>
       <!--  <div class="form-group">
            <label for="date">Tgl Input <?php echo form_error('tanggal_input') ?></label>
            <input type="date" class="form-control" name="tanggal_input" id="tanggal_input" placeholder="Tanggal Input" value="<?php echo $tanggal_input; ?>" />
        </div> -->
        <div class="form-group">
            <label for="varchar">Tahun Peroleh <?php echo form_error('tahun') ?></label>
            <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun" value="<?php echo $tahun; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Penguasan Barang <?php echo form_error('penguasaan') ?></label>
            <input type="text" class="form-control" name="penguasaan" id="penguasaan" placeholder="Penguasaan" value="<?php echo $penguasaan; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Keterangan <?php echo form_error('keterangan') ?></label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $keterangan; ?>" />
        </div>
        <input type="hidden" name="id_aset_sub" value="<?php echo $id_aset_sub; ?>" />
        <input type="hidden" name="grup" value="<?php echo $grup; ?>" />
        <input type="hidden" name="tanggal_input" value="<?php echo date('d F Y') ?>">  
        <button type="submit" class="btn btn-primary">Create</button> 
        <a href="<?php echo site_url('barang_aset_sub') ?>" class="btn btn-default">Cancel</a>
    </form>
<script type="text/javascript">
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>