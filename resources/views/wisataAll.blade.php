<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result - Jakselin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/wisata-style.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-body rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="ms-sm-3" src="/images/Vector.svg" alt="" height="24">
            </a>
            <div class="d-flex " style="width: 16%;">
                <a class="navbar-brand" href="#">Rifki Adi Pramana</a>
                <a href="">
                    <img style="height: 36px;" src="/images/Ellipse 11.svg" alt="">
                </a>
            </div>
        </div>
    </nav>

    
    @if ($wisatas->count())

        
        <div class="search-container">
            <div class="col-md-7 mt-2 mb-5">
                <form action="/wisata">
                    <div class="input-group mb-6 " style="height: 45px;">
                        <input type="text" class="form-control" placeholder="Cari tempat kuliner ..." aria-label="Recipient's username" aria-describedby="button-addon2" name="search">
                        <button class="btn btn-warning" type="submit" id="button-addon2">Search</button>
                    </div>
                </form>
            </div>
            <h1>Hasil Pencarian "{{ request('search') }}"</h1>
            @foreach ($wisatas as $wisata) 
                <div class="card">
                    <img src="{{ $wisata->gambar }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $wisata->nama_tempat }}</h5>
                        <p class="card-text">{{ $wisata->alamat }}</p>
                        <a href="/wisata/{{ $wisata->id }}"><button type="button" class="btn btn-warning">Lihat Detail</button></a>
                    </div>
                </div>
            @endforeach
        </div>

    @else
        
        <div class="exception">
            <div class="col-md-7 mt-2 mb-5">
                <form action="/wisata">
                    <div class="input-group mb-6 " style="height: 45px;">
                        <input type="text" class="form-control" placeholder="Cari tempat kuliner ..." aria-label="Recipient's username" aria-describedby="button-addon2" name="search">
                        <button class="btn btn-warning" type="submit" id="button-addon2">Search</button>
                    </div>
                </form>
            </div>
            <h1>Hasil Pencarian "{{ request('search') }}"</h1>
            <p>Wisata Kuliner Tidak Ditemukan</p>
        </div>
    @endif

    <div class="footer">
        <p>Dibuat Oleh Tim Jakselin</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>