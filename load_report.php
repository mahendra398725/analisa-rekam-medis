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
                                            <center>Dokter</center>
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
                                        <th scope="col">
                                            <center>Aksi</center>
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
                                                <center>
                                                    <?= $a->nama_dokter ?>
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
                                            <td>
                                                <center>
                                                    <a class="btn btn-primary" target="_blank" href="https://wa.me/<?= $a->no_telp ?>?text=Kepada%20Yth%0ANama%20Petugas%20:%20<?= $a->nama_dokter ?>%0ANama%20Poli%20:%20<?= $a->nama_poli ?>%0ADari%20:%20Rekam%20Medis%0AHari/Tanggal%20:%20<?= format_indo(date('Y-m-d')); ?>%0ASubjek%20:%20Pengisian%20Rekam%20Medis%0ASehubungan%20dengan%20pentingnya%20kelengkapan%20pengisian%20rekam%20medis%20rawat%20jalan%20di%20Puskesmas%20Bodag,%20maka%20dimohon%20kepada%20Bapak/Ibu%20Dokter%20untuk%20melengkapi%20pengisian%20rekam%20medis%20pasien%20berikut%20:%0A%0AData%20Diri%0ANama%20:%20<?= $a->nama ?>%0ARekam Medis%20:%20<?= $a->no_rm ?>%0ABPJS%20:%20<?= $a->no_bpjs ?>%0ANIK%20:%20<?= $a->no_ktp ?>%0AJenis Kelamin%20:%20<?= $a->jenis_kelamin ?>%0ATgl Lahir%20:%20<?= $a->tanggal_lahir ?>%0AUmur%20:%20<?= $a->umur ?>%0AAlamat%20:%20<?= $a->alamat ?>%0APekerjaan%20:%20<?= $a->pekerjaan ?>%0A%0AData%20Rekam%20Medis%0AKeluhan%20:%20<?= $a->keluhan ?>%0ATerapi%20:%20<?= $a->terapi ?>%0ATensi%20:%20<?= $a->tensi ?>%0ANadi%20:%20<?= $a->nadi ?>%0ASuhu%20:%20<?= $a->suhu ?>%0APernafasan%20:%20<?= $a->pernapasan ?>%0ATinggi%20:%20<?= $a->tinggi ?>%0ABerat%20:%20<?= $a->berat ?>%0ALingkar%20:%20<?= $a->lingkar_perut ?>%0AKD Diagnosa%20:%20<?= $a->id_diagnosa ?>%0ADiagnosa%20:%20<?= $a->diagnosa ?>%0ATindakan%20:%20<?= $a->tindakan ?>%0A%0ADimohon%20untuk%20segera%20dilengkapi%20dalam%20waktu%202x24%20jam%20pada%20semua%20item%20rekam%20medis%20yang%20seharusnya%20diisi.%20Jika%20tidak%20diisi%20dalam%20waktu%20yang%20telah%20ditentukan,%20akan%20ditindak%20lanjuti%20oleh%20penanggung%20jawab%20UKP.%20Demikian%20pemberitahuan%20ini%20kami%20buat,%20atas%20perhatian%20dan%20kerjasamanya%20kami%20ucapkan%20terima%20kasih.">Send</a>
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

