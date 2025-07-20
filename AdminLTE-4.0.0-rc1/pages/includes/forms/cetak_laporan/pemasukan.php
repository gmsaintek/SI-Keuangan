<div class="modal fade" id="cetaklaporan_pemasukan" tabindex="-1" aria-labelledby="cetaklaporan_pemasukanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="cetaklaporan_pemasukanLabel">Cetak Laporan Pemasukan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="format_cetak_pemasukan" class="form-label">Format Laporan</label>
                    <select class="form-select" id="format_cetak_pemasukan" required>
                        <option selected>Pilih Format</option>
                        <option value="1">PDF</option>
                        <option value="2">XLSX</option>
                        <option value="3">CSV</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="period_cetak_pemasukan" class="form-label">Periode</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dari</span>
                        <input type="date" class="form-control" id="startDate_cetak_pemasukan" required>
                        <span class="input-group-text">Sampai</span>
                        <input type="date" class="form-control" id="endDate_cetak_pemasukan" required>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="todayCheck_cetak_pemasukan" />
                        <label class="form-check-label" for="todayCheck_cetak_pemasukan">Sampai hari ini</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="source_cetak_pemasukan" class="form-label">Sumber Dana</label>
                    <select class="form-select" id="source_cetak_pemasukan" required>
                        <option selected>Pilih...</option>
                        <option value="1">Semua</option>
                        <option value="2">PBH</option>
                        <option value="3">Dana Desa</option>
                        <option value="4">Alokasi Dana Desa</option>
                        <option value="5">Bantuan Keuangan Khusus Provinsi</option>
                        <option value="6">Bunga Bank</option>
                    </select>
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
  const dateInput_cetak_pemasukan = document.getElementById('endDate_cetak_pemasukan');
  const todayCheck_cetak_pemasukan = document.getElementById('todayCheck_cetak_pemasukan');

  todayCheck_cetak_pemasukan.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_cetak_pemasukan.value = today;
    }
  });
</script>