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
                                <?php $this->view('rekam_medis/v_user/tambah'); ?>
                                <!-- Bordered Table -->
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="50px">
                                                <center>No</center>
                                            </th>
                                            <th scope="col">
                                                <center>ID User</center>
                                            </th>
                                            <th scope="col">
                                                <center>Nama</center>
                                            </th>
                                            <th scope="col">
                                                <center>Username</center>
                                            </th>
                                            <th scope="col">
                                                <center>Role</center>
                                            </th>
                                            <th scope="col" width="280px">
                                                <center>Aksi</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($users as $key => $u) {
                                        ?>
                                            <tr>
                                                <th scope="row">
                                                    <center><?= $no++ ?></center>
                                                </th>
                                                <td>
                                                    <center><?= $u->kd_user ?></center>
                                                </td>
                                                <td><?= $u->nama_users ?></td>
                                                <td>
                                                    <center><?= $u->username ?></center>
                                                </td>
                                                <td>
                                                    <center><?= $u->role ?></center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <a href="" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetail<?= $u->id_user ?>"><i class="bi bi-eye"></i> Detail</a>
                                                        <button type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $u->id_user ?>"><i class="bi bi-pencil-square"></i> Edit</button>
                                                        <a href="" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalDelete<?= $u->id_user ?>"><i class="bi bi-trash"></i> Hapus</a>
                                                    </center>
                                                </td>
                                                <?php $this->view('rekam_medis/v_user/detail'); ?>
                                                <?php $this->view('rekam_medis/v_user/edit'); ?>
                                                <?php $this->view('rekam_medis/v_user/delete'); ?>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <!-- End Bordered Table -->
                            </div><!-- End Recent Sales -->

                        </div>
                    </div><!-- End Left side columns -->

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>

    </main><!-- End #main -->