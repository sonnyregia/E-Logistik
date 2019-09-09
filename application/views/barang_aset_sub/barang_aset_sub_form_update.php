<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Nama Aset <?php echo form_error('nama_aset') ?></label>
            <select name="id_aset" class="form-control">
                <option value="<?php echo $id_aset ?>"><?php echo $id_aset ?></option>
                <?php 
                $sql = $this->db->get('barang_aset');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->id_aset ?>"><?php echo $row->nama_aset ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">Seri Aset <?php echo form_error('seri') ?></label>
            <input type="text" class="form-control" name="seri" id="seri" placeholder="Seri Aset" value="<?php echo $seri; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Merk Aset <?php echo form_error('merk_aset') ?></label>
            <select name="merk_aset" class="form-control">
                <option value="<?php echo $merk_aset ?>"><?php echo $merk_aset ?></option>
                <?php 
                $sql = $this->db->get('merk_aset');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->merk_aset ?>"><?php echo $row->merk_aset ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">Satuan Aset <?php echo form_error('satuan_aset') ?></label>
            <select name="satuan_aset" class="form-control">
                <option value="<?php echo $satuan_aset ?>"><?php echo $satuan_aset ?></option>
                <?php 
                $sql = $this->db->get('satuan_aset');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->satuan_aset ?>"><?php echo $row->satuan_aset ?></option>
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
       <!--  <div class="form-group">
            <label for="varchar">Penguasan Barang <?php echo form_error('penguasaan') ?></label>
            <input type="text" class="form-control" name="penguasaan" id="penguasaan" placeholder="Penguasaan" value="<?php echo $penguasaan; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Keterangan <?php echo form_error('keterangan') ?></label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $keterangan; ?>" />
        </div> -->
        <input type="hidden" name="id_aset_sub" value="<?php echo $id_aset_sub; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('barang_aset_sub') ?>" class="btn btn-default">Cancel</a>
    </form>