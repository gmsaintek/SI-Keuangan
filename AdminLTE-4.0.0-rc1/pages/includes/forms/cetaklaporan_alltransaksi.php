<div class="modal fade" id="cetaklaporan_allForm" tabindex="-1" aria-labelledby="cetaklaporan_allFormLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="cetaklaporan_allFormLabel">Cetak Laporan Semua Transaksi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="source" class="form-label">Format Laporan</label>
                    <select class="form-select" id="source" required>
                        <option selected>Pilih Format</option>
                        <option value="1">PDF</option>
                        <option value="2">XLSX</option>
                        <option value="3">CSV</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="period" class="form-label">Periode</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dari</span>
                        <input type="date" class="form-control" id="startDate" required>
                        <span class="input-group-text">Sampai</span>
                        <input type="date" class="form-control" id="endDate" required>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="todayCheck" />
                        <label class="form-check-label" for="todayCheck">Sampai hari ini</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputprintType" class="form-label">Jenis Transaksi</label>
                    <select class="form-select" id="inputprintType" required>
                        <option selected disabled>Pilih...</option>
                        <option value="all">Semua Transaksi</option>
                        <option value="pemasukan">Pemasukan</option>
                        <option value="pengeluaran">Pengeluaran</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="source" class="form-label">Sumber Dana</label>
                    <select class="form-select" id="source" required>
                        <option selected>Pilih Sumber Dana</option>
                        <option value="1">Semua</option>
                        <option value="2">PBH</option>
                        <option value="3">Sumbangan</option>
                        <option value="4">BUMDes</option>
                    </select>
                </div>

                <div id="pemasukanprintForm" class="d-none">

                </div>

                <div id="pengeluaranprintForm" class="d-none">
                    <div class="mb-3">
                        <label for="source" class="form-label">Kegiatan</label>
                        <select class="form-select" id="source">
                            <option selected>Pilih Kegiatan</option>
                            <option value="1">PBH</option>
                            <option value="2">Sumbangan</option>
                            <option value="3">BUMDes</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="source" class="form-label">Kategori Pengeluaran</label>
                        <select class="form-select" id="cat">
                            <option selected>Pilih Kategori pengeluaran</option>
                            <option value="1">Pajak</option>
                            <option value="2">Sosial</option>
                            <option value="3">Usaha</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
  const inputType = document.getElementById('inputprintType');
  const pemasukanForm = document.getElementById('pemasukanprintForm');
  const pengeluaranForm = document.getElementById('pengeluaranprintForm');

  inputType.addEventListener('change', function () {
    const type = this.value;
    pemasukanForm.classList.add('d-none');
    pengeluaranForm.classList.add('d-none');

    if (type === 'pemasukan') {
      pemasukanForm.classList.remove('d-none');
    } else if (type === 'pengeluaran') {
      pengeluaranForm.classList.remove('d-none');
    }
  });
</script>

<script>
  const dateInput = document.getElementById('date');
  const todayCheck = document.getElementById('todayCheck');

  todayCheck.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput.value = today;
    }
  });
</script>