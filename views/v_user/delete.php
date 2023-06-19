<?php foreach ($users as $key => $u) { ?>
	<div class="modal fade" id="modalDelete<?= $u->id_user ?>" tabindex="-1">
		<form role="form" action="<?= base_url('users/delete/'.$u->id_user) ?>" method="post" enctype="multipart/form-data">
		<div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDelete">Hapus data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

				<div class="modal-body">
					Apakah anda yakin ingin menghapus data <?= $u->kd_user ?> - <?= $u->nama_users ?> ?
				</div>
                                                      
				<div class="modal-footer">
				<a href="<?= base_url('users/delete/'.$u->id_user) ?>" class="btn btn-danger">Hapus</a>
	      		</div>
	    	</div>
	  	</div>
	  	</form>
	</div>
<?php
} ?>