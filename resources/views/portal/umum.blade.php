@extends('template/layout')
@section('judul')
Portal Amikom
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
  <a href="/custom" class="disable btn btn-secondary d-flex align-items-center px-3 py-2">
    <div>
      <i class="fa-solid fa-cube border border-2 p-1 me-2 rounded"></i>
      <span class="link-disable"></i>Custom Link</span>
    </div>
    <i class="fa-solid fa-chevron-right"></i>
  </a>
  <a href="/akademik" class="enable btn btn-secondary d-flex align-items-center px-3 py-2">
    <div>
      <i class="fa-solid fa-earth-asia border border-2 p-1 me-2 rounded"></i>
      <span class="link-disable"></i>Public Link</span>
    </div>
    <i class="fa-solid fa-chevron-right"></i>
  </a>
  <a href="#" class="enable btn btn-primary d-flex align-items-center px-3 py-2">
    <div>
      <i class="fa-solid fa-share border border-2 p-1 me-2 rounded"></i>
      <sapn class="link-enable"></i>Sharing Link</span>
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
          <li><a class="dropdown-item" href="{{ route('portal.logout') }}">Log Out</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<!-- Navbar End -->

<!-- Main Konten Start -->
@section('main-konten')

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
  <div class="search d-flex justify-content-center mb-4">
    <form class="d-flex" action="{{ route('portal.umum.search') }}" role="search">
      <input class="form-control me-2 text-align-center" type="search" name="search" placeholder="Search your Custom Link here..." aria-label="Search" value="{{ $request->get('search') }}">
      <button class="btn btn-primary fw-medium" type="submit">Search</button>
    </form>
  </div>
  <!-- List Card Start -->
  <div class="row list-card">
    <div class="col d-flex mb-4">
      @foreach ($data_umum as $du )
      <div class="card">
        <div class="card-body">
          <div>
            <h5 class="card-title">{{ $du->Nama_Link }}</h5>
            <span class="status rounded">{{ $du->kategori->nama_kategori }}</span>
          </div>
          <hr>
          <p>Informasi:</p>
          <div class="link-informasi">
            <p>{{ $du->Deskripsi}}</p>
          </div>
        </div>
        <div class="card-footer d-flex justify-content-between">
          <a href="{{ $du->Source_Link }}" target="_blank" class="btn btn-primary">Visit Link</a>
          {{-- <div>
            <a href="{{ route('portal.custom.edit', ['id' => $du->id]) }}" class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i></a>
            <a href="{{ route('portal.custom.delete', ['id' => $du->id]) }}" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
          </div> --}}
        </div>
      </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-between px-5">
      <div class="d-flex gap-2">
        <p>Showing</p>
        {{ $data_umum->firstItem() }}
        <p>to</p>
        {{ $data_umum->lastItem() }}
      </div>
      <div>
        {{ $data_umum->links() }}
      </div>
    </div>
  </div>
  <!-- List Card End -->
</div>
<!-- Tautan Umum End -->
@endsection

<!-- Main Konten End -->
@endsection

<!-- Konten End -->

<!-- Container end -->