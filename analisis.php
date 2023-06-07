<?php foreach ($rms as $key => $r) { ?>
  <div class="modal fade" id="modalAnalisis<?= $r->id_rm ?>" tabindex="-1">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Detail User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
        	<div class="row">
        		<div class="col-lg-4">
        			<div class="card">
		                <div class="card-body">
		                    <div class="row">
		                        <div class="col-4">
		                            Tanggal <br>
		                            No. RM <br>
		                            Nama Pasien <br>
		                            Alamat <br>
		                            Tanggal lahir
		                        </div>
		                        <div class="col-8">
		                            : <?= format_indo(date('Y-m-d')); ?> <br>
		                            : <?= $r->no_rm ?> <br>
		                            : <?= $r->nama ?> <br>
		                            : <?= $r->alamat ?> <br>
		                            : <?= $r->tanggal_lahir ?>
		                        </div>
		                    </div>
		                </div>
		            </div>

		            <form role="form" action="<?= base_url('analisisrekammedis/tambah') ?>" method="post" enctype="multipart/form-data">
		            <div class="card">
		                <div class="card-body">
		                    <div class="row">
		                        <div class="col-12">
		                        	<div class="form-group">
		                                <input type="text" name="rm_id" value="<?= $r->id_rm ?>" id="rm_id" class="form-control" hidden>
		                            </div>
		                            <div class="form-group">
		                                <label class="col-sm-12 col-form-label" for="poli_id">Poli</label>
		                            <select class="form-select" name="poli_id" id="poli_id" aria-label="Default select example">
		                                    <option selected>Pilih Poli</option>
		                                    <?php
		                                    foreach($pl as $p){ ?>
		                                        <option value="<?= $p->id_poli ?>"><?= $p->nama_poli ?></option>
		                                    <?php } ?>
		                                </select>
		                            </div>
		                            <div class="form-group">
		                                <label class="col-sm-12 col-form-label" for="doker_id">Dokter</label>
		                                <select class="form-select" name="dokter_id" id="dokter_id" aria-label="Default select example">
		                                    <option selected>Pilih Dokter</option>
		                                    <?php
		                                    foreach($dr as $d){ ?>
		                                        <option value="<?= $d->id_dokter ?>"><?= $d->nama_dokter ?></option>
		                                    <?php } ?>
		                                </select>
		                            </div>
		                            <div class="form-group">
		                                <label class="col-sm-6 col-form-label" for="petugas">Petugas</label>
		                                <input type="text" name="petugas" value="<?= $this->fungsi->user_login()->nama_users ?>" id="petugas" class="form-control" disabled>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		              </div> 
		              <div class="card">
		                <div class="card-body">
		                    <div class="row">
		                        <div class="form-group">
		                            <div class="form-group">
		                                <label class="col-sm-12 col-form-label" for="status_kelengkapan">Status Kelengakapan Berkas</label>
		                                <select class="form-select" name="status_kelengkapan" id="status_kelengkapan" aria-label="Default select example">
		                                    <option selected>Pilih Status Kelengkapan</option>
		                                    <option value="1">Lengkap</option>
		                                    <option value="2">Tidak Lengkap</option>
		                                </select>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
        		</div>

        		<div class="col-lg-4">
        			<div class="accordion" id="accordionExample">
                    	<div class="accordion-item">
                    	    <h2 class="accordion-header" id="headingOne">
                    	        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><h4>Identitas Pasien</h4>
                    	        </button>
                    	    </h2>
                    	    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    	        <div class="accordion-body">
                    	            <div class="row">
                    	            	<div class="col-4">
                    	            		Nama Pasien <br>
		                    	            No. RM <br>
		                    	            No. BPJS <br>
		                    	            NIK <br>
		                    	            Jenis Kelamin <br>
		                    	            Tanggal lahir <br>
		                    	            Umur <br>
		                    	            Alamat <br>
		                    	            Pekerjaan
                    	            	</div>
                    	            	<div class="col-8">
                    	            		<?php if ($r->nama == '') {  ?>
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                            <?php } else { ?>
                                                <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                            <?php } ?> <br>
		                    	            <?php if ($r->no_rm == '') {  ?>
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                            <?php } else { ?>
                                                <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                            <?php } ?> <br>
		                    	            <?php if ($r->no_bpjs == '') {  ?>
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                            <?php } else { ?>
                                                <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                            <?php } ?> <br>
		                    	            <?php if ($r->no_ktp == '') {  ?>
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                            <?php } else { ?>
                                                <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                            <?php } ?> <br>
		                    	            <?php if ($r->JK == '') {  ?>
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                            <?php } else { ?>
                                                <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                            <?php } ?> <br>
		                    	            <?php if ($r->tanggal_lahir == '') {  ?>
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                            <?php } else { ?>
                                                <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                            <?php } ?> <br>
		                    	            <?php if ($r->umur == '') {  ?>
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                            <?php } else { ?>
                                                <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                            <?php } ?> <br>
		                    	            <?php if ($r->alamat == '') {  ?>
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                            <?php } else { ?>
                                                <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                            <?php } ?> <br>
		                    	            <?php if ($r->pekerjaan == '') {  ?>
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                            <?php } else { ?>
                                                <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                            <?php } ?>
                    	            	</div>
                    	            </div>
                    	        </div>
                    	    </div>
                    	</div>
                    </div> 
        		</div>

        		<div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    Keluhan <br>
                                    Terapi <br>
                                    Tensi <br>
                                    Nadi <br>
                                    Suhu <br>
                                    Pernapasan <br>
                                    Tinggi Badan <br>
                                    Berat Badan <br>
                                    Lingkar Perut <br>
                                    Diagnosa <br>
                                    Kode ICD X <br>
                                    Tindakan
                                </div>
                                <div class="col-8">
                                	<?php if ($r->keluhan == '') {  ?>
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                    <?php } else { ?>
                                        <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                    <?php } ?> <br>
		                    	    <?php if ($r->terapi == '') {  ?>
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                    <?php } else { ?>
                                        <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                    <?php } ?> <br>
		                    	    <?php if ($r->tensi == '') {  ?>
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                    <?php } else { ?>
                                        <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                    <?php } ?> <br>
		                    	    <?php if ($r->nadi == '') {  ?>
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                    <?php } else { ?>
                                        <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                    <?php } ?> <br>
		                    	    <?php if ($r->suhu == '') {  ?>
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                    <?php } else { ?>
                                        <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                    <?php } ?> <br>
		                    	    <?php if ($r->pernapasan == '') {  ?>
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                    <?php } else { ?>
                                        <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                    <?php } ?> <br>
		                    	    <?php if ($r->tinggi == '') {  ?>
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                    <?php } else { ?>
                                        <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                    <?php } ?> <br>
		                    	    <?php if ($r->berat == '') {  ?>
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                    <?php } else { ?>
                                        <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                    <?php } ?> <br>
		                    	    <?php if ($r->lingkar_perut == '') {  ?>
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                    <?php } else { ?>
                                        <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                    <?php } ?> <br>
		                    	    <?php if ($r->id_diagnosa == '') {  ?>
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                    <?php } else { ?>
                                        <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                    <?php } ?> <br>
		                    	    <?php if ($r->diagnosa == '') {  ?>
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                    <?php } else { ?>
                                        <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                    <?php } ?> <br>
		                    	    <?php if ($r->tindakan == '') {  ?>
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<span class="badge border-danger border-1 text-danger"><i class="bi bi-x-square"></i>&ensp; Tidak Lengkap</span>
                                    <?php } else { ?>
                                        <span class="badge border-success border-1 text-success"><i class="bi bi-check-square-fill"></i>&ensp; Lengkap</span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        		
        	</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>