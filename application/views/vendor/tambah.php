<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h5><center>Form Vendor Wedding Organizer</center></h5></div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_vendor">Id Vendor</label>
                            <input type="text" name="id_vendor" class="form-control" id="id_vendor">
                            <small class="form-text text-danger"><?= form_error('id_vendor'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_vendor">Vendor Wedding Organizer</label>
                            <input type="text" name="nama_vendor" class="form-control" id="nama_vendor">
                            <small class="form-text text-danger"><?= form_error('nama_vendor'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat_vendor">Alamat</label>
                            <input type="text" name="alamat_vendor" class="form-control" id="alamat_vendor">
                            <small class="form-text text-danger"><?= form_error('alamat_vendor'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">Telepon</label>
                            <input type="text" name="no_telp" class="form-control" id="no_telp">
                            <small class="form-text text-danger"><?= form_error('no_telp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_wo">Wedding Organizer</label>
                            <input type="text" name="nama_wo" class="form-control" id="nama_wo">
                            <small class="form-text text-danger"><?= form_error('nama_wo'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_jenis">Jenis Vendor</label>
                            <input type="text" name="nama_jenis" class="form-control" id="nama_jenis">
                            <small class="form-text text-danger"><?= form_error('nama_jenis'); ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>