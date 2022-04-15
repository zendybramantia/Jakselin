@extends('layouts.app')

@section('title', 'Jakselin | Wisata')

@section('css', 'wisata-style.css')

@section('navbar')
<nav class="navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-body rounded">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">
            <img class="ms-sm-3" src="/images/Jakselin-color.svg" alt="" height="24">
        </a>
        <div class="d-flex justify-content-end" style="width: 16%;">
          @auth
              <a class="navbar-brand" href="/User/profile">{{ auth()->user()->name }}</a>
              <a href="/User/profile">
                  <img class="rounded-circle" style="height: 36px;" src="/images/profile.jpg" alt="">
              </a>
          @else
              <a class="navbar-brand" href="/login">Login</a>
          @endauth
        </div>
    </div>
  </nav>
@endsection

@section('content')
<div class="search-container">
    <h1>Hasil Pencarian</h1>
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

<div class="footer">
    <p>Dibuat Oleh Tim Jakselin</p>
</div>
@endsection