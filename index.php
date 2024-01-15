<!DOCTYPE html>
<html lang="en">

<!-- Header -->
<?php include("components/header.php")?>

<body class="d-flex flex-column bg-white">
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>

    <div class="row g-0 flex-fill">
        <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
            <div class="container container-tight my-5 px-lg-5">
                <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark"><img src="assets/static/K.svg" height="36" alt=""></a>
                </div>
                <h2 class="h3 text-center mb-3">
                    Login to your account
                </h2>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="Your Username" id="username" autocomplete="off">
                </div>
                <div class="mb-2">
                    <label class="form-label">
                        Password
                        <span class="form-label-description">
                            <a href="./forgot-password.html">I forgot password</a>
                        </span>
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" class="form-control" placeholder="Your password" id="password" autocomplete="off">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="Show password" id="togglePassword" onclick="myFunction()">
                                <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-off" width="24" height="24" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                                    <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                                    <path d="M3 3l18 18" />
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100" id="login">Log in</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
            <!-- Photo -->
            <div class="bg-cover h-100 min-vh-100"
                style="background-image: url(components/finances-us-dollars-and-bitcoins-currency-money-2.jpg)"></div>
        </div>
    </div>

    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="assets/dist/js/tabler.min.js?1684106062" defer></script>
    <script src="assets/dist/js/demo.min.js?1684106062" defer></script>

    <script>
        function myFunction() {
            const x = document.getElementById("password");
            const toggleLink = document.getElementById("togglePassword");

            if (x.type === "password") {
                x.type = "text";
                toggleLink.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>';
            } else {
                x.type = "password";
                toggleLink.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" /><path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" /><path d="M3 3l18 18" /></svg>';
            }
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var upayaLogin = 0;

            function Login() {
                const username = document.getElementById("username").value;
                const password = document.getElementById("password").value;

                // Validasi input tidak boleh kosong
                if (password.trim() === "") {
                    alert("Password tidak boleh kosong");
                    return;
                }

                if (username === "a" && password === "a") {
                    alert("Login berhasil!");
                    window.location.href = "home.php";
                } else {
                    upayaLogin++;
                    // Maksimal login hanya 3x
                    if (upayaLogin >= 3) {
                        alert("Username atau password salah. Program ditutup.");
                        window.location.href = "error.php";
                    } else {
                        alert("Username atau password salah. Percobaan ke-" + upayaLogin);
                    }
                }
            }

            document.getElementById("login").addEventListener("click", Login);

            // Menambahkan event keypress untuk tombol "Enter"
            document.getElementById("password").addEventListener("keypress", function (event) {
                if (event.key === "Enter") {
                    Login();
                }
            });
        })
    </script>

</body>

</html>
