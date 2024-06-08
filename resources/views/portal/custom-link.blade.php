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

<div class="pintasan-tautan mb-4">
  <div class="judul-konten d-flex mb-5">
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
  <div class="search d-flex justify-content-center mb-4">
    <form class="" role="search">
      <input class="form-control me-2 text-align-center" type="search" placeholder="Search your Custom Link here..." aria-label="Search">
      <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
    </form>
  </div>
  <!-- List Card Start -->
  <div class="row list-card">
    <div class="col d-flex">
      <a href="https://chatgpt.com/" class="card">
        <div class="card-body">
          <div>
            <h5 class="card-title">Chat GPT</h5>
            <span class="status rounded">Custom</span>
          </div>
          <hr>
          <p>Informasi:</p>
          <div class="link-informasi">
            <p></p>
          </div>
        </div>
      </a>
      <a href="https://app.ungu.in/" class="card">
        <div class="card-body">
          <div>
            <h5 class="card-title">Ungu.in</h5>
            <span class="status rounded">Custom</span>
          </div>
          <hr>
          <p>Informasi:</p>
          <div class="link-informasi">
            <p></p>
          </div>
        </div>
      </a>
      <a class="card">
        <div class="card-body">
          <div>
            <h5 class="card-title">D3-Manajemen Informatika</h5>
            <span class="status rounded">Custom</span>
          </div>
          <hr>
          <p>Informasi:</p>
          <div class="link-informasi">
            <p></p>
          </div>
        </div>
      </a>
      <a href="https://chatgpt.com/" class="card">
        <div class="card-body">
          <div>
            <h5 class="card-title">Chat GPT</h5>
            <span class="status rounded">Custom</span>
          </div>
          <hr>
          <p>Informasi:</p>
          <div class="link-informasi">
            <p></p>
          </div>
        </div>
      </a>
      <a href="https://app.ungu.in/" class="card">
        <div class="card-body">
          <div>
            <h5 class="card-title">Ungu.in</h5>
            <span class="status rounded">Custom</span>
          </div>
          <hr>
          <p>Informasi:</p>
          <div class="link-informasi">
            <p></p>
          </div>
        </div>
      </a>
      <a class="card">
        <div class="card-body">
          <div>
            <h5 class="card-title">D3-Manajemen Informatika</h5>
            <span class="status rounded">Custom</span>
          </div>
          <hr>
          <p>Informasi:</p>
          <div class="link-informasi">
            <p></p>
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- List Card End -->
</div>
@endsection
<!-- Tautan Pintasan End -->
<!-- Main Konten End -->
<!-- Konten End -->
@endsection
<!-- Container end -->
