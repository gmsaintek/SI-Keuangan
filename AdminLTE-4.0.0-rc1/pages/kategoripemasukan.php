<!DOCTYPE html>
  <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Pemasukan</title>
    
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
                <div class="col-sm-6"><h3 class="mb-0">Pemasukan</h3></div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pemasukan</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="app-content">
            <div class="container-fluid">
              <div class="row">
                <div class="d-flex gap-2">
                  <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#kategoripemasukanform">
                    <i class="bi bi-plus-lg"></i>
                    <span>Kategori</span>
                  </button>
                  <?php include 'includes/forms/kategoripemasukanform.php'; ?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <table id="myTable" class="table table-striped">
                    <thead>
                      <tr class="align-middle">
                        <th>No.</th>
                        <th>Nama Kategori</th>
                        <th>Anggaran (Rp)</th>
                        <th>Penggunaan sekarang (Rp)</th>
                        <th>Catatan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Pajak</td>
                        <td>100.000.000</td>
                        <td>50.000.000</td>
                        <td>-</td>
                        <td>
                          <button class="btn btn-sm btn-info">
                            <i class="bi bi-eye"></i>
                          </button>
                          <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kategoripemasukanform">
                            <i class="bi bi-pencil-square"></i>
                          </button>
                          <?php include 'includes/forms/kategoripemasukanform.php'; ?>
                          <button class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i>
                          </button>
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