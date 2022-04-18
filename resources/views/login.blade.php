@extends('layouts.app')

@section('title', 'Login')

@section('css', 'login-style.css')

{{-- @section('navbar')
<nav class="navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-body rounded">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">
            <img class="ms-sm-3" src="/images/Jakselin-color.svg" alt="" height="24">
        </a>
    </div>
</nav>
@endsection --}}

@section('content')
<div class="global-container" style="background-image: url(/images/background-img.svg)">
    <div style="height: 100vh;"></div>
    <div class="login-container">
        <div style="width: 400px;">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <h1 style="text-align: center;">LOGIN</h1>
            <form action="/login/auth" class="login-form" method="POST">
                @csrf
                <div class="mb-3">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="Email" value="{{ old('email') }}">
                  @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control @error('email') is-invalid @enderror" name="password" id="email" placeholder="Password">
                  @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div>
                    <a href="/User/create">Belum punya akun?</a>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection