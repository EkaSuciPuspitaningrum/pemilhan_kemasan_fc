<?= $this->extend('layouts-pakar/app') ?>

<?= $this->section('title') ?>
  <title>Pemilhan Kemasan &mdash; Pengetahuan</title>
<?= $this->endSection() ?>

<?= $this->section('link') ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Basis Pengetahuan</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Basis Pengetahuan</h2>
            <p class="section-lead">Silahkan tambahkan, ubah maupun hapus data pengetahuan.</p>
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
            <?php if(session()->getFlashdata('gagal')):?>
                    <div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        <?= session()->getFlashdata('gagal') ?>
                      </div>
                </div>
            <?php endif;?>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                    <div class="card-header">
                        <h4>Tambah Data</h4>
                    </div>
                        <div class="card-body">   
                        <form action="<?= base_url('basis_pengetahuan_pakar_create') ?>" method="POST">
                            <div class="form-group">
                                <label>Jenis Kemasan</label>
                                <select class="form-control" name="jenis_kemasan_id">
                                    <option value="">Pilih Jenis Kemasan</option>
                                    <?php foreach ($kemasan as $u) : ?>
                                        <option value="<?= $u->id ?>"><?= $u->jenis_kemasan ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kriteria Produk</label>
                                <select class="form-control" name="kriteria_produk_id">
                                    <option value="">Pilih Kriteria Produk</option>
                                    <?php foreach ($kriteria as $u) : ?>
                                        <option value="<?= $u->id ?>"><?= $u->kriteria_produk ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div style="text-align-last: center;">
                                <button type="submit" class="btn btn-primary">Tambah</button>
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
                        <form action="<?= base_url('edit_basis_pengetahuan/' . ($dataa->id ?? '')); ?>" method="POST">
                            <div class="form-group">
                                <label>Jenis Kemasan</label>
                                <select class="form-control" name="jenis_kemasan_id">
                                    <option>Pilih Jenis Kemasan</option>
                                    <?php foreach ($kemasan as $u): ?>
                                        <?php $isSelected = ($dataa->jenis_kemasan_id ?? '') == $u->id; ?>
                                        <option value="<?= $u->id ?>" <?= $isSelected ? 'selected' : '' ?>>
                                            <?= $u->jenis_kemasan ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kriteria Produk</label>
                                <select class="form-control" name="kriteria_produk_id">
                                    <option>Pilih Kriteria Produk</option>
                                    <?php foreach ($kriteria as $u): ?>
                                        <?php $isSelected = ($dataa->kriteria_produk_id ?? '') == $u->id; ?>
                                        <option value="<?= $u->id ?>" <?= $isSelected ? 'selected' : '' ?>>
                                            <?= $u->kriteria_produk ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div style="text-align-last: center;">
                                <button type="submit" class="btn btn-warning">Edit</button>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
                    <br>
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h4>Data Pengetahuan</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div> 
                                <table id="table" class="table">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center" scope="col">#</th>
                                            <th style="text-align: center" scope="col">Kode Pengetahuan</th>
                                            <th style="text-align: center" scope="col">Jenis Kemasan</th>
                                            <th style="text-align: center" scope="col">Kriteria Produk</th>
                                            <th style="text-align: center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                    <?php 
                                            $no = 1;
                                            foreach ($data as $r) : ?>
                                                <tr>
                                                <td style="text-align: center"><?php echo $no++ ?></td>
                                                <td style="text-align: center">BP<?php echo $r->id ?></td>
                                                <td>
                                                    <?php
                                                        $jenisKemasan = $jeniskemasanModel->find($r->jenis_kemasan_id);
                                                        if ($jenisKemasan) {
                                                            echo $jenisKemasan->jenis_kemasan;
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        $kriteriaProduk = $kriteriaprodukModel->find($r->kriteria_produk_id);
                                                        if ($kriteriaProduk) {
                                                            echo $kriteriaProduk->kriteria_produk;
                                                        }
                                                    ?>
                                                </td>
                                                <td style="text-align: center">
                                                    <a class="btn btn-warning" href="<?php echo base_url('edit_basis_pengetahuan/'.$r->id);?>">EDIT</a>
                                                    <a class="btn btn-danger" href="<?php echo base_url('basis_pengetahuan_pakar/hapus/'.$r->id);?>">HAPUS</a>
                                                </td>
                                                </tr>
                                            <?php endforeach ?>
                                    </tbody>
                                </table>
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