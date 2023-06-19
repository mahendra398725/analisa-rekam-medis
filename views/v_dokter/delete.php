<?php foreach ($dokters as $key => $d) { ?>
	<div class="modal fade" id="modalDelete<?= $d->id_dokter ?>" tabindex="-1">
		<form role="form" action="<?= base_url('dokters/delete/'.$d->id_dokter) ?>" method="post" enctype="multipart/form-data">
		<div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDelete">Hapus data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

				<div class="modal-body">
					Apakah anda yakin ingin menghapus data <?= $d->kd_dokter ?> - <?= $d->nama_dokter ?> ?
				</div>
                                                      
				<div class="modal-footer">
				<a href="<?= base_url('dokters/delete/'.$d->id_dokter) ?>" class="btn btn-danger">Hapus</a>
	      		</div>
	    	</div>
	  	</div>
	  	</form>
	</div>
<?php
} ?>