<?= $this->extend('layouts-pakar/app') ?>

<?= $this->section('title') ?>
  <title>Pemilihan Kemasan &mdash; Jenis Kemasan</title>
<?= $this->endSection() ?>

<?= $this->section('link') ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Jenis Kemasan</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Jenis Kemasan</h2>
            <p class="section-lead">Silahkan tambahkan, ubah maupun hapus data jenis-jenis kemasan.</p>
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
                        <form action="<?= base_url('jenis_kemasan_pakar_create'); ?>" method="POST">
                            <div class="form-group">
                                <label for="jenis_kemasan">Jenis Kemasan</label>
                                <input type="text" class="form-control" id="jenis_kemasan" name="jenis_kemasan">
                                <code>* Isi dengan jenis dan bahan, contoh : Plastik PVC</code>
                            </div>
                            <div class="form-group">
                                <label for="keterangan_kemasan">Keterangan Kemasan</label>
                                <textarea class="form-control" style="height: 150px" name="keterangan_kemasan" required></textarea>
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
                        <form action="<?= base_url('add_edit_pakar_data/' . ($data->id ?? '')); ?>" method="POST">
                            <div class="form-group">
                                <label for="jenis_kemasan">Jenis Kemasan</label>
                                <input type="text" class="form-control" id="jenis_kemasan" name="jenis_kemasan" value="<?php echo $data->jenis_kemasan ?? ''; ?>">
                                <code>* Isi dengan jenis dan bahan, contoh : Plastik PVC</code>
                            </div>
                            <div class="form-group">
                                <label for="keterangan_kemasan">Keterangan Kemasan</label>
                                <textarea class="form-control" style="height: 150px" name="keterangan_kemasan" required><?php echo $data->keterangan_kemasan ?? ''; ?></textarea>
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
                                <h4>Data Jenis Kemasan</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div> 
                            <table id="table" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Jenis Kemasan</th>
                                        <th>Keterangan Kemasan</th>
                                        <th>Created Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach ($dataa as $row) : ?>
                                        <tr>
                                            <td style="text-align: center"><?= $no++ ?></td>
                                            <td style="text-align: center">K<?= $row->id ?></td>
                                            <td><?= $row->jenis_kemasan ?></td>
                                            <td><?= $row->keterangan_kemasan ?></td>
                                            <td style="text-align: center"><?= $row->created_date ?></td>
                                            <td style="text-align: center">
                                                <a class="btn btn-warning" href="<?= base_url('add_edit_pakar_data/' . $row->id); ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?= base_url('jenis_kemasan_pakar/hapus/' . $row->id); ?>">HAPUS</a>
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

    </section>

    
</div>

<!-- Edit Contact Modal
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
        </div>
    </div>
</div> -->

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