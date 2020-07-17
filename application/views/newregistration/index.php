<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <div>
                <a class="btn btn-info" href="<?= base_url(); ?>driver/tambah">
                    <i class="mdi mdi-plus-circle-outline"></i>Tambah Driver</a>
            </div>
            <br>
            <h4 class="card-title">Driver Baru Daftar</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing4" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>driver Id</th>
                                    <th>Photo Profil</th>
                                    <th>Nama</th>
                                    <th>No hp</th>
                                    <th>Ulasan</th>
                                    <th>Layanan Job</th>
                                    <th>Status</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($driver as $drv) {
                                    if ($drv['status'] == 0) { ?>
                                        <tr>
                                            <td>
                                                <?= $i ?>
                                            </td>
                                            <td><?= $drv['id'] ?></td>
                                            <td>
                                                <img src="<?= base_url('images/fotodriver/') . $drv['foto']; ?>">
                                            </td>
                                            <td><?= $drv['nama_driver'] ?></td>
                                            <td><?= $drv['no_telepon'] ?></td>
                                            <td><?= number_format($drv['rating'], 1) ?></td>
                                            <td><?= $drv['driver_job'] ?></td>
                                            <td>
                                                <?php if ($drv['status'] == 3) { ?>
                                                    <label class="badge badge-dark">Banned</label>
                                                <?php } elseif ($drv['status'] == 0) { ?>
                                                    <label class="badge badge-secondary text-dark">Baru Daftar</label>
                                                    <?php } else {
                                                    if ($drv['status_job'] == 1) { ?>
                                                        <label class="badge badge-primary">Aktif</label>
                                                    <?php }
                                                    if ($drv['status_job'] == 2) { ?>
                                                        <label class="badge badge-info">Pick'up</label>
                                                    <?php }
                                                    if ($drv['status_job'] == 3) { ?>
                                                        <label class="badge badge-success">On</label>
                                                    <?php }
                                                    if ($drv['status_job'] == 4) { ?>
                                                        <label class="badge badge-danger">Non Aktif</label>
                                                <?php }
                                                } ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url(); ?>driver/detail/<?= $drv['id'] ?>">
                                                    <button class="btn btn-outline-info mr-2">Lihat</button>
                                                </a>
                                                <a href="<?= base_url(); ?>newregistration/confirm/<?= $drv['id'] ?>">
                                                    <button class="btn btn-outline-primary mr-2">Konfirmasi</button>
                                                </a>

                                            </td>
                                        </tr>
                                <?php $i++;
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>