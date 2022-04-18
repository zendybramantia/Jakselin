@extends('Dashboard.layouts.main')

@section('content')    
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
    <div class="profil-container">
        <div class="profil-image-container d-flex justify-content-center" >
            <img src="/{{ $profil->gambar }}" class="profil-image rounded-3" style="width: 500px" alt="" >
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
</main>
@endsection