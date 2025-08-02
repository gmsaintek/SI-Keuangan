<?php helper('url'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kegiatan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Kegiatan">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="Siskeu Desa Baha">

    <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.css') ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <style>
        td {
            white-space: normal !important;
            word-wrap: break-word;
            vertical-align: middle !important;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">
    <?= view('includes/header'); ?>
    <?= view('includes/sidebar'); ?>

    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Kegiatan</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                            <li class="breadcrumb-item active">Kegiatan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-content">
            <div class="container-fluid">
                <div class="d-flex gap-2">
                    <button class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kegiatan_input_form">
                        <i class="bi bi-plus-lg"></i><span>Kegiatan</span>
                    </button>
                    <button class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#cetaklaporan_kegiatan_all">
                        <i class="bi bi-printer"></i><span>Cetak Laporan</span>
                    </button>
                </div>

                <table id="kegiatanPengeluaranTable" class="table table-striped">
                    <thead>
                        <tr class="align-middle">
                            <th>No.</th>
                            <th>Kegiatan</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Bidang</th>
                            <th>Anggaran (Rp)</th>
                            <th>Pengeluaran (Rp)</th>
                            <th>Kemajuan</th>
                            <th>Catatan</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach ($kegiatan as $row): ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= esc($row['kegiatan']) ?></td>
                            <td><?= esc($row['tanggal_mulai']) ?></td>
                            <td><?= esc($row['tanggal_selesai']) ?></td>
                            <td><?= esc($row['bidang']) ?></td>
                            <td><?= number_format($row['anggaran'], 0, ',', '.') ?></td>
                            <td><?= number_format($row['pengeluaran'], 0, ',', '.') ?></td>
                            <?php
                                $kemajuan = (int) $row['kemajuan'];
                                $warna = 'bg-secondary';
                                if ($kemajuan >= 80) {
                                    $warna = 'bg-success'; // hijau
                                } elseif ($kemajuan >= 50) {
                                    $warna = 'bg-warning'; // kuning
                                } elseif ($kemajuan > 0) {
                                    $warna = 'bg-danger'; // merah
                                }
                            ?>
                            <td><span class="badge <?= $warna ?>"><?= $kemajuan ?>%</span></td>
                            <td><?= esc($row['catatan']) ?></td>
                            <td>
                                <a href="<?= base_url('pengeluaran_kegiatan_each/'.$row['id']) ?>" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a>
                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kegiatan_edit_form_<?= $row['id'] ?>"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#konfirmasi_hapus_<?= $row['id'] ?>"><i class="bi bi-trash"></i></button>

                                <?= view('includes/forms/pengeluaran/kegiatan_edit_form', ['row' => $row]) ?>
                                <?= view('includes/forms/konfirmasi/hapus', ['actionUrl' => 'pengeluaran_kegiatan/delete/'.$row['id']]) ?>

                          </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <?= view('includes/forms/pengeluaran/kegiatan_input_form') ?>
                <?= view('includes/forms/cetak_laporan/kegiatan') ?>
            </div>
        </div>
    </main>
    <?= view('includes/footer'); ?>
</div>

<script>
$(document).ready(function () {
    $('#kegiatanPengeluaranTable').DataTable({
        lengthMenu: [5, 10, 25, 50, 100],
        pageLength: 10
    });
});
</script>
</body>
</html>
