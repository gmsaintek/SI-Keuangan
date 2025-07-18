<div class="modal fade" id="pengeluaran_edit_form" tabindex="-1" aria-labelledby="pengeluaran_edit_formLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pengeluaran_edit_formLabel">Edit pengeluaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="date_out_edit" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="date_out_edit"  required />
          <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" id="todayCheck" />
            <label class="form-check-label" for="todayCheck">Hari ini</label>
          </div>
        </div>
        <div class="mb-3">
          <label for="source_out_edit" class="form-label">Sumber Dana</label>
          <select class="form-select" id="source_out_edit">
            <option selected>Pilih Sumber Dana</option>
            <option value="1">PBH</option>
            <option value="2">Sumbangan</option>
            <option value="3">BUMDes</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="activity_out_edit" class="form-label">Kegiatan</label>
          <select class="form-select" id="activity_out_edit">
            <option selected>Pilih Kegiatan</option>
            <option value="1">PBH</option>
            <option value="2">Sumbangan</option>
            <option value="3">BUMDes</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="cat_out_edit" class="form-label">Bidang Pengeluaran</label>
          <select class="form-select" id="cat_out_edit">
            <option selected>Pilih Bidang pengeluaran</option>
            <option value="1">Pajak</option>
            <option value="2">Sosial</option>
            <option value="3">Usaha</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="sub-cat_out_edit" class="form-label">Sub-bidang</label>
          <select class="form-select" id="sub-cat_out_edit">
            <option selected>Pilih Sub-bidang</option>
            <option value="1">PBH</option>
            <option value="2">Sumbangan</option>
            <option value="3">BUMDes</option>
          </select>
        </div>
        <label for="basic-url" class="form-label">Jumlah pengeluaran</label>
        <div class="input-group mb-3">
          <span class="input-group-text">Rp</span>
          <input type="number" class="form-control" aria-label="Jumlah pengeluaran" required>
          <span class="input-group-text">.00</span>
        </div>
        <div class="mb-3">
          <label for="formFile_out_edit" class="form-label">Nota</label>
          <input class="form-control" type="file" id="formFile_out_edit">
        </div>          
        <div class="mb-3">
          <label for="note_out_edit" class="form-label">Catatan</label>
          <textarea class="form-control" id="note_out_edit" rows="3"></textarea>
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
  const dateInput_out_edit = document.getElementById('date_out_edit');
  const todayCheck_out_edit = document.getElementById('todayCheck_out_edit');

  todayCheck_out_edit.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_out_edit.value = today;
    }
  });
</script>