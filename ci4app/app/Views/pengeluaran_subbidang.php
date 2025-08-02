<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sub-bidang Pengeluaran</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Sub-bidang Pengeluaran" />
    <meta name="author" content="ColorlibHQ" />
    <meta name="description" content="Siskeu Desa Baha"/>

    <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Ganti ../dist/... ke base_url('assets/...') -->
    <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.css') ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <!-- DataTables & jQuery tetap CDN -->
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
                        <div class="col-sm-6">
                            <h3 class="mb-0">Sub-bidang</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sub-bidang</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#subbidang_input_form">
                                <i class="bi bi-plus-lg"></i>
                                <span>Sub-bidang</span>
                            </button>
                            <button type="button" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#cetaklaporan_subbidang_all">
                                <i class="bi bi-printer"></i>
                                <span>Cetak Laporan</span>
                            </button>
                        </div>
                        <div class="modal-container">
                            <?= view('includes/forms/pengeluaran/subbidang_input_form'); ?>
                        </div>
                        <div class="modal-container">
                            <?= view('includes/forms/cetak_laporan/subbidang'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr class="align-middle">
                                        <th width="20px">No.</th>
                                        <th>Nama Bidang</th>
                                        <th>Pengeluaran sekarang (Rp)</th>
                                        <th width="300px">Catatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (isset($subbidang) && count($subbidang) > 0): ?>
                                        <?php $no = 1; foreach ($subbidang as $row): ?>
                                            <tr class="align-middle">
                                                <td><?= $no++ ?>.</td>
                                                <td><?= esc($row['nama_bidang']) ?></td>
                                                <td><?= number_format($row['pengeluaran_sekarang'], 2, ',', '.') ?></td>
                                                <td><?= esc($row['catatan']) ?></td>
                                                <td>
                                                    <a href="<?= base_url('pengeluaran_subbidang_each/'.$row['id']) ?>" class="text-decoration-none">
                                                        <button class="btn btn-sm btn-info">
                                                            <i class="bi bi-eye"></i>
                                                        </button>
                                                    </a>
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#subbidang_edit_form_<?= $row['id'] ?>">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapus_<?= esc($row['id']) ?>">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                    <div class="modal-container">
                                                        <?= view('includes/forms/pengeluaran/subbidang_edit_form', ['row' => $row]); ?>
                                                    </div>
                                                    <div class="modal-container">
                                                          <?= view('includes/forms/konfirmasi/hapus', [
                                                              'row' => $row,
                                                              'actionUrl' => base_url('pengeluaran_subbidang/delete/' . $row['id'])
                                                          ]); ?>
                                                      </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data</td>
                                        </tr>
                                    <?php endif ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?= view('includes/footer'); ?>
    </div>

    <!-- Tetap sama urutan CDN/script seperti frontend, yang ../dist/... ganti ke base_url('assets/...') -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/js/adminlte.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                lengthMenu: [5, 10, 25, 50, 100],
                pageLength: 10 // default entries shown
            });
        });
    </script>
</body>
</html>
