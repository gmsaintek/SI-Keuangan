<div class="modal fade" id="cetaklaporanall" tabindex="-1" aria-labelledby="cetaklaporanallLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cetaklaporanallLabel">Cetak Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="source" class="form-label">Periode</label>
                    <div class="row g-3 align-items-center justify-content-center">
                        <div class="col-8">
                            <label for="monthSelect" class="form-label visually-hidden">Bulan</label>
                            <select class="form-select" id="monthSelect" aria-label="Select month"></select>
                        </div>
                        <div class="col-4">
                            <label for="yearSelect" class="form-label visually-hidden">Tahun</label>
                            <select class="form-select" id="yearSelect" aria-label="Select year"></select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="savePeriodBtn">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const monthSelect = document.getElementById('monthSelect');
        const yearSelect = document.getElementById('yearSelect');
        const savePeriodBtn = document.getElementById('savePeriodBtn');

        const months = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
        const currentMonthIndex = new Date().getMonth();
        months.forEach((month, index) => {
            const option = document.createElement('option');
            option.value = index + 1; // 1-12
            option.textContent = month;
            if (index === currentMonthIndex) {
                option.selected = true;
            }
            monthSelect.appendChild(option);
        });

        const currentYear = new Date().getFullYear();
        const startYear = currentYear - 10;
        const endYear = currentYear + 1;
        for (let year = startYear; year <= endYear; year++) {
            const option = document.createElement('option');
            option.value = year;
            option.textContent = year;
            if (year === currentYear) {
                option.selected = true;
            }
            yearSelect.appendChild(option);
        }            
    });
</script>