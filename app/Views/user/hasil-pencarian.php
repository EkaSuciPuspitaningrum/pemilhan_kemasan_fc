<?= $this->extend('layouts-user/app') ?>

<?= $this->section('title') ?>
  <title>Pencarian Kemasan &mdash; Forward Chaining</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Hasil Pencarian Kemasan</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Pilihan Pengguna</h4>
                        </div>
                        <div class="card-body">
                            <div class="pilihan" class="mt-4">
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th>No</th>
                                            <th>Kriteria Produk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($selectedKriteriaNames as $kriteriaa) :
                                        ?>
                                                <tr>
                                                <td style="text-align: center"><?= $no++ ?></td>
                                                <td><?= $kriteriaa ?></td> 
                                                </tr>
                                            <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                                <div class="row bg-light rounded-sm mt-4">
                                    <div class="col-md p-3">
                                        <h3 style="font-size: 25px" class="mb-4">Hasil Rekomendasi</h3>
                                        <p>Berdasarkan daftar kriteria produk yang dipilih, jenis kemasan yang yang cocok dengan produk Anda :</p>
                                            <strong><h4 style="font-size: 22px" class="mb-3 text-success"><?= $jenisKemasanNameWithHighestPercentage ?></h4></strong>
                                            <p>Jenis kemasan dan persentase hitungan: <?= $highestPercentageFormatted ?></p>
                                    </div>
                                </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <h4>Penjelasan Kemasan :</h4>
                        </div>
                        <div class="card-body">
                            <p><?= $keteranganKemasan ?></p>
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
  <script src="<?=base_url()?>/stisla/assets/modules/jquery.min.js"></script>
  <script src="<?=base_url()?>/stisla/assets/modules/popper.js"></script>
  <script src="<?=base_url()?>/stisla/assets/modules/tooltip.js"></script>
  <script src="<?=base_url()?>/stisla/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/stisla/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?=base_url()?>/stisla/assets/modules/moment.min.js"></script>
  <script src="<?=base_url()?>/stisla/assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="<?=base_url()?>/stisla/assets/modules/jquery.sparkline.min.js"></script>
  <script src="<?=base_url()?>/stisla/assets/modules/chart.min.js"></script>
  <script src="<?=base_url()?>/stisla/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>/stisla/assets/modules/summernote/summernote-bs4.js"></script>
  <script src="<?=base_url()?>/stisla/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?=base_url()?>/stisla/assets/js/page/index.js"></script>
  
  <!-- Template JS File -->
  <script src="<?=base_url()?>/stisla/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/stisla/assets/js/custom.js"></script>
<?= $this->endSection() ?>