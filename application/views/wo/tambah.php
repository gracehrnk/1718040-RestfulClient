<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h5><center>Form Wedding Organizer</center></h5></div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_wo">Id Wedding Organizer</label>
                            <input type="text" name="id_wo" class="form-control" id="id_wo">
                            <small class="form-text text-danger"><?= form_error('id_wo'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_wo">Wedding Organizer</label>
                            <input type="text" name="nama_wo" class="form-control" id="nama_wo">
                            <small class="form-text text-danger"><?= form_error('nama_wo'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat_wo">Alamat</label>
                            <input type="text" name="alamat_wo" class="form-control" id="alamat_wo">
                            <small class="form-text text-danger"><?= form_error('alamat_wo'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">Telepon</label>
                            <input type="text" name="no_telp" class="form-control" id="no_telp">
                            <small class="form-text text-danger"><?= form_error('no_telp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="layanan">Layanan</label>
                            <input type="text" name="layanan" class="form-control" id="layanan">
                            <small class="form-text text-danger"><?= form_error('layanan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kab_kota">Kabupaten/Kota</label>
                            <input type="text" name="kab_kota" class="form-control" id="kab_kota">
                            <small class="form-text text-danger"><?= form_error('kab_kota'); ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>