<div class="modal fade" id="kegiatan_input_form" tabindex="-1" aria-labelledby="kegiatan_input_formLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kegiatan_input_formLabel">Input Kegiatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="basic-url_kegiatan_input" class="form-label">Kegiatan</label>
                    <input type="text" class="form-control" aria-label="Nama Bidang">
                </div>
                <div class="mb-3">
                    <label for="period_kegiatan_input" class="form-label">Periode</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dari</span>
                        <input type="date" class="form-control" id="startDate_kegiatan_input" required>
                        <span class="input-group-text">Sampai</span>
                        <input type="date" class="form-control" id="endDate_kegiatan_input" required>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="todayCheck_kegiatan_input" />
                        <label class="form-check-label" for="todayCheck_kegiatan_input">Mulai hari ini</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="cat_kegiatan_input" class="form-label">Bidang</label>
                    <select class="form-select" id="cat_kegiatan_input" required>
                        <option selected>Pilih Bidang</option>
                        <option value="1">Semua</option>
                        <option value="2">PBH</option>
                        <option value="3">Sumbangan</option>
                        <option value="4">BUMDes</option>
                    </select>
                </div>
                <label for="basic-url_kegiatan_input" class="form-label">Anggaran</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control" aria-label="Anggaran" required>
                    <span class="input-group-text">.00</span>
                </div>
                <div class="mb-3">
                    <label for="note_kegiatan_input" class="form-label">Catatan</label>
                    <textarea class="form-control" id="note_kegiatan_input" rows="3"></textarea>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
  const dateInput_kegiatan_input = document.getElementById('startDate_kegiatan_input');
  const todayCheck_kegiatan_input = document.getElementById('todayCheck_kegiatan_input');

  todayCheck_kegiatan_input.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_kegiatan_input.value = today;
    }
  });
</script>