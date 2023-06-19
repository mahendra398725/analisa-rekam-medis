<?php foreach ($dokters as $key => $d) { ?>
  <div class="modal fade" id="modalDetail<?= $d->id_dokter ?>" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Detail Dokter</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-lg-3">
              ID Dokter <br>
              Poli <br>
              NIP <br>
              Nama Dokter <br>
              Tempat, Tanggal lahir <br>
              Jenis Kelamin <br>
              No. Telpon <br>
              Alamat
            </div>
            <div class="col-lg-6">
              : <b><?= $d->kd_dokter ?></b> <br>
              : <?= $d->nama_poli ?><br>
              : <?= $d->nip ?><br>
              : <?= $d->nama_dokter ?><br>
              : <?= $d->tempat_lahir ?>, <?= format_indo(date($d->tanggal_lahir)) ?><br>
              : <?= $d->jenis_kelamin ?><br>
              : <?= $d->no_telp ?><br>
              : <?= $d->alamat ?>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php
} ?>