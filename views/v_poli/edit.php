<?php foreach ($polis as $key => $p) { ?>
    <div class="modal fade" id="modalEdit<?= $p->id_poli ?>" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Poli</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <form role="form" action="<?= base_url('polis/edit/'.$p->id_poli) ?>" method="post">
                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="kd_poli">ID Poli</label>
                            <div class="col-lg-3">
                                <input type="text" name="kd_poli" id="kd_poli" value="<?= $kd_poli ?>" class="form-control" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" for="nama_poli">Nama Poli</label>
                                <input type="text" name="nama_poli" id="nama_poli" value="<?= $p->nama_poli ?>" class="form-control" autofocus required="on">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
            </div>
        </div>
    </div>
<?php } ?>