<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="/css/formPage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
  <body style="background-color:rgb(243, 244, 246);">

    <section id="nav">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid">
                <img src="/img/logoPortal.png" alt="" class="img-fluid navbar-brand ps-4" style="width:15%;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto ms-5 mb-2 mb-lg-0">
                        <li class="nav-item ms-5">
                            <a class="nav-link active fw-bold" aria-current="page" href="#"><i class="bi bi-exclude"></i> Create New Link</a>
                        </li>
                        <li class="nav-item ms-5">
                            <form class="d-flex" role="search">
                                <div class="input-group border border-primary rounded ">
                                    <span class="input-group-text text-primary bg-white border-0" id="basic-addon1"><i class="bi bi-search"></i></span>
                                    <input type="text" class="form-control text-primary border-0" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </form>
                        </li>
                        
                    </ul>
                    <ul class="navbar-nav me-5">
                    <li class="nav-item dropdown ms-5 ps-5 float-end">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               <i class="bi bi-person-circle"></i> Erling Hallan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person-gear"></i> Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-door-open"></i> Log Out</a></li>
                            </ul>
                        </li>
                        </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="konten">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-10 bg-white pt-5 pb-5" id="main-menu">
                    <p class="btn btn-primary text-light d-flex justify-content-between align-items-center me-3 "><a href="#" class=" text-light fw-medium m-1 ms-3 ms-3"><i class="bi bi-key border border-2 me-2  ps-1 pe-1 rounded"></i> Portal AMIKOM Link </a><span><i class="bi bi-arrow-right-square ms-3 me-1"></i></span></p>
                    <p class="d-flex justify-content-between align-items-center me-3 "><a href="#" class="text-secondary m-1 ms-3 ms-3"><i class=" me-2 bi bi-person-fill-up border border-2  ps-1 pe-1 rounded"></i> Create New Link </a><span class="text-secondary"><i class="bi bi-arrow-right-square ms-3 me-1"></i></span> </p>
                    <p class="d-flex justify-content-between align-items-center me-3 "><a href="#" class="text-secondary m-1 ms-3 ms-3"><i class=" me-2 bi bi-key border border-2  ps-1 pe-1 rounded"></i> Custom Link </a><span class="text-secondary"><i class="bi bi-arrow-right-square ms-3 me-1"></i></span> </p>
                    <p class="d-flex justify-content-between align-items-center me-3 "><a href="#" class="text-secondary m-1 ms-3 ms-3"><i class=" me-2 bi bi-key border border-2  ps-1 pe-1 rounded"></i> Public Link </a><span class="text-secondary"><i class="bi bi-arrow-right-square ms-3 me-1"></i></span> </p>
                    <p class="d-flex justify-content-between align-items-center me-3 "><a href="#" class="text-secondary m-1 ms-3 ms-3"><i class=" me-2 bi bi-key border border-2  ps-1 pe-1 rounded"></i> Sharing Link </a><span class="text-secondary"><i class="bi bi-arrow-right-square ms-3 me-1"></i></span> </p>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="row p-4 justify-content-center">
                        <div class="col-7 rounded p-5 bg-white m-3">
                            <p class="h5 fw-bold text-primary mb-3">Buat Custom Link Baru</p>
                            <form id="form-custom">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Judul Link</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Link Asli</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Deskripsi Link</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Buat Custom Link</button>
                            </form>
                        </div>
                        <div class="col-4 ">

                            <form class="rounded p-5 bg-white m-3" style="color: #969AB8;">
                                <p class="h5 fw-bold text-primary mb-3">Pilih kategori</p>

                                <div class="form-check pb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Akademik
                                    </label>
                                </div>
                                <div class="form-check pb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Custom
                                    </label>
                                </div>
                                <div class="form-check pb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Umum
                                    </label>
                                </div>
                                <div class="form-check pb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Jurnal
                                    </label>
                                </div>
                                <div class="form-check pb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Pribadi
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>