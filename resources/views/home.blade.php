<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home- Jakselin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/home-style.css">
</head>

<body>
  
    @auth
        <x-navbar.navnosearch/>
    @endauth
    <div class="header-container">
        <img src="/images/Header-logo.png" alt="">
        <p>Rekomendasi Wisata Kuliner Jakarta Selatan</p>
        <div class="col-md-6 mt-3">
            <form action="/wisata">
                <div class="input-group mb-6 " style="height: 45px;">
                    <input type="text" class="form-control" placeholder="Cari tempat kuliner ..." aria-label="Recipient's username" aria-describedby="button-addon2" name="search">
                    <button class="btn btn-warning" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="kategori-container">
        <p>----- Pilih Kategori -----</p>
        <div class="select-kategori">
            @foreach ($categories as $category)
            <a href="/{{$category->name}}">
                <div class="fast-food">
                    <p>{{ $category->name }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    <div class="footer">
        <p>Dibuat Oleh Tim Jakselin</p>
        
    </div>

    
</body>

</html>