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
            <a href="/form" class="disable btn btn-secondary d-flex align-items-center px-3 py-2">
              <div>
                <i class="fa-solid fa-user border border-2 p-1 me-2 rounded"></i>
                <span class="link-disable"></i>Create New Link</span>
              </div>
              <i class="fa-solid fa-chevron-right"></i>
            </a>
            <a href="#" class="enable btn btn-primary d-flex align-items-center px-3 py-2">
              <div>
                <i class="fa-solid fa-cube border border-2 p-1 me-2 rounded"></i>
                <span class="link-enable"></i>Custom Link</span>
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
                  <li><a class="dropdown-item" href="#">Log Out</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <!-- Navbar End -->

        <!-- Main Konten Start -->
        <section class="container-fluid main-konten">

          <!-- Tautan Pintasan Start -->
          <div class="pintasan-tautan mb-4">
            <div class="judul-konten d-flex mb-5">
              <h4>Pintasan Tautan</h4>
              <div class="d-flex align-items-center">
                <div class="tambah-tautan">
                  <a href="{{ route('portal.form') }}" class="btn btn-primary me-4">Tambah Tautan</a>
                </div>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Kategori
                  </button>
                  <ul class="dropdown-menu">
                    @foreach ($kategori as $tag )
                      <li><a class="dropdown-item" href="{{ route('portal.custom.kategori', ['kategori' => $tag->id]) }}">{{ $tag->nama_kategori }}</a></li>
                    @endforeach
                    
                  </ul>
                </div>
              </div>
            </div>
            <div class="search d-flex justify-content-center mb-4">
              <form class="d-flex" action="{{ route('portal.custom.search') }}" role="search">
                <input class="form-control me-2 text-align-center" type="search" name="search" placeholder="Search your Custom Link here..." aria-label="Search">
                <button class="btn btn-primary fw-medium" type="submit">Search</button>
              </form>
            </div>
            <!-- List Card Start -->
            <div class="row list-card">
            <div class="col d-flex">
              @foreach ( $data as $items )
                
                <a href="{{ $items->Source_Link }}" class="card">
                <div class="card-body">
                    <div>
                      <h5 class="card-title">{{ $items->Nama_Link }}</h5>
                      <span class="status rounded">{{ $items->kategori->nama_kategori }}</span>
                    </div>
                    <hr>
                    <p>Informasi:</p>
                    <div class="link-informasi">
                      <p>{{ $items->Deskripsi}}</p>
                    </div>
                  </div>
                </a>
              @endforeach
              
              </div>
            </div>
            <!-- List Card End -->
          </div>
          <!-- Tautan Pintasan End -->

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