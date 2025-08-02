<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Laporan Pengeluaran Kegiatan</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 14px;
      padding: 20px;
      color: #000;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #333;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    @media print {
      .no-print {
        display: none;
      }
    }
  </style>
</head>
<body>

  <h2>Laporan Pengeluaran Kegiatan</h2>

  <table>
    <thead>
      <tr>
        <th>No.</th>
        <th>Kegiatan</th>
        <th>Mulai</th>
        <th>Selesai</th>
        <th>Bidang</th>
        <th>Anggaran (Rp)</th>
        <th>Pengeluaran (Rp)</th>
        <th>Kemajuan</th>
        <th>Catatan</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($results)) : ?>
        <?php $no = 1; foreach ($results as $row): ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($row['kegiatan']) ?></td>
            <td><?= esc($row['tanggal_mulai']) ?></td>
            <td><?= esc($row['tanggal_selesai']) ?></td>
            <td><?= esc($row['bidang']) ?></td>
            <td><?= number_format($row['anggaran'], 0, ',', '.') ?></td>
            <td><?= number_format($row['pengeluaran'], 0, ',', '.') ?></td>
            <td><?= esc($row['kemajuan']) ?>%</td>
            <td><?= esc($row['catatan']) ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr>
          <td colspan="9" style="text-align:center;">Tidak ada data yang tersedia.</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>

  <br>
  <div class="no-print">
    <button onclick="window.print()">🖨 Cetak Sekarang</button>
  </div>

</body>
</html>
