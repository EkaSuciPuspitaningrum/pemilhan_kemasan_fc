<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
        name="viewport">
    <title>Daftar &mdash; Pakar</title>

    <!-- General CSS Files -->
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" /> 
        
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="<?=base_url()?>/library/bootstrap-social/bootstrap-social.css">


  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/css/components.css">

</head>
<body>
<div id="app">
      <section class="section">
        <div class="container mt-5">
          <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div style="text-align: center">
                    <h4 class="text-dark font-weight-normal">Daftar <span class="font-weight-bold">Sebagai PAKAR</span>
                        </h4>
                        <p class="text-muted">Silahkan daftarkan diri Anda</p>
                    <br>
                </div>
              <div class="card card-primary">
                <div class="card-body">

                  <form method="POST" action="<?=base_url('registrasi_pakar')?>" enctype="multipart/form-data">

                    <div class="row">
                      <div class="form-group col-6">
                        <label for="first_name">Nama Pertama</label>
                        <input id="first_name" type="text" class="form-control" required name="first_name" autofocus="" spellcheck="false" data-ms-editor="true" required> 
                      </div>
                      <div class="form-group col-6">
                        <label for="last_name">Nama Terakhir</label>
                        <input id="last_name" type="text" class="form-control" name="last_name">
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" required name="email">
                        <div class="invalid-feedback">
                        </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="password" class="d-block">Password</label>
                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" required name="password">
                        <div id="pwindicator" class="pwindicator">
                          <div class="bar"></div>
                          <div class="label"></div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-6">
                        <label for="pendidikan">Pendidikan Terakhir</label>
                        <select name="pendidikan" id="pendidikan" class="form-control">
                          <option value="D4/S1/Setara">D4/S1/Setara</option>
                          <option value="S2/Setara">S2/Setara</option>
                          <option value="S3/Setara">S3/Setara</option>
                        </select>
                      </div>
                      <div class="form-group col-6">
                        <label for="instansi">Nama Instansi</label>
                        <input id="instansi" type="text" required class="form-control" name="instansi" autofocus="" spellcheck="false" data-ms-editor="true">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="dokumen">Curriculum Vitae (CV) / Daftar Riwayat Hidup</label>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" required id="dokumen" name="dokumen">
                        <label class="input-group-text" for="customFile">Upload</label>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Daftar
                      </button>
                    </div>
                    <div class="mt-5 text-center">
                      Sudah memiliki akun? <a href="<?php echo base_url('/login_pakar');?>">Login</a>

                  </div>
                  <br>
                  </form>
                </div>
              </div>
               <div class="text-small mt-5 text-center">
                    Copyright &copy; 2023 
                    <div class="bullet"></div> Sistem Pakar Kemasan Produk
                </div>
            </div>
          </div>
        </div>
      </section>
    </div>


   <!-- General JS Scripts -->
   <script src="<?=base_url()?>/library/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>/library/popper.js/dist/umd/popper.js"></script>
    <script src="<?=base_url()?>/library/tooltip.js/dist/umd/tooltip.js"></script>
    <script src="<?=base_url()?>/library/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>/library/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="<?=base_url()?>/library/moment/min/moment.min.js"></script>
    <script src="<?=base_url()?>/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="<?=base_url()?>/js/scripts.js"></script>
    <script src="<?=base_url()?>/js/custom.js"></script>
</body>

</html>