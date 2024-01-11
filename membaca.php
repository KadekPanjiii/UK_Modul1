<html lang="en">

<!-- Navbar -->
<?php include("components/header.php") ?>

<body>

    <?php
    // Menentukan path untuk folder
    $folderPath = "simpanteks/";

    // Membaca isi direktori
    $files = scandir($folderPath);

    // Menghapus . dan ..
    $files = array_diff($files, array('.', '..'));

    $fileContent = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nama file dari formulir (tanpa ekstensi .txt)
        $namaFile = $_POST["namaFile"] . ".txt";

        // Menentukan path untuk folder
        $folderPath = "simpanteks/";

        // Membaca isi file jika ada
        $filePath = $folderPath . $namaFile;

        // Mengecek apakah file ada
        if (file_exists($filePath)) {
            // Membaca isi file
            $fileContent = file_get_contents($filePath);

            // Mengecek apakah isi file kosong
            if (empty($fileContent)) {
                $fileContent = "File kosong.";
            }
        } else {
            $fileContent = "File tidak ditemukan.";
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
                                                <label class="form-label">Nama File</label>
                                                <input type="text" class="form-control" name="namaFile"
                                                    placeholder="Masukkan nama file (tanpa ekstensi .txt)" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Isi File</label>
                                                <textarea class="form-control" cols="30" rows="10"
                                                    disabled><?php echo htmlspecialchars($fileContent); ?></textarea>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                        <div class="card">
                            
                            <div class="card-body">
                                <h3 class="card-title">File .txt</h3>
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-xl-12">
                                        <?php if (empty($files)): ?>
                                        <pre>Tidak ada file.</pre>
                                        <?php else: ?>
                                            <ol>
                                                <?php foreach ($files as $file): ?>
                                                    <li>
                    <div class="d-flex justify-content-between align-items-center">
                        <span><?php echo htmlspecialchars($file); ?></span>
                        <a href="<?php echo $folderPath . $file; ?>" download>Download</a>
                    </div>
                </li>
                                                
                                                <?php endforeach; ?>
                                            </ol>
                                        <?php endif; ?>
                                        <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <?php include("components/footer.php") ?>

</body>

</html>
