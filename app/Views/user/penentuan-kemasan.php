<?= $this->extend('layouts-user/app') ?>

<?= $this->section('title') ?>
<title>Pencarian Kemasan &mdash; Forward Chaining</title>
<?= $this->endSection() ?>

<?= $this->section('link') ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pencarian Kemasan</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Data Produk</h2>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Masukkan Data Produk</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="namaproduk">Nama Produk</label>
                                    <input type="text"
                                           class="form-control"
                                           id="namaproduk" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="beratproduk">Berat Produk</label>
                                    <input type="text"
                                           class="form-control"
                                           id="beratproduk" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="ukuranproduk">Ukuran Produk</label>
                                    <input type="text"
                                           class="form-control"
                                           id="ukuranproduk" required>
                                    <code>Panjang x Lebar x Tinggi (cm), Jika cair kosongkan!</code>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="volumeproduk">Volume Produk</label>
                                    <input type="number"
                                           class="form-control"
                                           id="volumeproduk" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Kriteria Produk</label>
                                    <table id="table" class="table table-hover table-bordered mb-3" >
                                        <thead class="bg-primary">
                                            <tr>
                                                <th class="text-white text-center">No</th>
                                                <th class="text-white text-center">Kriteria Produk</th>
                                                <th class="text-white text-center">Pilih Kriteria Produk</th>

                                                
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                            
                                                <?php 
                                            $no = 1;
                                            foreach ($kriteria as $r) : ?>
                                                <tr>
                                                <td style="text-align: center"><?php echo $no++ ?></td>
                                                <td><?php echo $r->kriteria_produk ?></td>
                                                <td style="text-align: center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck1">
                                                </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <br> <br>
                                    <div class="d-grid gap-2 d-md-flex justify-content-center">
                                        <button class="btn btn-primary" type="submit"><i class="fas fa-solid fa-magnifying-glass"></i>  Analisis</button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
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