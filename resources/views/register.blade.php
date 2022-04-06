<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Halaman Register</title>

    <link rel="stylesheet" href="/css/Register-style.css">
</head>
<body>
    <x-navbar.nav1/>
    <!-- <div class="border position-relative" style="z-index: 10;">
        <img class="position-absolute bottom-0 end-0" src="Group 7.svg" alt="">
    </div> -->
    <div class="global-container" style="background-image: url(images/background-img.svg);">
        <div style="height: 100vh;"></div>
        <div class="login-container">
            <div style="width: 400px;">
                <h1 style="text-align: center;">REGISTER</h1>
                <form>
                    <div class="mb-3">
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="No. HP">
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Username">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <a href="/login">Sudah punya akun?</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>