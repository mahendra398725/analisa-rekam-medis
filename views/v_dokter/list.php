    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
                                        <i class="bi bi-plus-square"></i> Tambah
                                    </button>
                                </h5>
                                <?php $this->view('rekam_medis/v_dokter/tambah'); ?>
                                <!-- Bordered Table -->
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="50px">
                                                <center>No</center>
                                            </th>
                                            <th scope="col">
                                                <center>Nama Dokter</center>
                                            </th>
                                            <th scope="col">
                                                <center>Poli</center>
                                            </th>
                                            <th scope="col">
                                                <center>No. Telepon</center>
                                            </th>
                                            <th scope="col" width="300px">
                                                <center>Aksi</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($dokters as $key => $d) {
                                        ?>
                                            <tr>
                                                <th scope="row">
                                                    <center><?= $no++ ?></center>
                                                </th>
                                                <td>
                                                    <center>dr. <?= $d->nama_dokter ?></center>
                                                </td>
                                                <td>
                                                    <center><?= $d->nama_poli ?></center>
                                                </td>
                                                <td>
                                                    <center><?= $d->no_telp ?></center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <a href="" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetail<?= $d->id_dokter ?>"><i class="bi bi-eye"></i> Detail</a>
                                                        <button type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $d->id_dokter ?>"><i class="bi bi-pencil-square"></i> Edit</button>
                                                        <a href="" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalDelete<?= $d->id_dokter ?>"><i class="bi bi-trash"></i> Hapus</a>
                                                    </center>
                                                </td>
                                                <?php $this->view('rekam_medis/v_dokter/detail'); ?>
                                                <?php $this->view('rekam_medis/v_dokter/edit'); ?>
                                                <?php $this->view('rekam_medis/v_dokter/delete'); ?>
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