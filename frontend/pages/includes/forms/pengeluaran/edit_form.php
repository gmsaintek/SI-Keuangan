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
          <select class="form-select" id="source_out_edit" required>
            <option selected disabled>Pilih...</option>
            <option value="PBH">PBH</option>
            <option value="DD">Dana Desa</option>
            <option value="ADD">Alokasi Dana Desa</option>
            <option value="BKK">Bantuan Keuangan Khusus Provinsi</option>
            <option value="Bunga">Bunga Bank</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="activity_out_edit" class="form-label">Kegiatan</label>
          <select class="form-select" id="activity_out_edit">
            <option selected>Pilih...</option>
            <option value="Perpustakaan">Pengelolaan Perpustakaan SD</option>
            <option value="...">...</option>
            <option value="Diluar">Diluar kegiatan apa pun</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="cat_out_edit" class="form-label">Bidang Pengeluaran</label>
          <select class="form-select" id="cat_out_edit" required>
            <option selected disabled>Pilih...</option>
            <option value="Pemberdayaan">Pemberdayaan Masyarakat</option>
            <option value="Bencana">Penanggulangan Bencana, Darurat, dan Mendesak Desa</option>
            <option value="Pembinaan">Pembinaan Kemasyarakatan</option>
            <option value="Pembangunan">Pelaksanaan Pembangunan Desa</option>
            <option value="Pemerintahan">Penyelenggaraan Pemerintahan Desa</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="sub-cat_out_edit" class="form-label">Sub-bidang</label>
          <select class="form-select" id="sub-cat_out_edit" required>
            <option selected disabled>Pilih...</option>
            <option value="Pendidikan">Pendidikan</option>
            <option value="Pembangunan">Pembangunan</option>
            <option value="...">...</option>
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
          <input class="form-control" type="file" id="formFile_out_edit" required>
        </div>          
        <div class="mb-3">
          <label for="note_out_edit" class="form-label">Catatan</label>
          <textarea class="form-control" id="note_out_edit" rows="3"></textarea>
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
  const dateInput_out_edit = document.getElementById('date_out_edit');
  const todayCheck_out_edit = document.getElementById('todayCheck_out_edit');

  todayCheck_out_edit.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_out_edit.value = today;
    }
  });
</script>