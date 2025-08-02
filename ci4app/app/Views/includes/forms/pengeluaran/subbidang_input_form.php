<div class="modal fade" id="subbidang_input_form" tabindex="-1" aria-labelledby="inputSubbidangLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?= base_url('pengeluaran_subbidang/store') ?>" method="post">
        <?= csrf_field() ?>
        <div class="modal-header">
          <h5 class="modal-title" id="inputSubbidangLabel">Tambah Sub-bidang</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="nama_bidang" class="form-label">Nama Bidang</label>
            <input type="text" class="form-control" id="nama_bidang" name="nama_bidang" required>
          </div>
          <div class="mb-3">
            <label for="pengeluaran_sekarang" class="form-label">Pengeluaran Sekarang (Rp)</label>
            <input type="number" class="form-control" id="pengeluaran_sekarang" name="pengeluaran_sekarang" min="0" required>
          </div>
          <div class="mb-3">
            <label for="catatan" class="form-label">Catatan</label>
            <input type="text" class="form-control" id="catatan" name="catatan">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
