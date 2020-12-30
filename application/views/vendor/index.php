<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>
    </div>

    <div class="container">
      <h3><center> Data Vendor Wedding Organizer</center></h3>
        <a href="<?= base_url(); ?>index.php/data_vendor/tambah" class="btn btn-primary">Tambah</a>
      <table class='table table-bordered'>
      <thead>
				<tr>
                    <th>VENDOR WEDDING </th>
                    <th>ALAMAT</th>
                    <th>TELEPON</th>
					<th>WEDDING ORGANIZER</th>
                    <th>JENIS VENDOR</th>
                    <th>AKSI</th>
				</tr>
			</thead>
        <?php foreach ($data_vendor as $vr) : ?>
            <tbody>
                <tr>
                <td> <?= $vr['nama_vendor']; ?> </td>
                <td> <?= $vr['alamat_vendor']; ?> </td>  
                <td> <?= $vr['no_telp']; ?> </td>  
                <td> <?= $vr['nama_wo']; ?> </td>
                <td> <?= $vr['nama_jenis']; ?> </td> 
                <td> <a href="<?= base_url(); ?>index.php/data_vendor/hapus/<?=  $vr['id_vendor']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </div>
    </div>

</div>