@extends('Dashboard.layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Users</h1>
  </div>
  <div class="table-responsive col-lg-8">
    <a class="btn btn-primary" href="">Create new user</a>
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
    <table class="table table-striped table-sm mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">username</th>
          <th scope="col">Email</th>
          <th scope="col">No. Hp</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($userlist as $user)
        <form action="/dashboard/users/{{ $user->id }}" method="POST" class="ms-3">
        @method('DELETE')
        @csrf
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->username }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->nohp }}</td>
          <td>
            <a class="badge bg-warning" href="/dashboard/users/{{ $user->id }}"><span data-feather="eye"></span></a>
            <a class="badge bg-info" href="/dashboard/users/{{ $user->id }}/edit"><span data-feather="edit"></span></a>
            {{-- <a class="badge bg-danger" href=""><span data-feather="x-circle"></span></a> --}}
            <button class="badge bg-danger border-0" onclick="return confirm('Apakah yakin ingin menghapus post?')"><span data-feather="x-circle"></span></button>
          </td>
        </tr>
        </form>
        @endforeach
      </tbody>
    </table>
  </div>
</main>
@endsection