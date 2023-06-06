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
                            <form action="<?= base_url('report/pdf') ?>" method="post" target="_blank">
                            	<div class="row">
			                        <div class="col-lg-3">
			                            <div class="form-group">
			                                <label class="col-sm-6 col-form-label" for="nama_poli">Nama Poli</label>
			                                <input type="date" name="tanggalawal" class="form-control">
			                            </div>
			                        </div>
			                        <div class="col-lg-3">
			                            <div class="form-group">
			                                <label class="col-sm-6 col-form-label" for="nama_poli">Nama Poli</label>
			                                <input type="date" name="tanggalakhir" class="form-control">
			                            </div>
			                        </div>
			                        <div class="col-lg-3">
			                            <div class="form-group">
			                                <!-- <a type="submit" class="btn btn-sm btn-primary">Cetak</a> -->
                                            <button style="margin-top: 35px;" type="submit" class="btn btn-sm btn-primary">Cetak</button>
			                            </div>
			                        </div>
			                    </div>
                            </form>
    
                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col" width="50px">
                                            <center>No</center>
                                        </th>
                                        <th scope="col">
                                            <center>Tanggal</center>
                                        </th>
                                        <th scope="col">
                                            <center>No. RM</center>
                                        </th>
                                        <th scope="col">
                                            <center>Nama</center>
                                        </th>
                                        <th scope="col">
                                            <center>Petugas</center>
                                        </th>
                                        <th scope="col">
                                            <center>Poli</center>
                                        </th>
                                        <th scope="col">
                                            <center>Keterangan</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($arm as $key => $a) {
                                    ?>
                                        <tr>
                                            <th scope="row">
                                                <center><?= $no++ ?></center>
                                            </th>
                                            <td>
                                                <center>
                                                	<?= $a->tanggal ?>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                	<?= $a->no_rm ?>
                                                </center>
                                            </td>
                                            <td>
                                                <?= $a->nama ?>
                                            </td>
                                            <td>
                                                <center>
                                                <?= $a->petugas ?>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                	<?= $a->nama_poli ?>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                <?= $a->status_kelengkapan ?>
                                                </center>
                                            </td>
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

