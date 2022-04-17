@extends('Dashboard.layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Category {{ $category->name }}</h1>
  </div>
  <div class="table-responsive col-lg-8">
    <a class="btn btn-primary" href="">Create new category</a>
    <table class="table table-striped table-sm mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Tempat</th>
          <th scope="col">Alamat</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($wisatas as $wisata)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $wisata->nama_tempat }}</td>
          <td>{{ $wisata->alamat }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</main>
@endsection