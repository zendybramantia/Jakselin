<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner - Jakselin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/profil-style.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-body rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">
                <img class="ms-sm-3" src="/images/Jakselin-color.svg" alt="" height="24">
            </a>
            <div class="d-flex " style="width: 16%;">
                <a class="navbar-brand" href="#">Rifki Adi Pramana</a>
                <a href="">
                    <img style="height: 36px;" src="/images/Ellipse 11.svg" alt="">
                </a>
            </div>
        </div>
    </nav>

    <div class="profil-container">
        <div class="profil-image-container">
            <img src="{{ $profil->gambar }}" class="profil-image" alt="">
        </div>
        <img src="storage/kuliner/asOIFOK4KWI4O6dhRB0rIZXRShLPp57jzNZMHgjH.jpg" alt="">
        <div class="profil-info-container">
            <p class="title">{{ $profil->nama_tempat }}</p>
            <h5>Kategori</h5>
            <p class="address">{{ $profil->category->name }}</p>
            <h5>Alamat</h5>
            <p class="address">{{ $profil->alamat }}</p>
            <h5>Deskripsi</h5>
            <p class="description"> {{ $profil->deskripsi }}</p>
        </div>    
    
    </div>

    <div class="footer">
        <p>Dibuat Oleh Tim Jakselin</p>
    </div>
    
</body>