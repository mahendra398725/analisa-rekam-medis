<form role="form" action="<?= base_url('rekammedis/tambah') ?>" method="post">
    <div class="modal fade" id="modalTambah" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Rekam Medis</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="no_rm">No.Rekam Medis</label>
                            <div class="col-lg-2">
                                <input type="text" name="no_rm" id="no_rm" placeholder="<?= $no_rm ?>" class="form-control" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-6 col-form-label" for="nama">Nama Pasien</label>
                        <input type="text" name="nama" id="nama" class="form-control" required="on">
                        <input type="text" name="no_rm" id="no_rm" value="<?= $no_rm ?>" class="form-control" hidden>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" for="no_bpjs">No. BPJS</label>
                                <input type="number" name="no_bpjs" id="no_bpjs" class="form-control" required="on">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" for="no_ktp">NIK</label required="on">
                                <input type="number" name="no_ktp" id="no_ktp" class="form-control" required="on">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-12 col-form-label" for="LP">Jenis Kelamin</label>
                                <select class="form-select" name="LP" id="LP" aria-label="Default select example" required="on">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required="on">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" for="umur">Umur</label>
                                <input type="number" name="umur" id="umur" value="" class="form-control" required="on">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" required="on">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" for="pekerjaan">Pekerjaan</label>
                                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" required="on">
                            </div>
                        </div>
                    </div><br><br>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" for="keluhan">Keluhan</label>
                                <input type="text" name="keluhan" value="-" id="keluhan" class="form-control" required="on">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" for="terapi">Terapi</label>
                                <input type="text" name="terapi" value="-" id="terapi" class="form-control" required="on">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row mb-6">
                                    <label class="col-sm-4 col-form-label" for="tensi">Tensi</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="tensi" value="-" id="tensi" class="form-control" required="on">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row mb-6">
                                    <label class="col-sm-4 col-form-label" for="nadi">Nadi</label>
                                    <div class="col-lg-8">
                                        <input type="number" name="nadi" id="nadi" class="form-control" required="on">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row mb-6">
                                    <label class="col-sm-4 col-form-label" for="suhu">Suhu</label>
                                    <div class="col-lg-8">
                                        <input type="number" name="suhu" id="suhu" class="form-control" required="on">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row mb-6">
                                    <label class="col-sm-4 col-form-label" for="pernapasan">Pernapasan</label>
                                    <div class="col-lg-8">
                                        <input type="number" name="pernapasan" id="pernapasan" class="form-control" required="on">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row mb-6">
                                    <label class="col-sm-4 col-form-label" for="tinggi">Tinggi</label>
                                    <div class="col-lg-8">
                                        <input type="number" name="tinggi" id="tinggi" class="form-control" required="on">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row mb-6">
                                    <label class="col-sm-4 col-form-label" for="berat">Berat</label>
                                    <div class="col-lg-8">
                                        <input type="number" name="berat" id="berat" class="form-control" required="on">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row mb-6">
                                    <label class="col-sm-4 col-form-label" for="lingkar_perut">Lingkar Perut</label>
                                    <div class="col-lg-8">
                                        <input type="number" name="lingkar_perut" id="lingkar_perut" class="form-control" required="on">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br><br>

                    <div class="form-group">
                        <div class="row ">
                            <label class="col-sm-2 col-form-label" for="id_diagnosa">No.Diagnosa</label>
                            <div class="col-lg-2">
                                <input type="text" name="id_diagnosa" id="id_diagnosa" class="form-control" required="on">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" for="diagnosa">Diagnosa</label>
                                <input type="text" name="diagnosa" id="diagnosa" class="form-control" required="on">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" for="tindakan">Tindakan</label required="on">
                                <input type="text" name="tindakan" id="tindakan" class="form-control" required="on">
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
