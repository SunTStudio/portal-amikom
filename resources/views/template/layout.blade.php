<!DOCTYPE html>
<html lang="en">

@include('template/call_head')

<body>
    <!-- Container start -->
    <section class="container-fluid">
        <div class="row">
            <!-- Sidebar Start -->
            <div class="col-lg-3 col-md-5 sidebar d-flex py-4 px-5">
                <div class="main d-flex">
                    <div class="logo d-flex">
                        <img src="/img/Logo_Amikom.png" alt="Logo Amikom" />
                        <h4 class="m-0">Portal Amikom</h4>
                    </div>
                    @yield('navigasi')
                </div>
            </div>
            <!-- Sidebar End -->

            <!-- Konten Start -->

            <!-- Navbar Start -->
            <section class="col-lg-9 col-md-7 konten p-0">
                @yield('konten')
                <!-- Navbar End -->

                <!-- Main Konten Start -->
                <section class="container-fluid main-konten">
                    @yield('main-konten')
                </section>
                <!-- Main Konten End -->
            </section>
            <!-- Konten End -->
        </div>
    </section>
    <!-- Container end -->
    <!-- Script -->
     @yield('custom_script')
    @include('template/call_js')
</body>

</html>