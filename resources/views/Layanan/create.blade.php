<!DOCTYPE html>
<html lang="id">
<head>
    @include('Layanan.index')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .btn-action {
            border-radius: 50%;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            padding: 0;
        }
        .input-group .btn-action {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="modal fade" id="editKuesionerModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Edit Laporan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="namaAplikasi" class="form-label">Nama Aplikasi</label>
                            <input type="text" class="form-control" id="namaAplikasi" name="namaAplikasi" placeholder="Masukkan nama aplikasi..." required>
                        </div>


                        <div class="mb-3">
                            <label for="rolePengguna" class="form-label">Layanan Laporan </label>
                            <select class="form-select" id="rolePengguna" name="rolePengguna" required>
                                <option value="">Pilih Role...</option>
                                <option value="Admin">Tim</option>
                                <option value="Editor">Personal</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="bulanLayanan" class="form-label">Bulan Layanan</label>
                            <select class="form-select" id="bulanLayanan" name="bulanLayanan" required>
                                <option value="">Pilih Bulan...</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Apakah selama bulan ini memanfaatkan layanan?</label>
                            <fieldset disabled>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="penggunaanLayanan" id="ya" value="Ya">
                                    <label class="form-check-label" for="ya">Ya</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="penggunaanLayanan" id="tidak" value="Tidak">
                                    <label class="form-check-label" for="tidak">Tidak</label>
                                </div>
                            </fieldset>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Aplikasi apa saja yang digunakan?</label>
                            <div id="aplikasiContainer">
                                <div class="input-group mb-2">
                                    <button type="button" class="btn btn-danger btn-action" onclick="removeField(this)">&minus;</button>
                                    <input type="text" class="form-control" name="aplikasi[]" placeholder="Nama Aplikasi">
                                </div>
                            </div>
                            <button type="button" class="btn btn-success btn-action" onclick="addField('aplikasiContainer')">+</button>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Produk apa saja yang dihasilkan?</label>
                            <div id="produkContainer">
                                <div class="input-group mb-2">
                                    <button type="button" class="btn btn-danger btn-action" onclick="removeField(this)">&minus;</button>
                                    <input type="text" class="form-control" name="produk[]" placeholder="Nama Produk">
                                </div>
                            </div>
                            <button type="button" class="btn btn-success btn-action" onclick="addField('produkContainer')">+</button>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function addField(containerId) {
            var container = document.getElementById(containerId);
            var div = document.createElement("div");
            div.className = "input-group mb-2";
            div.innerHTML = `<button type="button" class="btn btn-danger btn-action" onclick="removeField(this)">&minus;</button>
                             <input type="text" class="form-control" name="${containerId.includes('aplikasi') ? 'aplikasi[]' : 'produk[]'}" placeholder="Nama ${containerId.includes('aplikasi') ? 'Aplikasi' : 'Produk'}">`;
            container.appendChild(div);
        }

        function removeField(button) {
            button.parentElement.remove();
        }

        document.addEventListener("DOMContentLoaded", function () {
            var myModal = new bootstrap.Modal(document.getElementById('editKuesionerModal'));
            myModal.show();
        });
    </script>
</body>
</html>
