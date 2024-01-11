<?php
    $url = $_SERVER['REQUEST_URI'];

?>
      <!-- Navbar -->
      <header class="navbar navbar-expand-md d-print-none">
        <div class="container-xl">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar-menu"
            aria-controls="navbar-menu"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1
            class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3"
          >
            <a href=".">
              <img
                src="assets/static/K.svg"
                width="110"
                height="32"
                alt="Tabler"
                class="navbar-brand-image"
              />
            </a>
          </h1>
          <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item d-none d-md-flex me-3">
              <div class="btn-list">
                <a
                  href="https://github.com/KadekPanjiii/UK_Modul1.git"
                  class="btn"
                  target="_blank"
                  rel="noreferrer"
                >
                  <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                      d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"
                    />
                  </svg>
                  Source code
                </a>
              </div>
            </div>
            <div class="d-none d-md-flex me-3">
              <a
                href="?theme=dark"
                class="nav-link px-0 hide-theme-dark"
                title="Enable dark mode"
                data-bs-toggle="tooltip"
                data-bs-placement="bottom"
              >
                <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="2"
                  stroke="currentColor"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path
                    d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"
                  />
                </svg>
              </a>
              <a
                href="?theme=light"
                class="nav-link px-0 hide-theme-light"
                title="Enable light mode"
                data-bs-toggle="tooltip"
                data-bs-placement="bottom"
              >
                <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="2"
                  stroke="currentColor"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                  <path
                    d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"
                  />
                </svg>
              </a>
            </div>
            <div class="nav-item dropdown">
              <a
                href="https://kapan.vercel.app/"
                target="_blank"
                class="nav-link d-flex lh-1 text-reset p-0"
              >
                <span
                  class="avatar avatar-sm"
                  style="background-image: url(assets/static/avatars/000f.jpeg)"
                ></span>
                <div class="d-none d-xl-block ps-2">
                  <div>Kadek Panji</div>
                  <div class="mt-1 small text-muted">Rekayasa Perangkat Lunak</div>
                </div>
              </a>  
            </div>
          </div>
        </div>
      </header>

      <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar">
            <div class="container-xl">
              <ul class="navbar-nav">
                <li class="nav-item <?= strpos($url, 'index.php') ? 'active' : '' ?>">
                  <a class="nav-link" href="index.php">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"
                      ><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                      </svg>
                    </span>
                    <span class="nav-link-title"> Home </span>
                  </a>
                </li>
                <li class="nav-item <?= strpos($url, 'menulis.php') ? 'active' : '' ?>">
                  <a class="nav-link" href="menulis.php">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"
                      ><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-type-txt" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M16.5 15h3" /><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" /><path d="M4.5 15h3" /><path d="M6 15v6" /><path d="M18 15v6" /><path d="M10 15l4 6" /><path d="M10 21l4 -6" /></svg>
                    </span>
                    <span class="nav-link-title"> Menulis File </span>
                  </a>
                </li>
                <li class="nav-item <?= strpos($url, 'membaca.php') ? 'active' : '' ?>">
                  <a class="nav-link" href="membaca.php">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"
                      ><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-file-text"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        >
                        <path stroke="none"
                        d="M0 0h24v24H0z" fill="none"/>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                        <path d="M9 9l1 0" />
                        <path d="M9 13l6 0" />
                        <path d="M9 17l6 0" />
                    </svg>
                    </span>
                    <span class="nav-link-title"> Membaca File </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>