<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= esc($judulLaporan ?? 'Laporan Semua Transaksi') ?></title>
  <style>
    body { font-family: Arial, sans-serif; font-size: 13px; color: #333; }
    h2 { text-align: center; margin-bottom: 20px; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #333; padding: 6px; text-align: left; }
    th { background: #eee; }
    .badge { border-radius: 4px; padding: 3px 9px; color: #fff; font-weight: 700; }
    .bg-success { background: #198754 !important; }
    .bg-danger { background: #dc3545 !important; }
    @media print { .no-print { display: none; } }
  </style>
</head>
<body>
  <div>
    <h2><?= esc($judulLaporan ?? 'Laporan Semua Transaksi') ?></h2>
    <table>
      <thead>
        <tr>
          <th>Tanggal</th>
          <th>Nama</th>
          <th>Sumber</th>
          <th>Kegiatan</th>
          <th>Bidang</th>
          <th>Sub-bidang</th>
          <th>Jumlah Transaksi (Rp)</th>
          <th>Jenis Transaksi</th>
          <th>Catatan</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($transaksi as $row): ?>
        <tr>
          <td><?= esc($row['tanggal']) ?></td>
          <td><?= esc($row['nama']) ?></td>
          <td><?= esc($row['sumber']) ?></td>
          <td><?= esc($row['kegiatan'] ?: '-') ?></td>
          <td><?= esc($row['bidang'] ?: '-') ?></td>
          <td><?= esc($row['sub_bidang'] ?: '-') ?></td>
          <td><?= number_format($row['jumlah_transaksi'], 0, ',', '.') ?></td>
          <td>
            <span class="badge <?= strtolower(trim($row['jenis_transaksi'])) == 'pengeluaran' ? 'bg-danger' : 'bg-success' ?>">
              <?= ucfirst($row['jenis_transaksi']) ?>
            </span>
          </td>
          <td><?= esc($row['catatan']) ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <div class="no-print" style="margin-top:30px; text-align:center;">
      <button onclick="window.print()">Cetak</button>
    </div>
  </div>
</body>
</html>
