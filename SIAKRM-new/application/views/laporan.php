<!DOCTYPE html>
<html><head>
    <title>Laporan Analisis PDF</title>
</head><body>
  <table class="table table-borderless datatable">
    <tr>
      <th>No</th>
      <th>Tanggal Analisis</th>
      <th>No. Rekam Medis</th>
      <th>Nama Pasien</th>
      <th>Poli</th>
      <th>Petugas Analisis</th>
      <th>Keterangan</th>
    </tr>
    <?php $no=1;
      foreach($arm as $a): ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $a->tanggal ?></td>
      <td><?= $a->no_rm ?></td>
      <td></td>
      <td></td>
      <td><?= $a->petugas ?></td>
      <td><?= $a->status_kelengkapan ?></td>      
    </tr>
    <?php endforeach; ?>
  </table>
</body></html>