<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>(nama Kategori)</title>

            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta name="title" content="Siskeu Dashboard" />
            <meta name="author" content="ColorlibHQ" />
            <meta name="description" content="Siskeu Desa Baha"/>

            <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

            <link rel="stylesheet" href="../../dist/css/adminlte.css" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                                <div class="col-sm-6">
                                    <h3 class="mb-0">(nama Kategori)</h3>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-end">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="pengeluaran_kategori.php">Semua Kategori</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">(nama Kategori)</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="d-flex gap-2">
                                    <button type="button" class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#pengeluaran_input_kegiatanform">
                                        <i class="bi bi-plus-lg"></i>
                                        <span>Pengeluaran</span>
                                    </button>
                                    <button type="button" class="btn btn-warning mb-2">
                                        <i class="bi bi-printer"></i>
                                        <span>Cetak Laporan</span>
                                    </button>
                                    <div class="modal-container">
                                        <?php include 'includes/forms/pengeluaran_input_kegiatan_form.php'; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr class="align-middle">
                                                <th>Tanggal</th>
                                                <th>Sumber</th>
                                                <th>Kategori</th>
                                                <th>Jumlah Pengeluaran</th>
                                                <th>Nota</th>
                                                <th>Catatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01/06/2025</td>
                                                <td>Dana Desa</td>
                                                <td>Pembangunan Jalan</td>
                                                <td>Rp500.000.000</td>
                                                <td>
                                                    <a href="#">Nota</a>
                                                </td>
                                                <td>Tahap 1 pembangunan jalan utama</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#pengeluaran_input_kegiatanform">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#konfirmasi">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                    <div class="modal-container">
                                                        <?php include 'includes/forms/pengeluaran_input_kegiatan_form.php'; ?>
                                                    </div>
                                                    <div class="modal-container">
                                                        <?php include 'includes/forms/konfirmasi.php'; ?>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>03/07/2025</td>
                                                <td>ADD</td>
                                                <td>Pelatihan Kader Posyandu</td>
                                                <td>Rp75.000.000</td>
                                                <td>
                                                    <a href="#">Nota</a>
                                                </td>
                                                <td>Pelatihan selama 3 hari di balai desa</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#pengeluaran_input_kegiatanform">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#konfirmasi">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                    <div class="modal-container">
                                                        <?php include 'includes/forms/pengeluaran_input_kegiatan_form.php'; ?>
                                                    </div>
                                                    <div class="modal-container">
                                                        <?php include 'includes/forms/konfirmasi.php'; ?>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>07/07/2025</td>
                                                <td>PBH</td>
                                                <td>Pembelian Alat Kesehatan</td>
                                                <td>Rp120.000.000</td>
                                                <td>
                                                    <a href="#">Nota</a>
                                                </td>
                                                <td>Pengadaan APD dan masker</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#pengeluaran_input_kegiatanform">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#konfirmasi">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                    <div class="modal-container">
                                                        <?php include 'includes/forms/pengeluaran_input_kegiatan_form.php'; ?>
                                                    </div>
                                                    <div class="modal-container">
                                                        <?php include 'includes/forms/konfirmasi.php'; ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>  
                <?php include 'includes/footer.php';?>

            <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="../dist/js/adminlte.js"></script>
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