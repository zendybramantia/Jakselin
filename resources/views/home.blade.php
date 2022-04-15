@extends('layouts.app')

@section('css', 'home-style.css')

@section('title', 'Home')

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
<div class="header-container">
  <img src="/images/Header-logo.png" alt="">
  <p>Rekomendasi Wisata Kuliner Jakarta Selatan</p>
</div>
<div class="kategori-container">
  <p>----- Pilih Kategori -----</p>
  <div class="select-kategori">
      <a href="/Wisata">
          <div class="fast-food">
              <p>Cepat Saji</p>
          </div>
      </a>
      <a href="/Wisata">
          <div class="cafe">
              <p>Cafe</p>
          </div>
      </a>
      <a href="#">
          <div class="fine-dining">
              <p>Fine Dining</p>
          </div>
      </a>
  </div>
  <div class="select-kategori2">
      <a href="#">
          <div class="kaki-lima">
              <p>Kaki Lima</p>
          </div>
      </a>
      <a href="#">
          <div class="bakery">
              <p>Bakery</p>
          </div>
      </a>
  </div>
</div>
<div class="footer">
  <p>Dibuat Oleh Tim Jakselin</p>
  
</div>
@endsection