@extends('layouts.app')

@section('title', 'Register Account')

@section('css', 'Register-style.css')

@section('navbar')
<nav class="navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-body rounded">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">
            <img class="ms-sm-3" src="/images/Jakselin-color.svg" alt="" height="24">
        </a>
    </div>
</nav>
@endsection

@section('content')
<div class="global-container" style="background-image: url(/images/background-img.svg)">
    <div style="height: 100vh;"></div>
    <div class="login-container">
        <div style="width: 400px;">
            <h1 style="text-align: center;">REGISTER</h1>
            <form action="/User/store" method="POST">
              @csrf
                <div class="mb-3">
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp" placeholder="Nama" name="name" value="{{ old('name') }}">
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                  @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" placeholder="No. HP" name="nohp" value="{{ old('nohp') }}" >
                  @error('nohp')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" value="{{ old('username') }}" >
                  @error('username')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
                  @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                    <a href="/User/login">Sudah punya akun?</a>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection