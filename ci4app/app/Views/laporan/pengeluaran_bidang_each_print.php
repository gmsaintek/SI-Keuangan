<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?= esc($judulLaporan ?? 'Laporan Pengeluaran Bidang') ?></title>
  <style>
    body { font-family: Arial, sans-serif; font-size: 14px; padding: 20px; }
    h2 { text-align: center; margin-bottom: 20px; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #333; padding: 8px; text-align: left; }
    th { background-color: #f2f2f2; }
    @media print { .no-print { display: none; } }
  </style>
</head>
<body>
  <button onclick="window.print()" style="margin-bottom: 20px; float: right;" class="no-print">
    🖨️ Print
  </button>
  <h2><?= esc($judulLaporan ?? 'Laporan Pengeluaran Bidang') ?></h2>
  <table>
    <thead>
      <tr>
        <th>Tanggal</th>
        <th>Nama</th>
        <th>Sumber</th>
        <th>Kegiatan</th>
        <th>Sub-bidang</th>
        <th>Jumlah Pengeluaran (Rp)</th>
        <th>Nota</th>
        <th>Catatan</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($pengeluaran)): ?>
        <?php foreach ($pengeluaran as $row): ?>
        <tr>
          <td><?= esc($row['tanggal']) ?></td>
          <td><?= esc($row['nama']) ?></td>
          <td><?= esc($row['sumber']) ?></td>
          <td><?= esc($row['kegiatan']) ?></td>
          <td><?= esc($row['subbidang']) ?></td>
          <td><?= number_format($row['jumlah_pengeluaran'], 2, ',', '.') ?></td>
          <td><?= esc($row['nota']) ?></td>
          <td><?= esc($row['catatan']) ?></td>
        </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td colspan="8" style="text-align:center">Tidak ada data</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
</body>
</html>
