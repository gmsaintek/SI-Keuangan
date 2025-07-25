<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Kegiatan</title>
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="title" content="Kegiatan" />
        <meta name="author" content="ColorlibHQ" />
        <meta name="description" content="Siskeu Desa Baha"/>

        <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
        <link rel="stylesheet" href="../dist/css/adminlte.css" />
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
                            <div class="col-sm-6"><h3 class="mb-0">Kegiatan</h3></div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kegiatan</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kegiatan_input_form">
                                    <i class="bi bi-plus-lg"></i>
                                    <span>Kegiatan</span>
                                </button>
                                <button type="button" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#cetaklaporan_kegiatan_all">
                                    <i class="bi bi-printer"></i>
                                    <span>Cetak Laporan</span>
                                </button>
                                <div class="modal-container">
                                    <?php include 'includes/forms/pengeluaran/kegiatan_input_form.php'; ?>
                                </div>
                                <div class="modal-container">
                                    <?php include 'includes/forms/cetak_laporan/kegiatan.php'; ?>
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
                                            <th>Bidang</th>
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
                                            <td>Ekspansi perpustakaan SD</td>
                                            <td>01/09/2025</td>
                                            <td>30/09/2025</td>
                                            <td>Pembangunan Desa</td>
                                            <td>1.000.000</td>
                                            <td>750.000</td>
                                            <td>
                                                <span class="badge bg-warning">50%</span>
                                            </td>
                                            <td>SD no.1</td>
                                            <td>
                                                <a href="pengeluaran_kegiatan_each.php" class="text-decoration-none">
                                                    <button class="btn btn-sm btn-info">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </a>
                                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kegiatan_edit_form">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#konfirmasi_hapus">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                                <div class="modal-container">
                                                    <?php include 'includes/forms/pengeluaran/kegiatan_edit_form.php'; ?>
                                                </div>
                                                <div class="modal-container">
                                                    <?php include 'includes/forms/konfirmasi/hapus.php'; ?>
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
            <?php include 'includes/footer.php'; ?>
        </div>

    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./dist/js/adminlte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                    <script>
                    $(document).ready(function () {
                        $('#kegiatanPengeluaranTable').DataTable({
                            lengthMenu: [5, 10, 25, 50, 100],
                            pageLength: 10 // default entries shown
                        });
                    });
                </script>