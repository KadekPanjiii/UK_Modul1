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
                                            <label class="form-label">Angka</label>
                                            <div class="d-flex">
                                                <input type="number" class="form-control me-3" id="angka"
                                                    placeholder="Masukkan Angka 1 - ∞">
                                                <button type="submit" id="addButton" class="btn btn-primary">Gacha</button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Hadiah</small></label>
                                            <div id="hasil">

                                            </div>
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
      function Hadiah() {
        var angka = parseFloat(document.getElementById("angka").value);
        var hadiah;

        if (angka >= 1 && angka <= 30) {
          hadiah = "Sticker";
        } else if (angka > 30 && angka <= 60) {
          hadiah = "Notebook";
        } else if (angka > 60 && angka <= 90) {
          hadiah = "Tumbler";
        } else if (angka > 120 && angka <= 150) {
          hadiah = "Tote Bag";
        } else if (angka <= 180) {
          hadiah = "Power Bank";
        } else {
          hadiah = "Tidak ada hadiah";
        }

        document.getElementById("hasil").innerHTML = "Selamat kamu mendapatkan hadiah: <span class='fw-bold''>" + hadiah + "</span>";
      }

      document.getElementById("addButton").addEventListener("click", Hadiah);

        // Menambahkan event keypress untuk tombol "Enter" pada dokumen
        document.getElementById("angka").addEventListener("keypress", function (event) {
            if (event.key === "Enter") {
                Hadiah();
            }
        });
    })
    </script>
</body>

</html>
