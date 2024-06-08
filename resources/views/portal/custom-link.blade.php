@extends('template/layout')
@section('judul')
Custom Link
@endsection
<!-- Container start -->
<!-- Sidebar Start -->
@section('navigasi')
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
<!-- Navbar End -->

<!-- Main Konten Start -->
<!-- Tautan Pintasan Start -->
@section('main-konten')
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
  <!-- List Card End -->
</div>
@endsection
<!-- Tautan Pintasan End -->
<!-- Main Konten End -->
<!-- Konten End -->
@endsection
<!-- Container end -->
