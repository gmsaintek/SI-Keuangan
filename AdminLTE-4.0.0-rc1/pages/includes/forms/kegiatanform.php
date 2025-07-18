<div class="modal fade" id="kegiatanform" tabindex="-1" aria-labelledby="kegiatanformLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kegiatanformLabel">Input Kegiatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" aria-label="Nama Kategori">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="date" />
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="todayCheck" />
                        <label class="form-check-label" for="todayCheck">Hari ini</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="date" />
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