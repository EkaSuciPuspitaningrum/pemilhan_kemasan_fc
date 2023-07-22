<?= $this->extend('layouts-user/app') ?>

<?= $this->section('title') ?>
  <title>DS &mdash; Dempster Shafer</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body">
                    10
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>News</h4>
                  </div>
                  <div class="card-body">
                    42
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Reports</h4>
                  </div>
                  <div class="card-body">
                    1,201
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Online Users</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Penjelasan</h4>
                  </div>
                  <div class="card-body">
                   <!-- ini diisi -->
                  </div>
                </div>
              </div>
            </div>
      </div>
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