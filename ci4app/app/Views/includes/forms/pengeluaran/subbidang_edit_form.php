<div class="modal fade" id="subbidang_edit_form_<?= esc($row['id']) ?>" tabindex="-1" aria-labelledby="editLabel<?= esc($row['id']) ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?= base_url('pengeluaran_subbidang/update/'.esc($row['id'])) ?>" method="post">
        <?= csrf_field() ?>
        <div class="modal-header">
          <h5 class="modal-title" id="editLabel<?= esc($row['id']) ?>">Edit Sub-bidang</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label>Nama Bidang</label>
            <input type="text" name="nama_bidang" value="<?= esc($row['nama_bidang']) ?>" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Pengeluaran Sekarang</label>
            <input type="number" name="pengeluaran_sekarang" value="<?= esc($row['pengeluaran_sekarang']) ?>" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Catatan</label>
            <input type="text" name="catatan" value="<?= esc($row['catatan']) ?>" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
