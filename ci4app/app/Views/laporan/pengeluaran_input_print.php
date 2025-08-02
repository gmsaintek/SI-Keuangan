<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Laporan Pengeluaran</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 14px;
      padding: 20px;
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

  <h2>Laporan Pengeluaran</h2>

  <table>
    <thead>
      <tr>
        <th>Tanggal</th>
        <th>Nama</th>
        <th>Sumber</th>
        <th>Kegiatan</th>
        <th>Bidang</th>
        <th>Sub-bidang</th>
        <th>Jumlah</th>
        <th>Catatan</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($pengeluaran as $row): ?>
        <tr>
          <td><?= esc($row['tanggal']) ?></td>
          <td><?= esc($row['nama']) ?></td>
          <td><?= esc($row['sumber_dana'] ?? $row['sumber']) ?></td>
          <td><?= esc($row['kegiatan']) ?></td>
          <td><?= esc($row['bidang']) ?></td>
          <td><?= esc($row['sub_bidang']) ?></td>
          <td>Rp<?= number_format($row['jumlah_pengeluaran'] ?? $row['jumlah'], 2, ',', '.') ?></td>
          <td><?= esc($row['catatan']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <div class="no-print" style="margin-top: 20px; text-align: center;">
    <button onclick="window.print()">Cetak Sekarang</button>
  </div>

  <?php if (isset($autoPrint) && $autoPrint): ?>
    <script>window.print();</script>
  <?php endif; ?>

</body>
</html>
