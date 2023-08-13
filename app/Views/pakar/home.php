<?= $this->extend('layouts-pakar/app') ?>

<?= $this->section('title') ?>
  <title>FC &mdash; Forward Chaining</title>
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
        
        <section class="section">

        <div class="section-body">
        <h2 class="section-title">Informasi</h2>
          <p class="section-lead">Informasi mengenai penerapan dari langkah-langkah perhitungan metode FC. 
            Untuk dapat melihatnya, silahkan klik menu-menu leftbar disamping</p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                   <div class="card-header">
                    <h4>Pengertian Forward Chaining!</h4>
                  </div>
                  <div class="card-body" style="text-align: justify;">
                  <p>Forward chaining adalah contoh konsep umum dari pemikiran yang dikendalikan oleh data (data driver) 
                      untuk mencapai suatu kesimpulan atau pemecahan masalah dengan mengumpulkan dan menggabungkan fakta-fakta yang disimpan 
                      dalam basis pengetahuan. Basis pengetahuan terdiri dari aturan-aturan (rules) dan hubungan antara fakta yang diorganisir 
                      untuk membantu sistem dalam proses inferensi. Pada penelitian ini aturan (rules) tersebut dituliskan 
                      dalam pernyataan IF [premis] sebagai informasi, data atau bukti dan 
                      THEN [konklusi] sebagai kesimpulan berupa tujuan, hipotesa atau penjelasan.</p>
                    <p>Metode forward chaining dimulai dari data menuju tujuan, 
                      dari bukti menuju hipotesa atau dari kriteria menuju jenis. 
                      Berikut merupakan alur kerja forward chaining </p>
                  <ol>
                    <li><p>Matching, setiap rules yang ada pada basis pengetahuan akan dibandingkan 
                      dengan fakta-fakta yang diketahui untuk mencari rules mana yang memenuhi premis.</p></li>
                    <li><p>Conflict Resolution, bertugas mencari rules mana yang memiliki prioritas tertinggi yang berpotensi 
                      untuk dieksekusi. Langkah ini didapatkan dari langkah pertama yang memungkinkan menghasilkan suatu kondisi.</p></li>
                    <li><p>Execution, proses ini menghasilkan dua kemungkinan, yaitu fakta baru diturunkan 
                      dan ditambahkan fact base atau rules baru dihasilkan dan ditambahkan ke knowledge base.</p></li>
                  </ol>
                  </div>
                </div>
              </div>
            </div> 
      </div>
        </section> 

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