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
        <h2 class="section-title">Data Pakar</h2>
            <p class="section-lead">Berikut data pakar.</p>
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
                                <form>
                                    <div class="form-group col-6" hidden>
                                            <label for="id">Id</label>
                                            <input type="text" class="form-control" id="id" name="id" value="<?php echo $data->id ?? ''; ?>" readonly>
                                        </div>
                                    <div class="row col-12">
                                        <div class="form-group col-6">
                                            <label for="first_name">Nama Pertama</label>
                                            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $data->first_name ?? ''; ?>" readonly>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="last_name">Nama Terakhir</label>
                                            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $data->last_name ?? ''; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row col-12">
                                        <div class="form-group col-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $data->email ?? ''; ?>" readonly>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password">Password</label>
                                            <input type="text" class="form-control" id="password" name="password" value="<?php echo $data->password ?? ''; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row col-12">
                                        <div class="form-group col-6">
                                        <label for="pendidikan">Pendidikan Terakhir</label>
                                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?php echo $data->pendidikan ?? ''; ?>" readonly>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="instansi">Instansi</label>
                                            <input type="text" class="form-control" id="instansi" name="instansi" value="<?php echo $data->instansi ?? ''; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row col-12">
                                        <div class="form-group col-12">
                                            <label for="dokumen">Curriculum Vitae (CV) / Daftar Riwayat Hidup</label>
                                            <code><p>Dokumen saat ini: <?php echo $data->dokumen ?? ''; ?></p></code>
                                            <div id="pdf-container">
                                                <?php if (!empty($data->dokumen)) : ?>
                                                    <embed src="<?= base_url('uploads/' . $data->dokumen); ?>" type="application/pdf" width="100%" height="500px" />
                                                <?php else : ?>
                                                    <p>No PDF document available.</p>
                                                <?php endif; ?>
                                            </div>

                    
                                         </div>
                                    </div>
                                
                                <div style="text-align-last: center;">
                                    <a href="<?= base_url('data_pakar'); ?>" class="btn btn-primary">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
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