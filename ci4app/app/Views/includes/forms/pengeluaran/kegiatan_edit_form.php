<div class="modal fade" id="kegiatan_edit_form_<?= $row['id'] ?>" tabindex="-1" aria-labelledby="kegiatan_edit_formLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="<?= base_url('pengeluaran_kegiatan/update/'.$row['id']) ?>" class="modal-content">
      <?= csrf_field() ?>
      <div class="modal-header">
        <h5 class="modal-title">Edit Kegiatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control mb-2" name="kegiatan" value="<?= esc($row['kegiatan']) ?>" required>
        <input type="date" class="form-control mb-2" name="tanggal_mulai" value="<?= esc($row['tanggal_mulai']) ?>" required>
        <input type="date" class="form-control mb-2" name="tanggal_selesai" value="<?= esc($row['tanggal_selesai']) ?>" required>
        <input type="text" class="form-control mb-2" name="bidang" value="<?= esc($row['bidang']) ?>" required>
        <input type="number" class="form-control mb-2" name="anggaran" value="<?= esc($row['anggaran']) ?>" required>
        <input type="number" class="form-control mb-2" name="pengeluaran" value="<?= esc($row['pengeluaran']) ?>" required>
        <input type="number" class="form-control mb-2" name="kemajuan" value="<?= esc($row['kemajuan']) ?>" required>
        <textarea class="form-control" name="catatan" rows="3"><?= esc($row['catatan']) ?></textarea>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>
    </form>
  </div>
</div>
