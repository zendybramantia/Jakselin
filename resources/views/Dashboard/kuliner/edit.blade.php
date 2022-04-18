@extends('Dashboard.layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
    <div>
        <form action="/dashboard/kuliner/{{ $kuliner->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Tempat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_tempat" value="{{ $kuliner->nama_tempat }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat" value="{{ $kuliner->alamat }}" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi" >{{ $kuliner->deskripsi }}</textarea>
            </div>
            <div class="mb-3">
                <label for="inputTipe" class="form-label">Kategori</label>		
                <select class="form-select" id="inputTipe" aria-label="Default select example" name="category_id">
                    <option value="1">Cepat Saji</option>
                    <option value="2">Cafe</option>
                    <option value="3">Fine Dining</option>
                    <option value="4">Kaki Lima</option>
                    <option value="5">Bakery</option>
                </select>	
            </div> 
            <div class="mb-3">
                <label for="formFile" class="form-label">Gambar</label>
                <input class="form-control" type="file" id="formFile" name="gambar" >
            </div>
            <div class="button">
                <button type="submit" class="btn btn-outline-secondary">SUBMIT</button>
            </div>
        </form>
    </div>
</main>
@endsection