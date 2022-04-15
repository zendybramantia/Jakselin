@extends('layouts.app')

@section('css', 'home-style.css')

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
    @endsection