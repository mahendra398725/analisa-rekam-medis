  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

  	<ul class="sidebar-nav" id="sidebar-nav">

  		<li class="nav-item">
  			<a class="nav-link " href="<?= base_url('dashboard') ?>">
  				<i class="bi bi-house-door"></i>
  				<span>Beranda</span>
  			</a>
  		</li><!-- End Dashboard Nav -->

  		<li class="nav-item">
  			<a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
  				<i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
  			</a>
  			<ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

  				<li>
  					<a href="<?= base_url('rekammedis') ?>">
  						<i class="bi bi-circle-fill"></i><span>Data Rekam Medis Pasien</span>
  					</a>
  				</li>

  				<li>
  					<a href="<?= base_url('dokters') ?>">
  						<i class="bi bi-circle-fill"></i><span>Data Dokter</span>
  					</a>
  				</li>

  				<li>
  					<a href="<?= base_url('polis') ?>">
  						<i class="bi bi-circle-fill"></i><span>Data Poli</span>
  					</a>
  				</li>

                <?php if ($this->session->userdata('roles') == 1) {?>
      				<li>
      					<a href="<?= base_url('users') ?>">
      						<i class="bi bi-circle-fill"></i><span>Data User</span>
      					</a>
      				</li>   
                <?php } ?>

  			</ul>
  		</li><!-- End Components Nav -->

        <?php if ($this->session->userdata('roles') == 2) {?>
      		<li class="nav-item">
      			<a class="nav-link collapsed" href="<?= base_url('analisisrekammedis') ?>">
      				<i class="bi bi-journal-text"></i>
      				<span>Analisis</span>
      			</a>
      		</li><!-- End Blank Page Nav -->
        <?php } ?>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('grafik') ?>">
          <i class="bi bi-bar-chart"></i>
          <span>Grafik</span>
        </a>
      </li><!-- End Blank Page Nav -->

  		<li class="nav-item">
  			<a class="nav-link collapsed" href="<?= base_url('report') ?>">
  				<i class="bi bi-file-earmark"></i>
  				<span>Laporan</span>
  			</a>
  		</li><!-- End Blank Page Nav -->
  	</ul>

  </aside><!-- End Sidebar-->