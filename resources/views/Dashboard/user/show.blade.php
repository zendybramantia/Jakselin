@extends('Dashboard.layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Profile {{ $user->username }}</h1>
  </div>
  <div class="list" style="margin-top:2%">
    <div class="d-flex justify-content-center">
        <img src="/{{ $user->avatar }}" class="rounded-circle img-thumbnail" style="width:279px; height:279px; object-fit:cover;" alt="">
    </div>
    <br/>
    <div class="d-flex justify-content-center">
        <h2>{{ $user->name }}</h2>
    </div>
    <div class="d-flex justify-content-center">
        <table>
            <tr>
                <td style="width: 150px">Username</td>
                <td>: {{ $user->username }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: {{ $user->email }}</td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>: {{ $user->nohp }}</td>
            </tr>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <a href="/User/profile/edit" class="btn btn-secondary text-white">Edit Info</a>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <a href="/logout" class="btn btn-secondary text-white">Log Out</a>
    </div>
  </div>
</main>

@endsection