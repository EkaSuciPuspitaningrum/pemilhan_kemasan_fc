<?= $this->extend('layouts-admin/app') ?>

<?= $this->section('title') ?>
  <title>Pemilihan Kemasan &mdash; Data Pakar</title>
<?= $this->endSection() ?>

<?= $this->section('link') ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Admin</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Data Calon Pakar</h2>
            <p class="section-lead">Silahkan cek data calon pakar, jika sesuai silahkan approve.</p>
            <?php if(session()->getFlashdata('sukses')):?>
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        <?= session()->getFlashdata('sukses') ?>
                    </div>
                </div>
            <?php endif;?>
            <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                </div>
            <?php endif;?>
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4>Data Calon Pakar</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <table id="table" class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pertama</th>
                                                <th>Nama Terakhir</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Pendidikan Terakhir</th>
                                                <th>Instansi</th>
                                                <th>Dokumen (CV)</th>
                                                <th>Created At</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($data_calon as $row) : ?>
                                                <tr>
                                                    <td style="text-align: center"><?= $no++ ?></td>
                                                    <td><?= $row->first_name ?></td>
                                                    <td><?= $row->last_name ?></td>
                                                    <td><?= $row->email ?></td>
                                                    <td><?= $row->password ?></td>
                                                    <td><?= $row->pendidikan ?></td>
                                                    <td><?= $row->instansi ?></td>
                                                    <td><?= $row->dokumen ?></td>
                                                    <td style="text-align: center"><?= $row->created_date ?></td>
                                                    <td>
                                                        <a class="btn btn-warning" href="<?= base_url('show_data_calon/' . $row->id); ?>">LIHAT DATA</a>
                                                        <a class="btn btn-danger" href="<?= base_url('data_calon_pakar/hapus/' . $row->id); ?>">HAPUS</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="section-title">Data Pakar</h2>
            <p class="section-lead">Silahkan tambahkan, ubah maupun hapus data pakar.</p>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Data</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('data_pakar_create'); ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                        <label for="first_name">Nama Pertama</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Nama Terakhir</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name">
                                    </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" id="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan">Pendidikan Terakhir</label>
                                    <select name="pendidikan" id="pendidikan" class="form-control">
                                        <option value="D4/S1/Setara">D4/S1/Setara</option>
                                        <option value="S2/Setara">S2/Setara</option>
                                        <option value="S3/Setara">S3/Setara</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="instansi">Instansi</label>
                                    <input type="text" class="form-control" id="instansi" name="instansi">
                                </div>
                                <div class="form-group">
                                    <label for="dokumen">Curriculum Vitae (CV) / Daftar Riwayat Hidup</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" required id="dokumen" name="dokumen">
                                        <label class="input-group-text" for="customFile">Upload</label>
                                    </div>
                                </div>
                                <div style="text-align-last: center;">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ubah Data</h4>
                        </div>
                        <div class="card-body">
                        <form action="<?= base_url('add_edit_data_pakar/'. ($data->id ?? '')); ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                        <label for="first_name">Nama Pertama</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $data->first_name ?? ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Nama Terakhir</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $data->last_name ?? ''; ?>">
                                    </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $data->email ?? ''; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $data->password ?? ''; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan">Pendidikan Terakhir</label>
                                    <select name="pendidikan" id="pendidikan" class="form-control">
                                        <option value="D4/S1/Setara" <?= ($data->pendidikan ?? '') === 'D4/S1/Setara' ? 'selected' : '' ?>>D4/S1/Setara</option>
                                        <option value="S2/Setara" <?= ($data->pendidikan ?? '') === 'S2/Setara' ? 'selected' : '' ?>>S2/Setara</option>
                                        <option value="S3/Setara" <?= ($data->pendidikan ?? '') === 'S3/Setara' ? 'selected' : '' ?>>S3/Setara</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="instansi">Instansi</label>
                                    <input type="text" class="form-control" id="instansi" name="instansi" value="<?php echo $data->instansi ?? ''; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="dokumen">Curriculum Vitae (CV) / Daftar Riwayat Hidup</label>
                                    <code><p>Dokumen saat ini: <?php echo $data->dokumen ?? ''; ?></p></code>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" required id="dokumen" name="dokumen">
                                        <label class="input-group-text" for="customFile">Upload</label>
                                    </div>
                                </div>
                                <div style="text-align-last: center;">
                                    <button type="submit" class="btn btn-warning">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-12">
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4>Data Pakar</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <table id="table2" class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pertama</th>
                                                <th>Nama Terakhir</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Pendidikan Terakhir</th>
                                                <th>Instansi</th>
                                                <th>Dokumen (CV)</th>
                                                <th>Created At</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($data_pakar as $row) : ?>
                                                <tr>
                                                    <td style="text-align: center"><?= $no++ ?></td>
                                                    <td><?= $row->first_name ?></td>
                                                    <td><?= $row->last_name ?></td>
                                                    <td><?= $row->email ?></td>
                                                    <td><?= $row->password ?></td>
                                                    <td><?= $row->pendidikan ?></td>
                                                    <td><?= $row->instansi ?></td>
                                                    <td><?= $row->dokumen ?></td>
                                                    <td style="text-align: center"><?= $row->created_date ?></td>
                                                    <td style="text-align: center">
                                                        <a class="btn btn-success" href="<?= base_url('show_data_pakar/' . $row->id); ?>">LIHAT DATA</a>
                                                        <a class="btn btn-warning" href="<?= base_url('add_edit_data_pakar/' . $row->id); ?>">EDIT</a>
                                                        <a class="btn btn-danger" href="<?= base_url('data_pakar/hapus/' . $row->id); ?>">HAPUS</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
  <!-- General JS Scripts -->
  <script src="<?=base_url()?>/assets/modules/jquery.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/popper.js"></script>
  <script src="<?=base_url()?>/assets/modules/tooltip.js"></script>
  <script src="<?=base_url()?>/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/moment.min.js"></script>
  <script src="<?=base_url()?>/assets/js/stisla.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  <script src="<?=base_url()?>/assets/js/tabel.js"></script>
  <script src="<?=base_url()?>/assets/js/tabel2.js"></script>
  <script src="../assets/js/page/bootstrap-modal.js"></script>

  <!-- JS Libraies -->
  <script src="<?=base_url()?>/assets/modules/jquery.sparkline.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/chart.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/summernote/summernote-bs4.js"></script>
  <script src="<?=base_url()?>/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="<?=base_url()?>/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/assets/js/custom.js"></script>
<?= $this->endSection() ?>