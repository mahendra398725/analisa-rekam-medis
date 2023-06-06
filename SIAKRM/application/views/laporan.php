<!DOCTYPE html>
<html><head>
    <title>Laporan Analisis PDF</title>
</head><body>
  <table class="table table-borderless datatable">
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
    <?php $no=1;
      foreach($arm as $key => $a): ?>
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
    <?php endforeach; ?>
  </table>
</body></html>