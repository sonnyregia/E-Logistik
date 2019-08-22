<form action="barang_aset_pinjam/create" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="varchar">Nama Pegawai <?php echo form_error('nama_pegawai') ?></label>
            <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" placeholder="Nama Pegawai" value="<?php echo $nama_pegawai; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Jabatan<?php echo form_error('jabatan') ?></label>
            <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Aset Barang </label>
            <select name="kode_aset" class="form-control">
                <option value="" >Aset Barang</option>
                <?php 
                $sql = $this->db->get('barang_aset');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->kode_aset ?>"><?php echo $row->nama_aset ?></option>
            <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="varchar">Keterangan <?php echo form_error('keterangan') ?></label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $keterangan; ?>" />
        </div>
        <input type="hidden" name="id_aset_pinjam" value="<?php echo $id_aset_pinjam; ?>" /> 
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo site_url('barang_aset_pinjam') ?>" class="btn btn-default">Cancel</a>
    </form>