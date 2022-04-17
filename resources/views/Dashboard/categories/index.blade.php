@extends('Dashboard.layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Categories</h1>
  </div>
  <div class="table-responsive col-lg-3">
    <a class="btn btn-primary" href="">Create new category</a>
    <table class="table table-striped table-sm mt-3">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
            <a class="badge bg-warning" href="/dashboard/categories/{{ $category->id }}"><span data-feather="eye"></span></a>
            <a class="badge bg-info" href=""><span data-feather="edit"></span></a>
            <a class="badge bg-danger" href=""><span data-feather="x-circle"></span></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</main>
@endsection