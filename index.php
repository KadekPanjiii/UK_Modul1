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
                <div class="page-pretitle">Overview</div>
                <h2 class="page-title">Home</h2>
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
                  <h3 class="card-title">BALI | Cinematic video - <a href="https://youtu.be/zHcr32gRRCs?si=3NfflcBh6Rh7h0J4" target="_blank" class="text-blue">@JustKay</a></h3>
                    <div class="row align-items-center">              
                      <video style="min-width: 10%; min-height: 100%;" playsinline autoplay muted loop>
                        <source class="h-100" src="components/vid.mp4" type="video/mp4" />
                      </video>
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
