<?php foreach ($dokters as $key => $d) { ?>
      <div class="modal fade" id="modalEdit<?= $d->id_dokter ?>" tabindex="-1">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Edit Data Dokter</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form role="form" action="<?= base_url('dokters/edit/'.$d->id_dokter) ?>" method="post" enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <div class="row mb-3">
                                      <label class="col-lg-3 col-form-label" for="kd_dokter">ID Dokter</label>
                                      <div class="col-lg-4">
                                          <input type="text" name="kd_dokter" id="kd_dokter" value="<?= $kd_dokter ?>" class="form-control" disabled>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <div class="row mb-3">
                                      <label class="col-lg-3 col-form-label" for="dokter_id">Poli</label>
                                      <div class="col-lg-9">
                                          <select class="form-select" name="poli_id" id="poli_id" aria-label="Default select example">
                                              <?php foreach ($polis as $p) { ?>
                                                  <?php if ($p->id_poli==$d->poli_id): ?>
                                                  <option value="<?= $p->id_poli ?>" <?php if ($d->poli_id==$p->id_poli) {echo 'selected';} ?>><?= $p->kd_poli ?> - <?= $p->nama_poli ?></option>
                                                  <?php else: ?>
                                                    <option value="<?= $p->id_poli ?>"><?= $p->kd_poli ?> - <?= $p->nama_poli ?></option>
                                                  <?php endif ?>
                                              <?php } ?>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="col-sm-6 col-form-label" for="nip">NIP</label>
                                  <input type="text" name="nip" id="nip" value="<?= $d->nip ?>" class="form-control" required="on">
                              </div>
                          </div>
                          <div class="col-lg-8">
                              <div class="form-group">
                                  <label class="col-sm-6 col-form-label" for="nama_dokter">Nama Dokter</label>
                                  <input type="text" name="nama_dokter" id="nama_dokter" value="<?= $d->nama_dokter ?>" class="form-control" required="on">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label class="col-sm-6 col-form-label" for="tempat_lahir">Tempat Lahir</label>
                                  <input type="text" name="tempat_lahir" id="tempat_lahir" value="<?= $d->tempat_lahir ?>" class="form-control" required="on">
                              </div>
                          </div>

                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label class="col-sm-6 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                  <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= $d->tanggal_lahir ?>" class="form-control" required="on">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label class="col-sm-12 col-form-label" for="jenis_kelamin">Jenis Kelamin</label>
                                  <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" aria-label="Default select example">
                                      <option value="<?= $d->jenis_kelamin ?>" <?php if ($d->jenis_kelamin=="LAKI-LAKI"||$d->jenis_kelamin=="PEREMPUAN") {echo 'selected';} ?>><?= $d->jenis_kelamin ?></option>
                                      <option value="Laki-Laki" >Laki-Laki</option>
                                      <option value="Perempuan" >Perempuan</option>
                                  </select>
                              </div>
                          </div>

                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label class="col-sm-6 col-form-label" for="no_telp">Nomor Telpon</label>
                                  <input type="number" name="no_telp" id="no_telp" value="<?= $d->no_telp ?>" class="form-control" required="on">
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-sm-6 col-form-label" for="alamat">Alamat</label>
                          <input type="text" name="alamat" id="alamat" value="<?= $d->alamat ?>" class="form-control" required="on">
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