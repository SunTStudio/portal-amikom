<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Link CSS Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/css/style.css" />

  <!-- Link Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <img src="/img/Logo_Amikom.png" alt="Logo Amikom" />
            <h4 class="m-0">Portal Amikom</h4>
          </div>
          <div class="navigasi d-flex ">
            <a href="/dashboard" class="disable btn btn-secondary d-flex align-items-center px-3 py-2">
              <div>
                <i class="fa-solid fa-key border border-2 p-1 me-2 rounded"></i>
                <span class="link-disable"></i>Portal Amikom Link</span>
              </div>
              <i class="fa-solid fa-chevron-right"></i>
            </a>
            <a href="#" class="enable btn btn-primary d-flex align-items-center px-3 py-2">
              <div>
                <i class="fa-solid fa-user border border-2 p-1 me-2 rounded"></i>
                <span class="link-enable"></i>Create New Link</span>
              </div>
              <i class="fa-solid fa-chevron-right"></i>
            </a>
            <a href="/custom" class="disable btn btn-secondary d-flex align-items-center px-3 py-2">
              <div>
                <i class="fa-solid fa-cube border border-2 p-1 me-2 rounded"></i>
                <span class="link-disable"></i>Custom Link</span>
              </div>
              <i class="fa-solid fa-chevron-right"></i>
            </a>
            <a href="/akademik" class="disable btn btn-secondary d-flex align-items-center px-3 py-2">
              <div>
                <i class="fa-solid fa-earth-asia border border-2 p-1 me-2 rounded"></i>
                <span class="link-disable"></i>Public Link</span>
              </div>
              <i class="fa-solid fa-chevron-right"></i>
            </a>
            <a href="/umum" class="disable btn btn-secondary d-flex align-items-center px-3 py-2">
              <div>
                <i class="fa-solid fa-share border border-2 p-1 me-2 rounded"></i>
                <sapn class="link-disable"></i>Sharing Link</span>
              </div>
              <i class="fa-solid fa-chevron-right"></i>
            </a>
          </div>
        </div>
        <!-- <div class="d-flex justify-content-center">
          <a href="" class="keluar btn btn-danger px-4">Keluar</a>
        </div> -->
      </div>
      <!-- Sidebar End -->

      <!-- Konten Start -->
      <section class="col-9 konten p-0">
        <!-- Navbar Start -->
        <nav class="navbar bg-body-tertiary px-4 py-3 bg-white">
          <div class="container-fluid">
            <a class="navbar-brand">Portal AMIKOM Link</a>
            <div class="profile d-flex">
              <img src="/img/profile.png" alt="profile">
              <div>
                <p class="name m-0">Erling Haland</p>
                <p class="email m-0">erlinghaland@students.amikom.ac.id</p>
              </div>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="{{ route('portal.logout') }}">Log Out</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <!-- Navbar End -->

        <!-- Main Konten Start -->
        <section class="container-fluid main-konten">
          <div class="row">
            <div class="link-form col-6 p-5">
              <h5 class="mb-5">BUAT CUSTOM LINK BARU</h5>
              <div class="form-main">
                <form action="{{ route('portal.create') }}" method="GET" class="d-flex flex-direction-coloumn">
                  <input type="hidden" name="id_pengguna" value="{{ session('nim') }}">
                  <div class="mb-3">
                    <label for="judul" id>Judul Link</label>
                    <input type="text" name="Nama_Link" class="form-control" placeholder="Judul Link">
                  </div>
                  <div class="mb-3">
                    <label for="link">Link Asli</label>
                    <input type="text" name="Source_Link" class="form-control" placeholder="Link Asli">
                  </div>
                  <div class="mb-5">
                    <label for="deskripsi">Deskripsi Link</label>
                    <textarea type="text" name="Deskripsi" class="form-control" placeholder="Deskripsi Link"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Buat Custom Link</button>
              </div>
            </div>
            <div class="kategori col-5 p-5">
              <h5 class="mb-5">PILIH KATEGORI</h5>
              <div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="id_kategori_link" value="2" id="akademik">
                  <label class="form-check-label" for="akademik">
                    Akademik
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="id_kategori_link" value="4" id="custom" >
                  <label class="form-check-label" for="custom">
                    Custom
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="id_kategori_link" value="3" id="umum">
                  <label class="form-check-label" for="umum">
                    Umum
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="id_kategori_link" value="1" id="jurnal">
                  <label class="form-check-label" for="jurnal">
                    Jurnal
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="id_kategori_link" value="5" id="pribadi">
                  <label class="form-check-label" for="pribadi">
                    Pribadi
                  </label>
                </form>

                </div>
              </div>
            </div>
          </div>

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