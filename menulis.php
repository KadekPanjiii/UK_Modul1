<html lang="en">

<!-- Navbar -->
<?php include("components/header.php") ?>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil teks dari formulir
        $teks = $_POST["teks"];

        // Mengambil nama file dari formulir (tanpa ekstensi .txt)
        $namaFile = $_POST["namaFile"] . ".txt";

        // Menentukan path untuk folder
        $folderPath = "simpanteks/";

        // Validasi nama file tidak boleh kosong
        if (empty($_POST["namaFile"])) {
            echo "
            <script>
                alert('Nama file tidak boleh kosong.');
                window.location.href = 'menulis.php';
            </script>";
            exit();
        }

        // Membuat folder jika belum ada
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        // Membuka file di dalam folder (jika tidak ada, akan dibuat)
        $filePath = $folderPath . $namaFile;

        // Memeriksa apakah file tersebut sudah ada
        if (file_exists($filePath)) {
            echo "
            <script>
                alert('File dengan nama tersebut sudah ada. Pilih nama file lain.');
                window.location.href = 'menulis.php';
            </script>";
            exit();
        }

        $file = @fopen($filePath, "w");

        if ($file) {
            // Menulis teks ke dalam file
            fwrite($file, $teks);

            // Menutup file
            fclose($file);

            echo "
            <script>
                alert('Teks berhasil ditulis ke dalam file $filePath');
                window.location.href = 'menulis.php';
            </script>";
        } else {
            echo "
            <script>
                alert('Gagal menulis ke dalam file. Pastikan file dapat ditulis.');
                window.location.href = 'menulis.php';
            </script>";
        }
    }
    ?>

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
                            <h2 class="page-title">Menulis File</h2>
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
                                                <label class="form-label">Teks</label>
                                                <textarea name="teks" class="form-control" cols="30" rows="10"
                                                    placeholder="Masukkan Teks"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama File</label>
                                                <input type="text" class="form-control" name="namaFile"
                                                    placeholder="Masukkan nama file (tanpa ekstensi .txt)" />
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include("components/footer.php") ?>

</body>

</html>
