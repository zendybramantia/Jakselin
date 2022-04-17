{{-- <!doctype html>
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

<body> --}}

@extends('layouts.app')

@section('title', "Category")

@section('css', 'wisata-style.css')


    {{-- <nav class="navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-body rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">
                <img class="ms-sm-3" src="/images/Jakselin-color.svg" alt="" height="24">
            </a>
            <div class="d-flex justify-content-end" style="width: 16%;">
              @auth
                  <a class="navbar-brand" href="/User/profile">{{ auth()->user()->name }}</a>
                  <a href="/User/profile">
                      <img class="rounded-circle" style="height: 36px;" src="/{{ auth()->user()->avatar }}" alt="">
                  </a>
              @else
                  <a class="navbar-brand" href="/login">Login</a>
              @endauth
            </div>
        </div>
      </nav> --}}

@section('content')
    
<div class="search-container">
    <h1>Kategori "{{ $category }}"</h1>
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
