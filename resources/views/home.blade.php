@extends('layouts.app')

@section('css', 'home-style.css')

@section('title', 'Home')

{{-- @section('navbar')
<nav class="navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-body rounded">
  <div class="container-fluid">
      <a class="navbar-brand" href="/home">
          <img class="ms-sm-3" src="/images/Jakselin-color.svg" alt="" height="24">
      </a>
      <div class="d-flex justify-content-end" style="width: 16%;">
        @auth
            <a class="navbar-brand" href="/User/profile">{{ auth()->user()->name }}</a>
            <a href="/User/profile">
                <img style="height: 36px;width: 36px; object-fit: cover;" class="rounded-circle " src="/{{ auth()->user()->avatar }}" alt="">
            </a>
        @else
            <a class="navbar-brand" href="/login">Login</a>
        @endauth
      </div>
  </div>
</nav>
@endsection --}}

@section('content')    
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