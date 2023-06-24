<form role="form" action="<?= base_url('dokters/tambah') ?>" method="post">
    <div class="modal fade" id="modalTambah" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Dokter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

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
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" for="nip">NIP</label>
                                <input type="text" name="nip" id="nip" class="form-control" required="on">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" for="nama_dokter">Nama Dokter</label>
                                <input type="text" name="nama_dokter" id="nama_dokter" class="form-control" required="on">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="col-sm-12 col-form-label" for="no_telp">Nomor Telpon</label>
                                <input type="number" name="no_telp" id="no_telp" class="form-control" required="on">
                            </div>
                        </div>

                        <div class="col-lg-9">                            
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" required="on">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>