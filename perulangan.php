<!DOCTYPE html>
<html lang="en">

<!-- Navbar -->
<?php include("components/header.php") ?>

<body>

<script src="assets/dist/js/demo-theme.min.js?1684106062"></script>
<div class="page">

    <!-- Navbar -->
    <?php include("components/navbar.php") ?>

    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <h2 class="page-title">Pengurutan Angka</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-xl-12">
                                    <div class="mb-3">
                                        <label class="form-label">Teks</label>
                                        <input type="text" class="form-control" id="teks" placeholder="Masukkan Teks Bebas">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Pengulangan</label>
                                        <div class="d-flex">
                                            <input type="number" class="form-control me-3" id="ulangi" placeholder="Masukkan Jumlah Pengulangan">
                                            <button type="submit" id="addButton" class="btn btn-primary">Ulangi</button>
                                        </div>
                                    </div>
                                    <div id="outputContainer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include("components/footer.php") ?>

    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        function HasilkanOutput() {
            const teks = document.getElementById("teks").value;
            const ulangi = document.getElementById("ulangi").value;
            const outputContainer = document.getElementById("outputContainer");

                // Validasi input tidak boleh kosong
                if (ulangi.trim() === "") {
                alert("Jumlah pengulangan tidak boleh kosong");
                return;
            }

            // Menghapus output sebelumnya jika ada
            outputContainer.innerHTML = "";

            // Membuat pesan sesuai dengan input dari pengguna
            for (let i = 0; i < ulangi; i++) {
                outputContainer.innerHTML +=
                    "<p class='d-inline-block me-3'>" + teks + " diulang sebanyak - " + (i + 1) + "</p>";
            }
        }

        document.getElementById("addButton").addEventListener("click", HasilkanOutput);

        // Menambahkan event keypress untuk tombol "Enter" pada dokumen
        document.getElementById("ulangi").addEventListener("keypress", function (event) {
            if (event.key === "Enter") {
                HasilkanOutput();
            }
        });
    })
</script>
</body>

</html>
