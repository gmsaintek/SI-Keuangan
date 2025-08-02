<div class="modal fade" id="edit_form_pengeluaran_<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editPengeluaranLabel<?= $row['id'] ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="<?= base_url('transaksi_all/update/'.$row['id']) ?>">
        <?= csrf_field() ?>
        <div class="modal-header">
          <h5 class="modal-title" id="editPengeluaranLabel<?= $row['id'] ?>">Edit Pengeluaran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="jenis_transaksi" value="pengeluaran">
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
            <label>Kegiatan</label>
            <input type="text" class="form-control" name="kegiatan" value="<?= $row['kegiatan'] ?>" required>
          </div>
          <div class="mb-3">
            <label>Bidang</label>
            <input type="text" class="form-control" name="bidang" value="<?= $row['bidang'] ?>" required>
          </div>
          <div class="mb-3">
            <label>Sub-bidang</label>
            <input type="text" class="form-control" name="sub_bidang" value="<?= $row['sub_bidang'] ?>" required>
          </div>
          <div class="mb-3">
            <label>Jumlah Pengeluaran</label>
            <input type="number" class="form-control" name="jumlah_pengeluaran" value="<?= $row['jumlah_transaksi'] ?>" required>
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
