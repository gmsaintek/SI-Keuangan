<div class="modal fade" id="in_bidang_edit_form" tabindex="-1" aria-labelledby="in_bidang_edit_formLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="in_bidang_edit_formLabel">Edit pengeluaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="date_bidang_edit" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="date_bidang_edit"  required />
          <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" id="todayCheck" />
            <label class="form-check-label" for="todayCheck">Hari ini</label>
          </div>
        </div>
        <div class="mb-3">
          <label for="source_bidang_edit" class="form-label">Sumber Dana</label>
          <select class="form-select" id="source_bidang_edit" required>
            <option selected disabled>Pilih...</option>
            <option value="PBH">PBH</option>
            <option value="DD">Dana Desa</option>
            <option value="ADD">Alokasi Dana Desa</option>
            <option value="BKK">Bantuan Keuangan Khusus Provinsi</option>
            <option value="Bunga">Bunga Bank</option>
          </select>
        </div>
        
        <div class="mb-3">
          <label for="sub-cat_bidang_edit" class="form-label">Sub-bidang Pengeluaran</label>
          <select class="form-select" id="sub-cat_bidang_edit" required>
            <option selected disabled>Pilih...</option>
            <option value="Pendidikan">Pendidikan</option>
            <option value="Pembangunan">Pembangunan</option>
            <option value="...">...</option>
          </select>
        </div>
        <label for="basic-url_bidang_edit" class="form-label">Jumlah pengeluaran</label>
        <div class="input-group mb-3">
          <span class="input-group-text">Rp</span>
          <input type="number" class="form-control" aria-label="Jumlah pengeluaran" required>
          <span class="input-group-text">.00</span>
        </div>
        <div class="mb-3">
          <label for="formFile_bidang_edit" class="form-label">Nota</label>
          <input class="form-control" type="file" id="formFile_bidang_edit" required>
        </div>          
        <div class="mb-3">
          <label for="note_bidang_edit" class="form-label">Catatan</label>
          <textarea class="form-control" id="note" rows="3"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        
      </div>
    </div>
  </div>
</div>

<script>
  const dateInput_bidang_edit = document.getElementById('date_bidang_edit');
  const todayCheck_bidang_edit = document.getElementById('todayCheck_bidang_edit');

  todayCheck_bidang_edit.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_bidang_edit.value = today;
    }
  });
</script>