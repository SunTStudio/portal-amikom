<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Link CSS Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />

    <!-- Link Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <title>Portal Amikom</title>
  </head>
  <body>
    <!-- Container start -->
    <section class="container-fluid">
      <div class="row">
        <!-- Sidebar Start -->
        <div class="col-3 sidebar d-flex py-4 px-5">
            <div class="main d-flex">
              <div class="logo d-flex">
                <img src="Logo_Amikom.png" alt="Logo Amikom" />
                <h4 class="m-0">Portal Amikom</h4>
              </div>
              <div class="navigasi d-flex ">
                <a href="#" class="enable btn btn-primary d-flex align-items-center px-3 py-2">
                  <div>
                    <i class="fa-solid fa-key border border-2 p-1 me-2 rounded"></i>
                    <span class="link-enable"></i>Portal Amikom Link</span>
                  </div>
                  <i class="fa-solid fa-chevron-right"></i>
                </a>
                <a href="form-link.html" class="disable btn btn-secondary d-flex align-items-center px-3 py-2">
                  <div>
                    <i class="fa-solid fa-user border border-2 p-1 me-2 rounded"></i>
                    <span class="link-disable"></i>Create New Link</span>
                  </div>
                  <i class="fa-solid fa-chevron-right"></i>
                </a>
                <a href="custom-link.html" class="disable btn btn-secondary d-flex align-items-center px-3 py-2">
                  <div>
                    <i class="fa-solid fa-cube border border-2 p-1 me-2 rounded"></i>
                    <span class="link-disable"></i>Custom Link</span>
                  </div>
                  <i class="fa-solid fa-chevron-right"></i>
                </a>
                <a href="" class="disable btn btn-secondary d-flex align-items-center px-3 py-2">
                  <div>
                    <i class="fa-solid fa-earth-asia border border-2 p-1 me-2 rounded"></i>
                    <span class="link-disable"></i>Public Link</span>
                  </div>
                  <i class="fa-solid fa-chevron-right"></i>
                </a>
                <a href="" class="disable btn btn-secondary d-flex align-items-center px-3 py-2">
                  <div>
                    <i class="fa-solid fa-share border border-2 p-1 me-2 rounded"></i>
                    <sapn class="link-disable"></i>Sharing Link</span>
                  </div>
                  <i class="fa-solid fa-chevron-right"></i>
                </a>
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <a href="" class="keluar btn btn-danger px-4">Keluar</a>
            </div>
          </div>
          <!-- Sidebar End -->

        <!-- Konten Start -->
        <section class="col-9 konten p-0">
            <!-- Navbar Start -->
            <nav class="navbar bg-body-tertiary px-4 py-3 bg-white">
              <div class="container-fluid">
                <a class="navbar-brand">Portal AMIKOM Link</a>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search your Custom Link here..." aria-label="Search">
                  <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                </form>
                <div class="profile d-flex">
                  <img src="profile.png" alt="profile">
                  <div>
                    <p class="name m-0">Erling Haland</p>
                    <p class="email m-0">erlinghaland@students.amikom.ac.id</p>
                  </div>
                </div>
              </div>
            </nav>
            <!-- Navbar End -->
  
            <!-- Main Konten Start -->
            <section class="container-fluid main-konten">
              <!-- Tautan Amikom Start -->
              <div class="tautan-amikom mb-4">
                <div class="judul-konten d-flex mb-4">
                  <h4>Tautan AMIKOM</h4>
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Kategori
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <!-- List Card Start -->
                <div class="row list-card">
                  <div class="col d-flex">
                    <div class="card">
                      <div class="card-body">
                        <div>
                          <h5 class="card-title">D3-Manajemen Informatika</h5>
                          <span class="status rounded">Akademik</span>
                        </div>
                        <hr>
                        <p>Informasi:</p>
                        <div class="link-informasi">
                          <ul>
                            <li>
                              <a href="https://mi.amikom.ac.id">Menu Utama</a>
                            </li>
                            <li>
                              <a href="https://mi.amikom.ac.id/page/kurikulum">Kurikulum</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div>
                          <h5 class="card-title">Ungu.in</h5>
                          <span class="status rounded">Akademik</span>
                        </div>
                        <hr>
                        <p>Informasi:</p>
                        <div class="link-informasi">
                          <ul>
                            <li>
                              <a href="https://app.ungu.in/">Menu Utama</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div>
                          <h5 class="card-title">D3-Manajemen Informatika</h5>
                          <span class="status rounded">Akademik</span>
                        </div>
                        <hr>
                        <p>Informasi:</p>
                        <div class="link-informasi">
                          <ul>
                            <li>
                              <a href="https://daak.amikom.ac.id/">Menu Utama</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- List Card End -->
              </div>
              <!-- Tautan Amikom End -->
  
              <!-- Tautan Pintasan Start -->
              <div class="pintasan-tautan mb-4">
                <div class="judul-konten d-flex mb-4">
                  <h4>Pintasan Tautan</h4>
                  <div class="d-flex align-items-center">
                    <div class="tambah-tautan">
                      <button class="btn btn-primary me-4">Tambah Tautan</button>
                    </div>
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- List Card Start -->
                <div class="row list-card">
                  <div class="col d-flex">
                    <div class="card">
                      <div class="card-body">
                        <div>
                          <h5 class="card-title">Chat GPT</h5>
                          <span class="status rounded">Custom</span>
                        </div>
                        <hr>
                        <p>Informasi:</p>
                        <div class="link-informasi">
                          <ul>
                            <li>
                              <a href="https://chatgpt.com/">Menu Utama</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div>
                          <h5 class="card-title">Ungu.in</h5>
                          <span class="status rounded">Custom</span>
                        </div>
                        <hr>
                        <p>Informasi:</p>
                        <div class="link-informasi">
                          <ul>
                            <li>
                              <a href="https://app.ungu.in/">Menu Utama</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div>
                          <h5 class="card-title">D3-Manajemen Informatika</h5>
                          <span class="status rounded">Custom</span>
                        </div>
                        <hr>
                        <p>Informasi:</p>
                        <div class="link-informasi">
                          <ul>
                            <li>
                              <a href="https://daak.amikom.ac.id/">Menu Utama</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- List Card End -->
              </div>
              <!-- Tautan Pintasan End -->
  
              <!-- Tautan Umum Start -->
              <div class="tautan-umum mb-4">
                <div class="judul-konten d-flex mb-4">
                  <h4>Tautan Umum</h4>
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                  </div>
                </div>
                <!-- List Card Start -->
                <div class="row list-card">
                  <div class="col d-flex">
                    <div class="card">
                      <div class="card-body">
                        <div>
                          <h5 class="card-title">Chat GPT</h5>
                          <span class="status rounded">Umum</span>
                        </div>
                        <hr>
                        <p>Informasi:</p>
                        <div class="link-informasi">
                          <ul>
                            <li>
                              <a href="https://chatgpt.com/">Menu Utama</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div>
                          <h5 class="card-title">Ungu.in</h5>
                          <span class="status rounded">Umum</span>
                        </div>
                        <hr>
                        <p>Informasi:</p>
                        <div class="link-informasi">
                          <ul>
                            <li>
                              <a href="https://app.ungu.in/">Menu Utama</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div>
                          <h5 class="card-title">D3-Manajemen Informatika</h5>
                          <span class="status rounded">Umum</span>
                        </div>
                        <hr>
                        <p>Informasi:</p>
                        <div class="link-informasi">
                          <ul>
                            <li>
                              <a href="https://daak.amikom.ac.id/">Menu Utama</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- List Card End -->
              </div>
              <!-- Tautan Umum End -->
            </section>
            <!-- Main Konten End -->
          </section>
          <!-- Konten End -->
      </div>
    </section>
    <!-- Container end -->
    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
