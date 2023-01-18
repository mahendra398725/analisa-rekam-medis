<?php $this->load->view("_partial/head.php") ?>

<?php $this->load->view("_partial/navbar.php") ?>

<?php $this->load->view("_partial/sidebar.php") ?>

<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration">
				<div class="inner">
					<div class="app-card-body p-3 p-lg-4">
						<h1 class="mb-3">Hai developer!</h1>
						<div class="row gx-5 gy-3">
							<div class="col-12 col-lg-12">
								<div>
									<h4>Selamat datang di halaman SISTEM INFORMASI ANALISIS KELENGKAPAN REKAM MEDIS Puskesmas Bodag Kabupaten Trenggalek</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row g-4 mb-4">

				<div class="col-6 col-lg-3">
					<div class="app-card app-card-stat shadow-sm h-100">
						<div class="app-card-body p-3 p-lg-4">
							<h4 class="stats-type mb-1">Data Rekam Medis Pasien</h4>
							<div class="stats-figure text-success">100 Pasien</div>
						</div>
						<a class="app-card-link-mask" href="#"></a>
					</div>
				</div>

				<div class="col-6 col-lg-3">
					<div class="app-card app-card-stat shadow-sm h-100">
						<div class="app-card-body p-3 p-lg-4">
							<h4 class="stats-type mb-1">Data Dokter</h4>
							<div class="stats-figure text-warning">10 Dokter</div>
						</div>
						<a class="app-card-link-mask" href="#"></a>
					</div>
				</div>

				<div class="col-6 col-lg-3">
					<div class="app-card app-card-stat shadow-sm h-100">
						<div class="app-card-body p-3 p-lg-4">
							<h4 class="stats-type mb-1">Data Poli</h4>
							<div class="stats-figure text-light">10 Poli</div>
						</div>
						<a class="app-card-link-mask" href="#"></a>
					</div>
				</div>

				<div class="col-6 col-lg-3">
					<div class="app-card app-card-stat shadow-sm h-100">
						<div class="app-card-body p-3 p-lg-4">
							<h4 class="stats-type mb-1">Data User</h4>
							<div class="stats-figure text-info">20 User</div>
						</div>
						<a class="app-card-link-mask" href="#"></a>
					</div>
				</div>

				<div class="col-12 col-lg-9">
					<div class="app-card app-card-chart h-100 shadow-sm">
						<div class="app-card-header p-3">
							<div class="row justify-content-between align-items-center">
								<div class="col-auto">
									<h4 class="app-card-title">Line Chart Example</h4>
								</div>
								<!--//col-->
								<div class="col-auto">
									<div class="card-header-action">
										<a href="charts.html">More charts</a>
									</div>
									<!--//card-header-actions-->
								</div>
								<!--//col-->
							</div>
							<!--//row-->
						</div>
						<!--//app-card-header-->
						<div class="app-card-body p-3 p-lg-4">
							<div class="mb-3 d-flex">
								<select class="form-select form-select-sm ms-auto d-inline-flex w-auto">
									<option value="1" selected>This week</option>
									<option value="2">Today</option>
									<option value="3">This Month</option>
									<option value="3">This Year</option>
								</select>
							</div>
							<div class="chart-container">
								<canvas id="canvas-linechart"></canvas>
							</div>
						</div>
						<!--//app-card-body-->
					</div>
					<!--//app-card-->
				</div>

				<div class="col-12 col-lg-3">
					<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
						<div class="app-card-header p-3 border-bottom-0">
							<div class="row align-items-center gx-3">
								<div class="col-auto">
									<div class="app-icon-holder">
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
											<path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
										</svg>
									</div>
									<!--//icon-holder-->

								</div>
								<!--//col-->
								<div class="col-auto">
									<h4 class="app-card-title">Invoices</h4>
								</div>
								<!--//col-->
							</div>
							<!--//row-->
						</div>
						<!--//app-card-header-->
						<div class="app-card-body px-4">

							<div class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquet eros vel diam semper mollis.</div>
						</div>
						<!--//app-card-body-->
						<div class="app-card-footer p-4 mt-auto">
							<a class="btn app-btn-secondary" href="#">Create New</a>
						</div>
						<!--//app-card-footer-->
					</div>
					<!--//app-card-->
				</div>

				<!--//col-->
				<div class="col-12 col-lg-9">
					<div class="app-card app-card-chart h-100 shadow-sm">
						<div class="app-card-header p-3">
							<div class="row justify-content-between align-items-center">
								<div class="col-auto">
									<h4 class="app-card-title">Bar Chart Example</h4>
								</div>
								<!--//col-->
								<div class="col-auto">
									<div class="card-header-action">
										<a href="charts.html">More charts</a>
									</div>
									<!--//card-header-actions-->
								</div>
								<!--//col-->
							</div>
							<!--//row-->
						</div>
						<!--//app-card-header-->
						<div class="app-card-body p-3 p-lg-4">
							<div class="mb-3 d-flex">
								<select class="form-select form-select-sm ms-auto d-inline-flex w-auto">
									<option value="1" selected>This week</option>
									<option value="2">Today</option>
									<option value="3">This Month</option>
									<option value="3">This Year</option>
								</select>
							</div>
							<div class="chart-container">
								<canvas id="canvas-barchart"></canvas>
							</div>
						</div>
						<!--//app-card-body-->
					</div>
					<!--//app-card-->
				</div>
				<!--//col-->

			</div>

		</div>
		<!--//container-fluid-->
	</div>
	<!--//app-content-->

	<?php $this->load->view("_partial/footer.php") ?>