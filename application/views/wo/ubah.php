<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Wedding Organizer
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_wo" value="<?= $data_wo['id_wo']; ?>">
                        
                        <div class="form-group">
                            <label for="nama_wo">Wedding Organizer</label>
                            <input type="text" name="nama_wo" class="form-control" id="nama_wo" value="<?= $data_wo['nama_wo']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_wo'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat_wo">Alamat</label>
                            <input type="text" name="alamat_wo" class="form-control" id="alamat_wo" value="<?= $data_wo['alamat_wo']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat_wo'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">Telepon</label>
                            <input type="text" name="no_telp" class="form-control" id="no_telp" value="<?= $data_wo['no_telp']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_telp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="layanan">Layanan</label>
                            <input type="text" name="layanan" class="form-control" id="layanan" value="<?= $data_wo['layanan']; ?>">
                            <small class="form-text text-danger"><?= form_error('layanan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kab_kota">Kabupaten/Kota</label>
                            <input type="text" name="kab_kota" class="form-control" id="kab_kota" value="<?= $data_wo['kab_kota']; ?>">
                            <small class="form-text text-danger"><?= form_error('kab_kota'); ?></small>
                        </div>
                        
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>