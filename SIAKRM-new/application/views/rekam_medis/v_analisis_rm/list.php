<?php if ($this->session->flashdata('success')) { ?>
    <p><?= $this->session->flashdata('success') ?></p>
<?php } ?>
<?php if ($this->session->flashdata('error')) { ?>
    <p><?= $this->session->flashdata('error') ?></p>
<?php } ?>
<section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <?php $this->view('rekam_medis/v_rm/import'); ?>
                            <?php $this->view('rekam_medis/v_rm/tambah'); ?>
                            <!-- Bordered Table -->
                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col" width="50px">
                                            <center>No</center>
                                        </th>
                                        <th scope="col">
                                            <center>Nama</center>
                                        </th>
                                        <th scope="col">
                                            <center>No. RM</center>
                                        </th>
                                        <th scope="col">
                                            <center>No. BPJS</center>
                                        </th>
                                        <th scope="col">
                                            <center>NIK</center>
                                        </th>
                                        <th scope="col">
                                            <center>Aksi</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($rms as $key => $r) {
                                    ?>
                                        <tr>
                                            <th scope="row">
                                                <center><?= $no++ ?></center>
                                            </th>
                                            <td>
                                                <?= $r->nama ?>
                                            </td>
                                            <td>
                                                <center><?= $r->no_rm ?></center>
                                            </td>
                                            <td>
                                                <center><?= $r->no_bpjs ?></center>
                                            </td>
                                            <td>
                                                <center><?= $r->no_ktp ?></center>
                                            </td>
                                            <td>
                                                <center>
                                                        <a href="" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalAnalisis<?= $r->id_rm ?>"><i class="bi bi-send"></i> Analisa</a>
                                                    </center>
                                            </td>
                                            <?php $this->view('rekam_medis/v_analisis_rm/analisis'); ?>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- End Bordered Table -->
                        </div><!-- End Recent Sales -->
                    </div>
                </div><!-- End Left side columns -->
            </div>
        </div>
    </div>
</section>
</main><!-- End #main -->