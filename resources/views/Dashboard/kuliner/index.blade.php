@extends('Dashboard.layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
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
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Wisata Kuliner</h1>
  </div>
  <div class="table-responsive col-lg-10">
    <a class="btn btn-primary" href="/dashboard/kuliner/create">Create new Kuliner</a>
    <table class="table table-striped table-sm mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Nama Wisata Kuliner</th>
          <th scope="col">Alamat</th>
          <th style="width: 110px" scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kuliners as $kuliner)
        <form action="/dashboard/kuliner/{{ $kuliner->id }}/destroy" method="POST" class="ms-3">
        @method('PUT')
        @csrf
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kuliner->category->name }}</td>
            <td>{{ $kuliner->nama_tempat }}</td>
            <td>{{ $kuliner->alamat }}</td>
            <td>
              <a class="badge bg-warning" href="/dashboard/kuliner/{{ $kuliner->id }}"><span data-feather="eye"></span></a>
              <a class="badge bg-info" href="/dashboard/kuliner/{{ $kuliner->id }}/edit"><span data-feather="edit"></span></a>  
              <button class="badge bg-danger border-0" onclick="return confirm('Apakah yakin ingin menghapus Wisata Kuliner?')"><span data-feather="x-circle"></span></button>
              {{-- <a class="badge bg-danger" href=""><span data-feather="x-circle"></span></a> --}}
            </td>
        </tr>
        </form>
        @endforeach
      </tbody>
    </table>
  </div>
</main>
@endsection