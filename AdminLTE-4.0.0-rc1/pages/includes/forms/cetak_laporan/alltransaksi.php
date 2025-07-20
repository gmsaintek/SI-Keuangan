<div class="modal fade" id="cetaklaporan_alltransaksi" tabindex="-1" aria-labelledby="cetaklaporan_alltransaksiLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="cetaklaporan_alltransaksiFormLabel">Cetak Laporan Semua Transaksi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="formatPrint" class="form-label">Format Laporan</label>
                    <select class="form-select" id="formatPrint" required>
                        <option selected disabled>Pilih...</option>
                        <option value="1">PDF</option>
                        <option value="2">XLSX</option>
                        <option value="3">CSV</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="periodPrint" class="form-label">Periode</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dari</span>
                        <input type="date" class="form-control" id="startDatePrint" required>
                        <span class="input-group-text">Sampai</span>
                        <input type="date" class="form-control" id="endDatePrint" required>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="todayCheckPrint" />
                        <label class="form-check-label" for="todayCheckPrint">Sampai hari ini</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="sourcePrint" class="form-label">Sumber Dana</label>
                    <select class="form-select" id="sourcePrint" required>
                        <option selected disabled>Pilih...</option>
                        <option value="1">Semua</option>
                        <option value="2">PBH</option>
                        <option value="3">Dana Desa</option>
                        <option value="4">Alokasi Dana Desa</option>
                        <option value="5">Bantuan Keuangan Khusus Provinsi</option>
                        <option value="6">Bunga Bank</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="inputprintType" class="form-label">Jenis Transaksi</label>
                    <select class="form-select" id="inputprintType" required>
                        <option selected disabled>Pilih...</option>
                        <option value="all">Semua</option>
                        <option value="pemasukan">Pemasukan</option>
                        <option value="pengeluaran">Pengeluaran</option>
                    </select>
                </div>

                <div id="pemasukanprintForm" class="d-none">

                </div>

                <div id="pengeluaranprintForm" class="d-none">
                    <div class="mb-3">
                        <label for="activityPrint" class="form-label">Kegiatan</label>
                        <select class="form-select" id="activityPrint" required>
                            <option selected disabled>Pilih...</option>
                            <option value="1">Semua</option>
                            <option value="2">Pengelolaan Perpustakaan SD</option>
                            <option value="3">...</option>
                            <option value="4">Diluar kegiatan apa pun</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="catPrint" class="form-label">Bidang Pengeluaran</label>
                        <select class="form-select" id="catPrint" required>
                            <option selected disabled>Pilih...</option>
                            <option value="1">Semua</option>
                            <option value="2">Pemberdayaan Masyarakat</option>
                            <option value="3">Penanggulangan Bencana, Darurat, dan Mendesak Desa</option>
                            <option value="4">Pembinaan Kemasyarakatan</option>
                            <option value="5">Pelaksanaan Pembangunan Desa</option>
                            <option value="6">Penyelenggaraan Pemerintahan Desa</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="sub-catPrint" class="form-label">Sub-bidang Pengeluaran</label>
                        <select class="form-select" id="sub-catPrint" required>
                            <option selected disabled>Pilih...</option>
                            <option value="1">Semua</option>
                            <option value="2">Pendidikan</option>
                            <option value="3">Pembangunan</option>
                            <option value="4">...</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary">Cetak</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<script>
  const laporanModal = document.getElementById('cetaklaporan_alltransaksi');

  // Scoped selectors inside this specific modal
  const inputType_print = laporanModal.querySelector('#inputprintType');
  const pemasukanForm_print = laporanModal.querySelector('#pemasukanprintForm');
  const pengeluaranForm_print = laporanModal.querySelector('#pengeluaranprintForm');

  inputType_print.addEventListener('change', function () {
    const type = this.value;
    pemasukanForm_print.classList.add('d-none');
    pengeluaranForm_print.classList.add('d-none');

    if (type === 'pemasukan') {
      pemasukanForm_print.classList.remove('d-none');
    } else if (type === 'pengeluaran') {
      pengeluaranForm_print.classList.remove('d-none');
    }
  });
</script>

<script>
  const dateInput_print = document.querySelector('#cetaklaporan_alltransaksi #endDatePrint');
  const todayCheck_print = document.querySelector('#cetaklaporan_alltransaksi #todayCheckPrint');

  todayCheck_print.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_print.value = today;
    }
  });
</script>
