<div class="modal fade" id="pengeluaran_kategoriform" tabindex="-1" aria-labelledby="pengeluaran_kategoriformLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pengeluaran_kategoriformLabel">Input Pengeluaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="basic-url" class="form-label">Nama Kategori</label>
          <input type="text" class="form-control" aria-label="Nama Kategori">
        </div>
        <label for="basic-url" class="form-label">Anggaran</label>
        <div class="input-group mb-3">
          <span class="input-group-text">Rp</span>
          <input type="number" class="form-control" aria-label="Anggaran" required>
          <span class="input-group-text">.00</span>
        </div>
        <div class="mb-3">
            <label for="note" class="form-label">Catatan</label>
            <textarea class="form-control" id="note" rows="3"></textarea>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>