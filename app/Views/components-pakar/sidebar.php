<div class="sidebar main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Pakar</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>

          <!-- isi dashboard 
          info banyak kriteria kemasan, jenis kemasan, basis pengetahuan,pakar
          pengertian dan perhitungan ds
          informasi nilai bobot yang harus diberikan pakar -->
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li><a href="<?php echo base_url('/dashboard_pakar');?>" class="nav-link"><i class="fas fa-house"></i><span>Dashboard</span></a></li>

            <!-- isi kemasan (fitur search)
            jenis kemasan: kode plastik, jenis plastik, crud
            kriteria kemasan: kode kriteria, kriteria plastik, crud
            kriteria & jenis: jenis kemasan,kriteria kemasan, nilai MB (dipilih sesuai rule yang ada), crud
            basis pengetahuan: kode kriteria, kode plastik, nilai belief, nilai plausibility -->
            <li class="menu-header">Kemasan</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-box-open"></i><span>Kemasan</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url('/jenis_kemasan_pakar');?>">Jenis Kemasan</a></li>
                <li><a class="nav-link" href="<?php echo base_url('/kriteria_produk_pakar');?>">Kriteria Produk</a></li>
                <li><a class="nav-link" href="<?php echo base_url('/basis_pengetahuan_pakar');?>">Basis Pengetahuan</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url('/logout_pakar');?>" class="nav-link"><i class="fas fa-sharp fa-regular fa-circle-exclamation"></i><span>Logout</span></a></li>

</div>