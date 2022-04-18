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
        <img src="/{{ $profil->gambar }}" class="profil-image" style="object-fit:cover"  alt="">
    </div>
    <div class="profil-info-container">
        <p class="title">{{ $profil->nama_tempat }}</p>
        <h5>Kategori</h5>
        <p class="address">{{ $profil->category->name }}</p>
        <h5>Alamat</h5>
        <p class="address">{{ $profil->alamat }}</p>
        <h5>Deskripsi</h5>
        <p class="description"> {{ $profil->deskripsi }}</p>
    </div>
    
    <div class="comment-input-container">
        <h5 class="komentar-title">Komentar</h5>
        <form action="/comment/post" method="post">
            @csrf
            <input type="hidden" name="kuliner_id" value="{{ $profil->id }}">
            <textarea type="textarea" class="form-comment" placeholder="Tambah komentar anda" name="body" required></textarea>
            <button type="submit" class="btn btn-primary mt-2">Kirim</button>
        </form>
    </div>
    
    @foreach ($comments as $comment)
    <div class="profil-info-container">
        <div class="comment-container">
            <div class="comment-profile">
                <img src="/{{ $comment->User->avatar }}" class="rounded-circle img-thumbnail"  alt="">
            </div>
            <div class="comment-content">
                <p>{{ $comment->User->username }}</p>
                <p>{{ $comment->body }}</p>
                <p>{{ $comment->created_at }}</p>
            </div>
        </div>
    </div>
    @endforeach
    
</div>

    

        
    

<div class="footer">
    <p>Dibuat Oleh Tim Jakselin</p>
</div>
@endsection