<div class="modal fade" id="in_kegiatan_input_form" tabindex="-1" aria-labelledby="in_kegiatan_input_formLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="in_kegiatan_input_formLabel">Input pengeluaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="date_in_kegiatan_input" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="date_in_kegiatan_input"  required />
          <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" id="todayCheck_in_kegiatan_input" />
            <label class="form-check-label" for="todayCheck_in_kegiatan_input">Hari ini</label>
          </div>
        </div>
        <div class="mb-3">
          <label for="source_in_kegiatan_input" class="form-label">Sumber Dana</label>
          <select class="form-select" id="source_in_kegiatan_input">
            <option selected>Pilih Sumber Dana</option>
            <option value="1">PBH</option>
            <option value="2">Sumbangan</option>
            <option value="3">BUMDes</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="sub-cat_in_kegiatan_input" class="form-label">Sub-bidang Pengeluaran</label>
          <select class="form-select" id="sub-cat_in_kegiatan_input">
            <option selected>Pilih Sub-bidang pengeluaran</option>
            <option value="1">Pajak</option>
            <option value="2">Sosial</option>
            <option value="3">Usaha</option>
          </select>
        </div>
        <label for="basic-url_in_kegiatan_input" class="form-label">Jumlah pengeluaran</label>
        <div class="input-group mb-3">
          <span class="input-group-text">Rp</span>
          <input type="number" class="form-control" aria-label="Jumlah pengeluaran" required>
          <span class="input-group-text">.00</span>
        </div>
        <div class="mb-3">
          <label for="formFile_in_kegiatan_input" class="form-label">Nota</label>
          <input class="form-control" type="file" id="formFile_in_kegiatan_input">
        </div>          
        <div class="mb-3">
          <label for="note_in_kegiatan_input" class="form-label">Catatan</label>
          <textarea class="form-control" id="note_in_kegiatan_input" rows="3"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script>
  const dateInput_in_kegiatan_input = document.getElementById('date_in_kegiatan_input');
  const todayCheck_in_kegiatan_input = document.getElementById('todayCheck_in_kegiatan_input');

  todayCheck_in_kegiatan_input.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_in_kegiatan_input.value = today;
    }
  });
</script>