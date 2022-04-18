@extends('Dashboard.layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div>
        <h2 class="judul text-center">EDIT USER</h2>
    </div>
    <form action="/dashboard/users/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="container" style="width: 500px">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1"
                    value="{{ $user->name }}">
                    @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="exampleFormControlInput1"
                    value="{{ $user->username }}">
                    @error('username')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Telepon</label>
                <input name="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" id="exampleFormControlInput1"
                    value="{{ $user->nohp }}">
                    @error('nohp')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto Profil</label>
                <input name="avatar" class="form-control" type="file" id="formFile">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</main>

@endsection