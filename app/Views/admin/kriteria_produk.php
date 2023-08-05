<?= $this->extend('layouts-admin/app') ?>

<?= $this->section('title') ?>
  <title>Pemilhan Kemasan &mdash; Kriteria Produk</title>
<?= $this->endSection() ?>

<?= $this->section('link') ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kriteria Produk</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Kriteria Produk</h2>
            <p class="section-lead">Silahkan tambahkan, ubah maupun hapus data kriteria-kriteria produk.</p>
            <br>
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
                            <form action="<?php echo base_url('kriteria_produk');?>" method="POST">
                                    <div class="form-group">
                                        <label for="kriteriaProduk">Kriteria Produk</label>
                                        <input type="text"
                                            class="form-control"
                                            id="kriteria_produk" name="kriteria_produk">
                                    </div>
                                    <div style="text-align-last: center;">
                                        <button type="submit"
                                            class="btn btn-primary">Tambah</button>
                                     </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('kriteria_produk');?>" method="POST">
                                    <div class="form-group">
                                        <label for="kriteriaProduk">Kriteria Produk</label>
                                        <input type="text"
                                            class="form-control"
                                            id="kriteria_produk" name="kriteria_produk">
                                    </div>
                                    <div style="text-align-last: center;">
                                        <button type="submit"
                                            class="btn btn-warning">Edit</button>
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
                                <h4>Data Kemasan</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div> 
                                <table id="table" class="table">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center" scope="col">#</th>
                                            <th style="text-align: center" scope="col">Kode Kriteria</th>
                                            <th style="text-align: center" scope="col">Kriteria Produk</th>
                                            <th style="text-align: center" scope="col">Tanggal Pembuatan</th>
                                            <th style="text-align: center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                            <?php 
                                            $no = 1;
                                            foreach ($kriteria as $r) : ?>
                                                <tr>
                                                <td style="text-align: center"><?php echo $no++ ?></td>
                                                <td style="text-align: center">P<?php echo $r->id ?></td>
                                                <td><?php echo $r->kriteria_produk ?></td>
                                                <td style="text-align: center"><?php echo $r->created_date ?></td>
                                                <td style="text-align: center">
                                                <button class="btn btn-warning" href="<?php echo base_url('kriteria_produk/edit/'.$r->id);?>">EDIT</button>
                                                    <button class="btn btn-danger" href="<?php echo base_url('kriteria_produk/hapus/'.$r->id);?>">HAPUS</button>
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