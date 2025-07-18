<div class="modal fade" id="in_subbidang_edit_form" tabindex="-1" aria-labelledby="in_subbidang_edit_formLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="in_subbidang_edit_formLabel">Edit pengeluaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="date_subbidang_edit" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="date_subbidang_edit"  required />
          <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" id="todayCheck_subbidang_edit" />
            <label class="form-check-label" for="todayCheck_subbidang_edit">Hari ini</label>
          </div>
        </div>
        <div class="mb-3">
          <label for="source_subbidang_edit" class="form-label">Sumber Dana</label>
          <select class="form-select" id="source_subbidang_edit">
            <option selected>Pilih Sumber Dana</option>
            <option value="1">PBH</option>
            <option value="2">Sumbangan</option>
            <option value="3">BUMDes</option>
          </select>
        </div>
               <div class="mb-3">
          <label for="activity_subbidang_edit" class="form-label">Kegiatan</label>
          <select class="form-select" id="activity_subbidang_edit">
            <option selected>Pilih Kegiatan</option>
            <option value="1">Pajak</option>
            <option value="2">Sosial</option>
            <option value="3">Usaha</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="cat_subbidang_edit" class="form-label">Bidang Pengeluaran</label>
          <select class="form-select" id="cat_subbidang_edit">
            <option selected>Pilih Bidang pengeluaran</option>
            <option value="1">Pajak</option>
            <option value="2">Sosial</option>
            <option value="3">Usaha</option>
          </select>
        </div>
        <label for="basic-url_subbidang_edit" class="form-label">Jumlah pengeluaran</label>
        <div class="input-group mb-3">
          <span class="input-group-text">Rp</span>
          <input type="number" class="form-control" aria-label="Jumlah pengeluaran" required>
          <span class="input-group-text">.00</span>
        </div>
        <div class="mb-3">
          <label for="formFile_subbidang_edit" class="form-label">Nota</label>
          <input class="form-control" type="file" id="formFile_subbidang_edit">
        </div>          
        <div class="mb-3">
          <label for="note_subbidang_edit" class="form-label">Catatan</label>
          <textarea class="form-control" id="note_subbidang_edit" rows="3"></textarea>
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
  const dateInput_subbidang_edit = document.getElementById('date_subbidang_edit');
  const todayCheck_subbidang_edit = document.getElementById('todayCheck_subbidang_edit');

  todayCheck_subbidang_edit.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_subbidang_edit.value = today;
    }
  });
</script>