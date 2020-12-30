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
      <h3><center> Data Wedding Organizer</center></h3>
        <a href="<?= base_url(); ?>index.php/data_wo/tambah" class="btn btn-primary">Tambah</a>
      <table class='table table-bordered'>
      <thead>
				<tr>
					<th>WEDDING ORGANIZER</th>
					<th>ALAMAT</th>
					<th>TELEPON</th>
                    <th>LAYANAN</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>AKSI</th>
				</tr>
			</thead>
        <?php foreach ($data_wo as $wwo) : ?>
            <tbody>
                <tr>
                <td> <?= $wwo['nama_wo']; ?> </td>
                <td> <?= $wwo['alamat_wo']; ?> </td>  
                <td> <?= $wwo['no_telp']; ?> </td>  
                <td> <?= $wwo['layanan']; ?> </td>
                <td> <?= $wwo['kab_kota']; ?> </td> 
                <td> <a href="<?= base_url(); ?>index.php/data_wo/hapus/<?=  $wwo['id_wo']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </div>
    </div>

</div>