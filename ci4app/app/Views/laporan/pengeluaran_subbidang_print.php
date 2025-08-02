<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Sub-bidang Pengeluaran</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 14px; }
        h2 { text-align: center; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        @media print { .no-print { display: none; } }
    </style>
</head>
<body>
    <h2>Laporan Sub-bidang Pengeluaran</h2>
    <p>Periode: <?= esc(date('d/m/Y', strtotime($tanggal_mulai))) ?> - <?= esc(date('d/m/Y', strtotime($tanggal_selesai))) ?></p>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Bidang</th>
                <th>Pengeluaran sekarang (Rp)</th>
                <th>Catatan</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data)): $no = 1; foreach ($data as $row): ?>
            <tr>
                <td><?= $no++ ?>.</td>
                <td><?= esc($row['nama_bidang']) ?></td>
                <td><?= number_format($row['pengeluaran_sekarang'], 2, ',', '.') ?></td>
                <td><?= esc($row['catatan']) ?></td>
            </tr>
            <?php endforeach; else: ?>
            <tr><td colspan="4" style="text-align:center">Tidak ada data</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
    <?php if (empty($forExcel)): ?>
    <div class="no-print" style="margin-top:20px;">
        <button onclick="window.print()">Cetak</button>
    </div>
    <?php endif; ?>
</body>
</html>
