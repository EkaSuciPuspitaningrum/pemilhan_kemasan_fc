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
        <?php if (!$jenisKemasanName): ?>
        <p>Tidak ada jenis kemasan yang sesuai dengan kriteria Anda.</p>
    <?php else: ?>
        <p>Jenis Kemasan yang Sesuai: <?php echo $jenisKemasanName; ?></p>
    <?php endif; ?>
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