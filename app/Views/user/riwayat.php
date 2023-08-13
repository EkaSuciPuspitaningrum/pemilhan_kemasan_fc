<?= $this->extend('layouts-user/app') ?>

<?= $this->section('title') ?>
  <title>DS &mdash; Dempster Shafer</title>
<?= $this->endSection() ?>

<?= $this->section('link') ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Riwayat Pencarian</h1>
        </div>
        <div class="section-body">
           
            <div class="row">
                <div class="col-12">

                    <div class="card">
                       
                        <div class="card-body">
                            <div> 
                            <table id="table" class="table">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">No</th>
                                        <th style="text-align: center">Nama Produk</th>
                                        <th style="text-align: center">Berat Produk</th>
                                        <th style="text-align: center">Ukuran Produk</th>
                                        <th style="text-align: center">Volume Produk</th>
                                        <th style="text-align: center">Jenis Kemasan</th>
                                        <th style="text-align: center">Persentase Pencarian</th>
                                        <th style="text-align: center">Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach ($dataa as $row) : ?>
                                        <tr style="text-align: center">
                                            <td><?= $no++ ?></td>
                                            <td><?= $row->namaproduk ?></td>
                                            <td><?= $row->beratproduk ?></td>
                                            <td><?= $row->ukuranproduk ?></td>
                                            <td><?= $row->volumeproduk ?></td>
                                            <td><?= $row->jenis_kemasan ?></td>
                                            <td><?= $row->persentase_perhitungan ?></td>
                                            <td><?= $row->created_date ?></td>

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