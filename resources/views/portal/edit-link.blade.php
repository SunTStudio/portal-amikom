@extends('template/layout')
@section('judul')
Portal Amikom
@endsection
<!-- Container start -->
<!-- Sidebar Start -->
@section('navigasi')
<div class="navigasi d-flex ">
    <a href="#" class="enable btn btn-primary d-flex align-items-center px-3 py-2">
        <div>
            <i class="fa-solid fa-key border border-2 p-1 me-2 rounded"></i>
            <span class="link-enable"></i>Portal Amikom Link</span>
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
@endsection

<!-- Sidebar End -->

<!-- Konten Start -->
@section('konten')

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

<!-- Main Konten Start -->
<!-- Tautan Pintasan Start -->
@section('main-konten')

    <section class="container-fluid main-konten" style="padding: 1rem 1rem;">
          <div class="row">
            <div class="link-form col-6 p-5 m-2">
              <h5 class="mb-5">BUAT CUSTOM LINK BARU</h5>
              <div class="form-main">
                <form action="{{ route('portal.custom.update', ['id' => $data->id]) }}" method="GET" class="d-flex flex-direction-coloumn">
                  <input type="hidden" name="id_pengguna" value="{{ session('nim') }}">
                  <div class="mb-3">
                    <label for="judul" id>Judul Link</label>
                    <input type="text" name="Nama_Link" value="{{ $data->Nama_Link }}" class="form-control" placeholder="Judul Link">
                  </div>
                  <div class="mb-3">
                    <label for="link">Link Asli</label>
                    <input type="text" name="Source_Link" value="{{ $data->Source_Link }}" class="form-control" placeholder="Link Asli">
                  </div>
                  <div class="mb-5">
                    <label for="deskripsi">Deskripsi Link</label>
                    <textarea type="text" name="Deskripsi"  class="form-control" placeholder="Deskripsi Link">{{ $data->Deskripsi }}</textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Buat Custom Link</button>
              </div>
            </div>
            <div class="kategori col-5 p-5 m-2">
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


@endsection
    <!-- Tautan Pintasan End -->
    <!-- Main Konten End -->
    <!-- Konten End -->
@endsection
    <!-- Container end -->