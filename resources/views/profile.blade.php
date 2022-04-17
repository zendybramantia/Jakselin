@extends('layouts.app')

@section('title', '{!! $user->name !!}')

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
<div class="list" style="margin-top:8%">
    <div class="d-flex justify-content-center">
        <img src="/{{ $user->avatar }}" class="rounded-circle" style="width:279px;" alt="">
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
@endsection