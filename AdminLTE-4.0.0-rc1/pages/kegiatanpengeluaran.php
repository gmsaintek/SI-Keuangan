<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Siskeu Dashboard</title>
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="title" content="Siskeu Dashboard" />
        <meta name="author" content="ColorlibHQ" />
        <meta name="description" content="Siskeu Desa Baha"/>

        <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
        <link rel="stylesheet" href="../../dist/css/adminlte.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    </head>
    <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
        <div class="app-wrapper">
            <?php include 'includes/header.php';?>
            <?php include 'includes/sidebar.php';?>
            <main class="app-main">
                <div class="app-content-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6"><h3 class="mb-0">Kegiatan Pengeluaran</h3></div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kegiatan Pengeluaran</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kegiatanform">
                                    <i class="bi bi-plus-lg"></i>
                                    <span>Kegiatan Pengeluaran</span>
                                </button>
                                <button type="button" class="btn btn-warning mb-2">
                                    <i class="bi bi-printer"></i>
                                    <span>Cetak Laporan</span>
                                </button>
                                <div class="modal-container">
                                    <?php include 'includes/forms/kegiatanform.php'; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="kegiatanPengeluaranTable" class="table table-striped">
                                    <thead>
                                        <tr class="align-middle">
                                            <th>No.</th>
                                            <th>Kegiatan</th>
                                            <th>Mulai</th>
                                            <th>Selesai</th>
                                            <th>Anggaran (Rp)</th>
                                            <th>Pengeluaran (Rp)</th>
                                            <th>Kemajuan</th>
                                            <th>Catatan</th>
                                            <th width="150px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Acara September</td>
                                            <td>01/09/2025</td>
                                            <td>30/09/2025</td>
                                            <td>1.000.000</td>
                                            <td>500.000</td>
                                            <td>
                                                <span class="badge bg-warning">50%</span>
                                            </td>
                                            <td>Persiapan Acara</td>
                                            <td>
                                                <a href="perkegiatan.php" class="text-decoration-none">
                                                    <button class="btn btn-sm btn-info">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </a>
                                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kegiatanform">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#areyousure">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                                <div class="modal-container">
                                                    <?php include 'includes/forms/kegiatanform.php'; ?>
                                                </div>
                                                <div class="modal-container">
                                                    <?php include 'includes/forms/yakin.php'; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./dist/js/adminlte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>