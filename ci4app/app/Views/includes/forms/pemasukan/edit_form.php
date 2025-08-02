<!-- Modal Edit -->
<div class="modal fade" id="pemasukan_editform<?= $row['id'] ?>" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <form action="<?= base_url('pemasukan/update/' . $row['id']) ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title text-white">Edit Pemasukan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" value="<?= esc($row['tanggal']) ?>" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Sumber Dana</label>
            <input type="text" name="sumber_dana" value="<?= esc($row['sumber_dana']) ?>" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" value="<?= esc($row['jumlah']) ?>" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Catatan</label>
            <textarea name="catatan" class="form-control"><?= esc($row['catatan']) ?></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </div>
    </form>
  </div>
</div>
