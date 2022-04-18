@extends('layouts.app')

@section('title', "$profil->nama_tempat")

@section('css', 'profil-style.css')

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
                  <img style="height: 36px;" src="/{{ auth()->user()->avatar }}" alt="">
              </a>
          @else
              <a class="navbar-brand" href="/login">Login</a>
          @endauth
        </div>
    </div>
  </nav>
@endsection

@section('content')    
<div class="profil-container">
    <div class="profil-image-container">
        <img src="/{{ $profil->gambar }}" class="profil-image" alt="">
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
    <div class="mb-3 d-flex">
            <p>
                <a class="text-decoration-none me-3" href="/kuliner/edit/{{ $profil->id }}">Edit</a>
                <p>|</p>
                {{-- <a class="text-decoration-none ms-3" href="/kuliner/hapus/{{ $profil->id }}">Hapus</a> --}}
                <form action="/kuliner/hapus/{{ $profil->id }}" method="POST" class="ms-3">
                    @method('PUT')
                    @csrf
                    <button class="border-0 bg-white text-primary" onclick="return confirm('Apakah yakin ingin menghapus post?')">Hapus</button>
                </form>
            </p>
        </div>
</div>

<div class="footer">
    <p>Dibuat Oleh Tim Jakselin</p>
</div>
@endsection