<div class="modal fade" id="cetaklaporan_kegiatan_each" tabindex="-1" aria-labelledby="cetaklaporan_kegiatan_eachLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="cetaklaporan_kegiatan_eachLabel">Cetak Laporan Pengeluaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="format_kegiatan_each" class="form-label">Format Laporan</label>
                    <select class="form-select" id="format_kegiatan_each" required>
                        <option selected disabled>Pilih...</option>
                        <option value="PDF">PDF</option>
                        <option value="XLSX">XLSX</option>
                        <option value="CSV">CSV</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="period_kegiatan_each" class="form-label">Periode</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dari</span>
                        <input type="date" class="form-control" id="startDate_kegiatan_each" required>
                        <span class="input-group-text">Sampai</span>
                        <input type="date" class="form-control" id="endDate_kegiatan_each" required>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="todayCheck_kegiatan_each" />
                        <label class="form-check-label" for="todayCheck_kegiatan_each">Sampai hari ini</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="source_kegiatan_each" class="form-label">Sumber Dana</label>
                    <select class="form-select" id="source_kegiatan_each" required>
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
                    <label for="sub-cat_kegiatan_each" class="form-label">Sub-bidang</label>
                    <select class="form-select" id="sub-ca_kegiatan_each" required>
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
  const dateInput_kegiatan_each = document.getElementById('endDate_kegiatan_each');
  const todayCheck_kegiatan_each = document.getElementById('todayCheck_kegiatan_each');

  todayCheck_kegiatan_each.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_kegiatan_each.value = today;
    }
  });
</script>