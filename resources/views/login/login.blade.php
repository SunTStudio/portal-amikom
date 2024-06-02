<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up | Portal AMIKOM</title>
    <link rel="stylesheet" href="/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <section id="login">
        <div class="conteiner">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-10 rounded bg-white p-5 m-4">
                    <div class="header text-center ">
                        <img src="/img/logo.png" alt="" class="img-fluid">
                        <p class="fw-bold h5 p-3">PORTAL AMIKOM</p>
                    </div>
                    <form action="/proses-login" method="POST" style="color: #969AB8;">
                        <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput"><i class="fa-regular fa-envelope"></i> Email address</label>
                        </div>
                        <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword"><i class="fa-solid fa-key"></i> Password</label>
                        </div>
                        <div id="bottom" class="text-center m-3">
                            <button type="submit" class="btn btn-primary ps-4 pe-4 fw-medium"><small>Sign Up</small></button>
                        </div>
                    </form>
                    <div id="sign-up-by-google" class="text-center">
                        <p class="fw-bold m-2"><small>OR</small></p>
                        <a href="/sign-up-google" class="btn btn-white border border-secondary ps-4 pe-4 fw-medium text-center"><i class="fa-brands fa-google"></i> Sign Up By Goggle</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>