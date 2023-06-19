<?php foreach ($polis as $key => $p) { ?>
  <div class="modal fade" id="modalDelete<?= $p->id_poli ?>" tabindex="-1">
    <form role="form" action="<?= base_url('polis/delete/'.$p->id_poli) ?>" method="post" enctype="multipart/form-data">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDelete">Hapus data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

        <div class="modal-body">
          Apakah anda yakin ingin menghapus data <?= $p->kd_poli ?> - <?= $p->nama_poli ?> ?
        </div>
                                                      
        <div class="modal-footer">
        <a href="<?= base_url('polis/delete/'.$p->id_poli) ?>" class="btn btn-danger">Hapus</a>
            </div>
        </div>
      </div>
      </form>
  </div>
<?php
} ?>