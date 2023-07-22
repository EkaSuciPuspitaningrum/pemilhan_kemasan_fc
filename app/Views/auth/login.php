<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
        name="viewport">
    <title>Login &mdash; Sistem Pakar Pemilihan Kemasan Produk</title>

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
            <div class="d-flex align-items-stretch flex-wrap">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <br>
                    <div class="m-3 p-4">
                        <h4 class="text-dark font-weight-normal">Selamat Datang di <span class="font-weight-bold">Web Sistem Pakar Untuk Pemilihan Kemasan Produk</span>
                        </h4>
                        <p class="text-muted">Sebelum memulai, Anda harus masuk atau mendaftar jika Anda belum memiliki akun</p>
                        <br>
                        <?php if(session()->getFlashdata('msg')):?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                        <?php endif;?>
                         <form method="POST"
                            class="needs-validation"
                            novalidate="">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email"
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    tabindex="1"
                                    required
                                    autofocus>   
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password"
                                        class="control-label">Password</label>
                                </div>
                                <input id="password"
                                    type="password"
                                    class="form-control"
                                    name="password"
                                    tabindex="2"
                                    required >
                            </div>
                            <div class="form-group text-center">
                                <button type="submit"
                                    class="btn btn-primary btn-lg btn-icon icon-right"
                                    tabindex="4">
                                    Login
                                </button>
                            </div>
                        </form>

                        <div class="text-small mt-5 text-center">
                            Copyright &copy; 2023 
                            <div class="bullet"></div> Sistem Pakar Kemasan Produk
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 min-vh-101 position-relative overlay-gradient-bottom " style="background-image:url(<?php echo base_url('assets/img/kemasan.jpg') ?>); background-size:cover">
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