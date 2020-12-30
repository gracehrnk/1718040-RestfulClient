<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Wedding Organizer
                </div>
                <div class="card-body">
                <table class="table table-hover">
                        <tbody>
                        <tr>
                                <th scope="row">Id Wedding Organizer</th>
                                <td>:</td>
                                <td><?= $data_wo['id_wo'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Wedding Organizer</th>
                                <td>:</td>
                                <td><?= $data_wo['nama_wo'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>:</td>
                                <td><?= $data_wo['alamat_wo'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Telepon</th>
                                <td>:</td>
                                <td><?= $data_wo['no_telp'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Layanan</th>
                                <td>:</td>
                                <td><?= $data_wo['layanan'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Kabupaten/Kota</th>
                                <td>:</td>
                                <td><?= $data_wo['kab_kota'] ?></td>
                            </tr>

                        </tbody>
                    </table>
                    <a href="<?= base_url(); ?>index.php/data_wo" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>