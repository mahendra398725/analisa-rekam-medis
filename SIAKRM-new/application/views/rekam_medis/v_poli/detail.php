<?php foreach ($users as $key => $u) { ?>
  <div class="modal fade" id="modalDetail<?= $u->id_user ?>" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Detail User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-3">
              <center>
                <img src="<?php echo base_url('assets/img/user/' . $u->image) ?>" width="120" height="120" alt="Profile" class="rounded-square">
              </center>
            </div>
            <div class="col-lg-3">
              ID User <br>
              Nama <br>
              Username <br>
              Email <br>
              Role <br>
              Tempat, Tanggal lahir <br>
              Jenis Kelamin <br>
              No. Telpon <br>
              Agama <br>
              Alamat
            </div>
            <div class="col-lg-6">
              : <b><?= $u->kd_user ?></b> <br>
              : <?= $u->nama_users ?><br>
              : <?= $u->username ?><br>
              : <?= $u->email ?><br>
              : <?= $u->role ?><br>
              : <?= $u->tempat_lahir ?>, <?= format_indo(date($u->tanggal_lahir)) ?><br>
              : <?= $u->jenis_kelamin ?><br>
              : <?= $u->no_telp ?><br>
              : <?= $u->agama ?><br>
              : <?= $u->alamat ?>
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