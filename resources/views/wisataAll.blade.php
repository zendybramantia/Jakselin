@extends('layouts.app')

@section('title', 'Jakselin | Wisata')

@section('css', 'wisata-style.css')

    
    @if ($wisatas->count())
        <div class="search-container">
            <div class="col-md-7 mt-2 mb-5">
                <form action="/wisata">
                    <div class="input-group mb-6 " style="height: 45px;">
                        <input type="text" class="form-control" placeholder="Cari tempat kuliner ..." aria-label="Recipient's username" aria-describedby="button-addon2" name="search">
                        <button class="btn btn-warning" type="submit" id="button-addon2">Search</button>
                    </div>
                </form>
            </div>
            <h1>Hasil Pencarian "{{ request('search') }}"</h1>
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
    @else
        <div class="exception">
            <div class="col-md-7 mt-2 mb-5">
                <form action="/wisata">
                    <div class="input-group mb-6 " style="height: 45px;">
                        <input type="text" class="form-control" placeholder="Cari tempat kuliner ..." aria-label="Recipient's username" aria-describedby="button-addon2" name="search">
                        <button class="btn btn-warning" type="submit" id="button-addon2">Search</button>
                    </div>
                </form>
            </div>
            <h1>Hasil Pencarian "{{ request('search') }}"</h1>
            <p>Wisata Kuliner Tidak Ditemukan</p>
        </div>
    @endif
<div class="footer">
    <p>Dibuat Oleh Tim Jakselin</p>
</div>
@endsection