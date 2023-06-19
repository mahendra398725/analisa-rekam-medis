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
                                <?php $this->view('rekam_medis/v_poli/tambah'); ?>
                                <!-- Bordered Table -->
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="50px">
                                                <center>No</center>
                                            </th>
                                            <th scope="col">
                                                <center>Nama Poli</center>
                                            </th>
                                            <th scope="col">
                                                <center>Aksi</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($polis as $key => $p) {
                                        ?>
                                            <tr>
                                                <th scope="row">
                                                    <center><?= $no++ ?></center>
                                                </th>
                                                <td>
                                                    <center><?= $p->nama_poli ?></center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <button type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $p->id_poli ?>"><i class="bi bi-pencil-square"></i> Edit</button>
                                                        <a href="" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalDelete<?= $p->id_poli ?>"><i class="bi bi-trash"></i> Hapus</a>
                                                    </center>
                                                </td>
                                                <?php $this->view('rekam_medis/v_poli/edit'); ?>
                                                <?php $this->view('rekam_medis/v_poli/delete'); ?>
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