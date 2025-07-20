<div class="modal fade" id="kegiatan_edit_form" tabindex="-1" aria-labelledby="kegiatan_edit_formLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kegiatan_edit_formLabel">Edit Kegiatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="basic-url_kegiatan_edit" class="form-label">Kegiatan</label>
                    <input type="text" class="form-control" aria-label="Nama Kegiatan">
                </div>
                <div class="mb-3">
                    <label for="period_kegiatan_edit" class="form-label">Periode</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dari</span>
                        <input type="date" class="form-control" id="startDate_kegiatan_edit" required>
                        <span class="input-group-text">Sampai</span>
                        <input type="date" class="form-control" id="endDate_kegiatan_edit" required>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="todayCheck_kegiatan_edit" />
                        <label class="form-check-label" for="todayCheck_kegiatan_edit">Mulai hari ini</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="cat_kegiatan_edit" class="form-label">Bidang</label>
                    <select class="form-select" id="cat_kegiatan_edit" required>
                        <option selected disabled>Pilih...</option>
                        <option value="1">Pemberdayaan Masyarakat</option>
                        <option value="2">Penanggulangan Bencana, Darurat, dan Mendesak Desa</option>
                        <option value="3">Pembinaan Kemasyarakatan</option>
                        <option value="4">Pelaksanaan Pembangunan Desa</option>
                        <option value="5">Penyelenggaraan Pemerintahan Desa</option>
                    </select>
                </div>
                <label for="basic-url_kegiatan_edit" class="form-label">Anggaran</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control" aria-label="Anggaran" required>
                    <span class="input-group-text">.00</span>
                </div>
                <div class="mb-3">
                    <label for="note_kegiatan_edit" class="form-label">Catatan</label>
                    <textarea class="form-control" id="note_kegiatan_edit" rows="3"></textarea>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                
            </div>
        </div>
    </div>
</div>

<script>
  const dateInput_kegiatan_edit = document.getElementById('startDate_kegiatan_edit');
  const todayCheck_kegiatan_edit = document.getElementById('todayCheck_kegiatan_edit');

  todayCheck_kegiatan_edit.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_kegiatan_edit.value = today;
    }
  });
</script>