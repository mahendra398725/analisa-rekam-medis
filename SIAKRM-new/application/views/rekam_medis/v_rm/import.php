<form method="POST" action="<?= base_url('rekammedis/unggah') ?>" enctype="multipart/form-data">
    <div class="modal fade" id="modalUpload" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Import Excel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="col-form-label text-md-left">Import Data Excel</label>
                                <input type="file" class="form-control" name="importexcel" id="importexcel" accept=".xlsx,.xls" required>
                                <div class="mt-1">
                                    <span class="text-secondary">File yang harus diupload : <span class="text-danger">.xls, .xlsx</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-upload "></i> Unggah</button>
                </div>
            </div>
        </div>
    </div>
</form>