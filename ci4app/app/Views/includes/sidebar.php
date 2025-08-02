<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="<?= base_url() ?>" class="brand-link">
            <span class="brand-text fw-light">Sisforpeg</span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <div class="user-panel d-flex align-items-center p-3">
                <div class="image me-2">
                    <img src="<?= base_url('assets/img/user5-128x128.jpg') ?>" class="img-circle elevation-2" alt="User Image" style="width: 32px; height: 32px;" />
                </div>
                <div class="info">
                    <a href="#" class="d-block fw-bold text-white">(name)</a>
                    <small class="text-muted">Bendahara Desa</small>
                </div>  
            </div>

            <hr class="my-3 text-secondary" />

            <ul class="nav sidebar-menu flex-column" role="menu">
                <li class="nav-item">
                    <a href="<?= base_url('transaksi_all') ?>" class="nav-link">
                        <i class="nav-icon bi bi-wallet"></i>
                        <p>Semua Transaksi</p>
                    </a>
                </li>

                <li class="nav-header">Pengeluaran</li>
                <li class="nav-item">
                    <a href="<?= base_url('pengeluaran_kegiatan') ?>" class="nav-link">
                        <i class="nav-icon bi bi-calendar-event"></i>
                        <p>Kegiatan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('pengeluaran_bidang') ?>" class="nav-link">
                        <i class="nav-icon bi bi-folder2"></i>
                        <p>Bidang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('pengeluaran_subbidang') ?>" class="nav-link">
                        <i class="nav-icon bi bi-folder2"></i>
                        <p>Sub-bidang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('pengeluaran_input') ?>" class="nav-link bg-danger text-white">
                        <i class="nav-icon bi bi-cash-stack"></i>
                        <p>Input Pengeluaran</p>
                    </a>
                </li>

                <li class="nav-header">Pemasukan</li>
                <li class="nav-item">
                    <a href="<?= base_url('pemasukan_sumberdana') ?>" class="nav-link">
                        <i class="nav-icon bi bi-bank"></i>
                        <p>Sumber Dana</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('pemasukan_input') ?>" class="nav-link bg-success text-white">
                        <i class="nav-icon bi bi-plus-circle"></i>
                        <p>Input Pemasukan</p>
                    </a>
                </li>

                <hr class="my-3 text-secondary" />

                <li class="nav-item">
                    <a href="<?= base_url('logout') ?>" class="nav-link text-danger">
                        <i class="nav-icon bi bi-box-arrow-right"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
