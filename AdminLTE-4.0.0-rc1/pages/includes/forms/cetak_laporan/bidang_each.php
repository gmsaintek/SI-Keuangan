<div class="modal fade" id="cetaklaporan_bidang_each" tabindex="-1" aria-labelledby="cetaklaporan_bidang_eachLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="cetaklaporan_bidang_eachLabel">Cetak Laporan Pengeluaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="format_bidang_each" class="form-label">Format Laporan</label>
                    <select class="form-select" id="format_bidang_each" required>
                        <option selected>Pilih Format</option>
                        <option value="1">PDF</option>
                        <option value="2">XLSX</option>
                        <option value="3">CSV</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="period_bidang_each" class="form-label">Periode</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dari</span>
                        <input type="date" class="form-control" id="startDate_bidang_each" required>
                        <span class="input-group-text">Sampai</span>
                        <input type="date" class="form-control" id="endDate_bidang_each" required>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="todayCheck_bidang_each" />
                        <label class="form-check-label" for="todayCheck_bidang_each">Sampai hari ini</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="source_bidang_each" class="form-label">Sumber Dana</label>
                    <select class="form-select" id="source_bidang_each" required>
                        <option selected>Pilih Sumber Dana</option>
                        <option value="1">Semua</option>
                        <option value="2">PBH</option>
                        <option value="3">Sumbangan</option>
                        <option value="4">BUMDes</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="activity_kegiatan_each" class="form-label">Kegiatan</label>
                    <select class="form-select" id="activity_kegiatan_each">
                        <option selected>Pilih Kegiatan</option>
                        <option value="2">PBH</option>
                        <option value="3">Sumbangan</option>
                        <option value="4">BUMDes</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cat_bidang_each" class="form-label">Sub-bidang</label>
                    <select class="form-select" id="cat_bidang_each" required>
                        <option selected>Pilih Sub-bidang</option>
                        <option value="1">Semua</option>
                        <option value="2">PBH</option>
                        <option value="3">Sumbangan</option>
                        <option value="4">BUMDes</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
  const dateInput_bidang_each = document.getElementById('endDate_bidang_each');
  const todayCheck_bidang_each = document.getElementById('todayCheck_bidang_each');

  todayCheck_bidang_each.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_bidang_each.value = today;
    }
  });
</script>