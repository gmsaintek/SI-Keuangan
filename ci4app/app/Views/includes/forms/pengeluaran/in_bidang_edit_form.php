<!-- Modal Edit Pengeluaran Bidang -->
<div class="modal fade" id="pengeluaran_edit_form_<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editBidangModalLabel_<?= $row['id'] ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?= isset($actionUrlUpdate) ? $actionUrlUpdate : '' ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="modal-header">
          <h5 class="modal-title" id="editBidangModalLabel_<?= $row['id'] ?>">Edit Pengeluaran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="tanggal_edit_<?= $row['id'] ?>" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal_edit_<?= $row['id'] ?>" name="tanggal" value="<?= esc($row['tanggal']) ?>" required>
          </div>
          <div class="mb-3">
            <label for="nama_edit_<?= $row['id'] ?>" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_edit_<?= $row['id'] ?>" name="nama" value="<?= esc($row['nama']) ?>" required>
          </div>
          <div class="mb-3">
            <label for="sumber_edit_<?= $row['id'] ?>" class="form-label">Sumber</label>
            <input type="text" class="form-control" id="sumber_edit_<?= $row['id'] ?>" name="sumber" value="<?= esc($row['sumber']) ?>" required>
          </div>
          <div class="mb-3">
            <label for="kegiatan_edit_<?= $row['id'] ?>" class="form-label">Kegiatan</label>
            <input type="text" class="form-control" id="kegiatan_edit_<?= $row['id'] ?>" name="kegiatan" value="<?= esc($row['kegiatan']) ?>" required>
          </div>
          <div class="mb-3">
            <label for="subbidang_edit_<?= $row['id'] ?>" class="form-label">Sub-bidang</label>
            <input type="text" class="form-control" id="subbidang_edit_<?= $row['id'] ?>" name="subbidang" value="<?= esc($row['subbidang']) ?>" required>
          </div>
          <div class="mb-3">
            <label for="jumlah_pengeluaran_edit_<?= $row['id'] ?>" class="form-label">Jumlah Pengeluaran (Rp)</label>
            <input type="number" class="form-control" id="jumlah_pengeluaran_edit_<?= $row['id'] ?>" name="jumlah_pengeluaran" value="<?= esc($row['jumlah_pengeluaran']) ?>" required>
          </div>
          <div class="mb-3">
            <label for="nota_edit_<?= $row['id'] ?>" class="form-label">Nota (Upload baru jika ingin mengganti)</label>
            <input type="file" class="form-control" id="nota_edit_<?= $row['id'] ?>" name="nota" accept="image/*,application/pdf">
            <?php if (!empty($row['nota'])): ?>
              <small class="form-text text-muted">File lama: <a href="<?= base_url('uploads/nota/'.$row['nota']) ?>" target="_blank"><?= esc($row['nota']) ?></a></small>
            <?php endif; ?>
          </div>
          <div class="mb-3">
            <label for="catatan_edit_<?= $row['id'] ?>" class="form-label">Catatan</label>
            <input type="text" class="form-control" id="catatan_edit_<?= $row['id'] ?>" name="catatan" value="<?= esc($row['catatan']) ?>">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </form>
    </div>
  </div>
</div>
