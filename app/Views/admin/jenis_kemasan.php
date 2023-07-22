<?= $this->extend('layouts-admin/app') ?>

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
            <h1>Jenis Kemasan</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Jenis Kemasan</h2>
            <p class="section-lead">Silahkan tambahkan, ubah maupun hapus data jenis-jenis kemasan.</p>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="kriteriaKemasan">Jenis Kemasan</label>
                                        <input type="text"
                                            class="form-control"
                                            id="jenis_kemasan" name="jenis_kemasan">
                                            <code>* Isi dengan jenis dan bahan, contoh : Plastik PVC</code>
                                    </div>
                                    <div class="form-group">
                                        <label for="ketKemasan">Keterangan Kemasan</label>
                                        <textarea class="form-control" style="height: 150px" name="keterangan_kemasan"
                                        required></textarea>
                                    </div>
                                    <div style="text-align-last: center;">
                                            <button type="submit"
                                            class="btn btn-warning">Edit</button>
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
                                <h4>Data Jenis Kemasan</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div> 
                                <table id="table" class="table" style="text-align: center">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center" scope="col">#</th>
                                            <th style="text-align: center" scope="col">Kode Jenis</th>
                                            <th style="text-align: center" scope="col">Jenis Kemasan</th>
                                            <th style="text-align: center" scope="col">Keterangan Jenis Kemasan</th>
                                            <th style="text-align: center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <!-- @foreach ($jenis_kemasan as $kemasan )
                                        <tr>
                                            <th>{{ $i++}}</th>
                                            <td>{{$kemasan->id_kemasan}}</td>
                                            <td>{{$kemasan->jenis_kemasan}}</td>
                                            <td>{{$kemasan->keterangan_kemasan}}</td>
                                            <td><a data-toggle="modal" href="{{ url('/kemasan_show/{id}',$kemasan->id) }}"  data-target="#editKemasan" type="button" class="btn btn-warning">Edit</a>
                                                <a href="/kemasan/hapus/{{ $kemasan->id }}" type="button" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach -->
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