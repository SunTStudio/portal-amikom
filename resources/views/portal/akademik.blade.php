@extends('template/layout')
@section('judul')
Portal Amikom
@endsection
<!-- Container start -->
<!-- Sidebar Start -->
@section('navigasi')
<!-- Container start -->
<!-- Sidebar Start -->
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
  <a href="#" class="enable btn btn-primary d-flex align-items-center px-3 py-2">
    <div>
      <i class="fa-solid fa-earth-asia border border-2 p-1 me-2 rounded"></i>
      <span class="link-enable"></i>Public Link</span>
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
          <li><a class="dropdown-item" href="{{ route('portal.logout') }}">Log Out</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<!-- Navbar End -->

<!-- Main Konten Start -->

@section('main-konten')

<!-- Tautan Amikom Start -->
<div class="tautan-amikom mb-4">
  <div class="judul-konten d-flex mb-4">
    <h4>Tautan AMIKOM</h4>

  </div>
  <div class="search d-flex justify-content-center mb-4">
    <form class="d-flex" action="{{ route('portal.akademik.search') }}" role="search">
      <input class="form-control me-2 text-align-center" type="search" name="search" placeholder="Search your Custom Link here..." aria-label="Search" value="{{ $request->get('search') }}">
      <button class="btn btn-primary fw-medium" type="submit">Search</button>
    </form>
  </div>
  <!-- List Card Start -->
  <div class="row list-card">
    <div class="col d-flex mb-4" id="data-akademik">
      {{-- @foreach ($data_akademik as $da)
      <div href="{{ $da->Source_Link }}" class="card">
        <div class="card-body">
          <div>
            <h5 class="card-title">{{ $da->Nama_Link }}</h5>
            <span class="status rounded">Akademik</span>
          </div>
          <hr>
          <p>Informasi:</p>
          <div class="link-informasi">
            <p>{{ $da->Deskripsi }}</p>
          </div>
        </div>
        <div class="card-footer">
          <a href="{{ $da->Source_Link }}" target="_blank" class="btn btn-primary">Visit Link</a>
        </div>
      </div>
      @endforeach --}}
    </div>
    <div class="d-flex justify-content-between px-5">
      
      {{-- <div>
        {{ $data_akademik->links() }}
      </div> --}}
      <button class="btn btn-secondary" id="prev-page">Previous</button>
      <div class="d-flex gap-2">
        <p>Showing</p>
        <p id="now-page">Showing</p>
        <p>to</p>
        <p id="last-page">to</p>
      </div>
      <button class="btn btn-secondary" id="next-page">Next</button>
    </div>
  </div>
  <!-- List Card End -->
</div>
<!-- Tautan Amikom End -->
@endsection
<!-- Main Konten End -->
@endsection
<!-- Konten End -->
@section('custom_script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function() {
    var currentPage = 1;
    var itemsPerPage = 3;  // Ubah sesuai dengan jumlah item per halaman yang Anda inginkan
    var data;
    // Memanggil AJAX untuk mengambil data pertama kali
    fetchData();

    function fetchData() {
        $.ajax({
            url: 'https://gist.githubusercontent.com/SunTStudio/a7b10c96cd9c5f12522cbef43f76ab48/raw/6c8a15e8ec5f205b695d766852071a86ec218368/default-link.json',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                console.log(response);
                data = response;
                displayData();
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
    }

    function displayData() {
        const dataAkademik = $('#data-akademik');
        const nowPage = $('#now-page');
        const lastPage = $('#last-page');
        dataAkademik.empty();  // Kosongkan kontainer sebelum menambahkan data baru

        // Menghitung indeks awal dan akhir untuk halaman saat ini
        var startIndex = (currentPage - 1) * itemsPerPage;
        var endIndex = startIndex + itemsPerPage;
        var paginatedData = data.slice(startIndex, endIndex);

        // Looping melalui data yang dihalaman sesuai dengan perhitungan startIndex dan endIndex
        paginatedData.forEach(item => {
            const dataCard = `<div class="card">
                <div class="card-body">
                    <div>
                        <h5 class="card-title">${item.Nama_Link}</h5>
                        <span class="status rounded">Akademik</span>
                    </div>
                    <hr>
                    <p>Informasi:</p>
                    <div class="link-informasi">
                        <p>${item.Deskripsi}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="${item.Source_Link}" target="_blank" class="btn btn-primary">Visit Link</a>
                </div>
            </div>`;
            const dataNow = `<p>${currentPage}</p>`;
            const dataLast = `<p>${Math.ceil(data.length/3)}</p>`;
            nowPage.empty();
            lastPage.empty();
            nowPage.append(dataNow);
            lastPage.append(dataLast);
            dataAkademik.append(dataCard);
        });
    }

    // Tombol navigasi untuk halaman sebelumnya dan berikutnya
    $('#prev-page').click(function() {
        if (currentPage > 1) {
            currentPage--;
            displayData();
        }
    });

    $('#next-page').click(function() {
        var totalPages = Math.ceil(data.length / itemsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            displayData();
        }
    });
});

</script>

@endsection

<!-- Container end --> 