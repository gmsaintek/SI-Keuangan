<div class="modal fade" id="edit_form_pemasukan_<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editPemasukanLabel<?= $row['id'] ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="<?= base_url('transaksi_all/update/'.$row['id']) ?>">
        <?= csrf_field() ?>
        <div class="modal-header">
          <h5 class="modal-title" id="editPemasukanLabel<?= $row['id'] ?>">Edit Pemasukan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="jenis_transaksi" value="pemasukan">
          <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" class="form-control" name="tanggal" value="<?= $row['tanggal'] ?>" required>
          </div>
          <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" value="<?= $row['nama'] ?>" required>
          </div>
          <div class="mb-3">
            <label>Sumber</label>
            <input type="text" class="form-control" name="sumber" value="<?= $row['sumber'] ?>" required>
          </div>
          <div class="mb-3">
            <label>Jumlah Pemasukan</label>
            <input type="number" class="form-control" name="jumlah_pemasukan" value="<?= $row['jumlah_transaksi'] ?>" required>
          </div>
          <div class="mb-3">
            <label>Catatan</label>
            <textarea class="form-control" name="catatan"><?= $row['catatan'] ?></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Simpan</button>
          <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>
