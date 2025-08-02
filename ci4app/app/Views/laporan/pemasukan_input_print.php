<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pemasukan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        @media print {
            .no-print { display: none; }
        }
    </style>
</head>
<body class="p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Laporan Pemasukan</h2>
        <button onclick="window.print()" class="btn btn-primary no-print">Print</button>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Sumber Dana</th>
                <th>Jumlah</th>
                <th>Catatan</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($pemasukan)): ?>
                <?php foreach ($pemasukan as $row): ?>
                    <tr>
                        <td><?= esc($row['tanggal']) ?></td>
                        <td><?= esc($row['sumber_dana']) ?></td>
                        <td>Rp<?= number_format($row['jumlah'], 0, ',', '.') ?></td>
                        <td><?= esc($row['catatan']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4" class="text-center">Tidak ada data</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
