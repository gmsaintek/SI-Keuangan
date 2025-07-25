<div class="modal fade" id="cetaklaporan_pengeluaran" tabindex="-1" aria-labelledby="cetaklaporan_pengeluaranLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="cetaklaporan_pengeluaranLabel">Cetak Laporan Pengeluaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="format_cetak_pengeluaran" class="form-label">Format Laporan</label>
                    <select class="form-select" id="format_cetak_pengeluaran" required>
                        <option selected disabled>Pilih...</option>
                        <option value="PDF">PDF</option>
                        <option value="XLSX">XLSX</option>
                        <option value="CSV">CSV</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="period_cetak_pengeluaran" class="form-label">Periode</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dari</span>
                        <input type="date" class="form-control" id="startDate_cetak_pengeluaran" required>
                        <span class="input-group-text">Sampai</span>
                        <input type="date" class="form-control" id="endDate_cetak_pengeluaran" required>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="todayCheck_cetak_pengeluaran" />
                        <label class="form-check-label" for="todayCheck_cetak_pengeluaran">Sampai hari ini</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="source_cetak_pengeluaran" class="form-label">Sumber Dana</label>
                    <select class="form-select" id="source_cetak_pengeluaran" required>
                        <option selected disabled>Pilih...</option>
                        <option value="Semua">Semua</option>
                        <option value="PBH">PBH</option>
                        <option value="DD">Dana Desa</option>
                        <option value="ADD">Alokasi Dana Desa</option>
                        <option value="BKK">Bantuan Keuangan Khusus Provinsi</option>
                        <option value="Bunga">Bunga Bank</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="activity_cetak_pengeluaran" class="form-label">Kegiatan</label>
                    <select class="form-select" id="activity_cetak_pengeluaran" required>
                        <option selected disabled>Pilih...</option>
                        <option value="Semua">Semua</option>
                        <option value="Perpustakaan">Pengelolaan Perpustakaan SD</option>
                        <option value="...">...</option>
                        <option value="Diluar">Diluar kegiatan apa pun</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cat_cetak_pengeluaran" class="form-label">Bidang</label>
                    <select class="form-select" id="cat_cetak_pengeluaran" required>
                        <option selected disabled>Pilih...</option>
                        <option value="Semua">Semua</option>
                        <option value="Pemberdayaan">Pemberdayaan Masyarakat</option>
                        <option value="Bencana">Penanggulangan Bencana, Darurat, dan Mendesak Desa</option>
                        <option value="Pembinaan">Pembinaan Kemasyarakatan</option>
                        <option value="Pembangunan">Pelaksanaan Pembangunan Desa</option>
                        <option value="Pemerintahan">Penyelenggaraan Pemerintahan Desa</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sub-cat_cetak_pengeluaran" class="form-label">Sub-bidang</label>
                    <select class="form-select" id="sub-cat_cetak_pengeluaran" required>
                        <option selected disabled>Pilih...</option>
                        <option value="Semua">Semua</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Pembangunan">Pembangunan</option>
                        <option value="...">...</option>
                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-warning">Cetak</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<script>
  const dateInput_cetak_pengeluaran = document.getElementById('date_cetak_pengeluaran');
  const todayCheck_cetak_pengeluaran = document.getElementById('todayCheck_cetak_pengeluaran');

  todayCheck_cetak_pengeluaran.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_cetak_pengeluaran.value = today;
    }
  });
</script>