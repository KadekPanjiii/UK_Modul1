<!DOCTYPE html>
<html lang="en">

<!-- Navbar -->
<?php include("components/header.php"); ?>

<body>

    <?php
    $isi = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputAngka = $_POST["angka"];

        // Validasi input untuk memastikan tidak boleh kosong
        if (!empty(trim($inputAngka))) {
            // Validasi input untuk memastikan hanya angka yang dimasukkan
            if (ctype_digit(str_replace([' ', ','], '', $inputAngka))) {
                // Ganti spasi dengan koma sebagai pemisah
                $inputAngka = str_replace(' ', ',', $inputAngka);

                // Pisahkan angka dengan koma menjadi array
                $angkaDescending = explode(",", $inputAngka);

                // Descending
                rsort($angkaDescending);

                $isiDescending = implode(" - ", $angkaDescending);

                // Salinan array sebelum diurutkan untuk urutan ascending
                $angkaAscending = explode(",", $inputAngka);

                // Ascending
                sort($angkaAscending);

                $isiAscending = implode(" - ", $angkaAscending);
            } else {
                // Tampilkan pesan kesalahan jika input berupa string
                echo "<script>alert('Masukkan angka yang benar');</script>";
            }
        } else {
            // Tampilkan pesan kesalahan jika input kosong
            echo "<script>alert('Input tidak boleh kosong');</script>";
        }
    }
    ?>

    <script src="assets/dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">

        <!-- Navbar -->
        <?php include("components/navbar.php"); ?>

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
                                        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                            <div class="mb-3">
                                                <label class="form-label">Angka</label>
                                                <div class="d-flex">
                                                    <input type="text" class="form-control me-3" name="angka"
                                                        placeholder="Masukkan Angka Acak (pisahkan dengan spasi)">
                                                    <button type="submit" id="addButton" class="btn btn-primary">Urutkan</button>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Angka Sebelum Diurutkan</label>
                                                <?php
                                                // Ganti koma dengan dash pada angka sebelum diurutkan
                                                $formattedInputAngka = str_replace(',', ' - ', $inputAngka);
                                                echo "<input type='text' class='form-control' value='$formattedInputAngka' disabled>";
                                                ?>
                                            </div>

                                            <!-- Hasil jika sudah diurutkan secara descending dan ascending -->
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Urutan Angka <small>(dari besar ke kecil)</small></label>
                                                        <?php
                                                        if (!empty($isiDescending)) {
                                                            echo "<input type='text' value='$isiDescending' class='form-control' readonly></input>";
                                                        } else {
                                                            echo "<input type='text' class='form-control' value='Tidak ada angka yang diurutkan' readonly></input>";
                                                        }
                                                        ?>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Urutan Angka <small>(dari kecil ke besar)</small></label>
                                                        <?php
                                                        if (!empty($isiAscending)) {
                                                            echo "<input type='text' value='$isiAscending' class='form-control' readonly></input>";
                                                        } else {
                                                            echo "<input type='text' class='form-control' value='Tidak ada angka yang diurutkan' readonly></input>";
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include("components/footer.php"); ?>

        </div>
    </div>
</body>

</html>
