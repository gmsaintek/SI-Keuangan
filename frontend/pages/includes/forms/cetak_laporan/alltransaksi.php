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
                        <option value="PDF">PDF</option>
                        <option value="XLSX">XLSX</option>
                        <option value="CSV">CSV</option>
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
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="todayCheckPrint" />
                        <label class="form-check-label" for="todayCheckPrint">Sampai hari ini</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="alltimePrint" />
                        <label class="form-check-label" for="alltimePrint">Sepanjang Waktu</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="sourcePrint" class="form-label">Sumber Dana</label>
                    <select class="form-select" id="sourcePrint" required>
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
                            <option value="Semua">Semua</option>
                            <option value="Perpustakaan">Pengelolaan Perpustakaan SD</option>
                            <option value="...">...</option>
                            <option value="Diluar">Diluar kegiatan apa pun</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="catPrint" class="form-label">Bidang Pengeluaran</label>
                        <select class="form-select" id="catPrint" required>
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
                        <label for="sub-catPrint" class="form-label">Sub-bidang Pengeluaran</label>
                        <select class="form-select" id="sub-catPrint" required>
                            <option selected disabled>Pilih...</option>
                            <option value="Semua">Semua</option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Pembangunan">Pembangunan</option>
                            <option value="...">...</option>
                        </select>
                    </div>
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
    const startInput = document.getElementById("startDatePrint");
    const endInput = document.getElementById("endDatePrint");
    const todayCheck = document.getElementById("todayCheckPrint");
    const allTimeCheck = document.getElementById("alltimePrint");

    todayCheck.addEventListener("change", function () {
        if (this.checked) {
            const today = new Date().toISOString().slice(0, 10);
            endInput.value = today;
        }
    });

    allTimeCheck.addEventListener("change", function () {
        const isChecked = this.checked;
        startInput.disabled = isChecked;
        endInput.disabled = isChecked;

        if (isChecked) {
            startInput.value = "";
            endInput.value = "";
            todayCheck.disabled = true;
        } else {
            todayCheck.disabled = false;
        }
    });
</script>

