<?= $this->extend('layouts-admin/app') ?>

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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <form action="" method="POST">
                                    <div class="form-group">
                                        <label>Jenis Kemasan</label>
                                        <select class="form-control">
                                            <option>Pilih Jenis Kemasan</option>
                                            <?php
                                                foreach($kemasan as $u)
                                                {
                                                    echo '<option value="'.$u->id.'">'.$u->jenis_kemasan.'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kriteria Produk</label>
                                        <select class="form-control">
                                            <option>Pilih Kriteria Produk</option>
                                            <?php
                                                foreach($kriteria as $u)
                                                {
                                                    echo '<option value="'.$u->id.'">'.$u->kriteria_produk.'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div style="text-align-last: center;">
                                        <button type="submit"
                                            class="btn btn-primary">Tambah</button>
                                     </div>
                            </form>

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
                                                <td><?php echo $r->jenis_kemasan ?></td>
                                                <td><?php echo $r->kriteria_produk ?></td>
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