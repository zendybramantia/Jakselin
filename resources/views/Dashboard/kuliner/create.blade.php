@extends('Dashboard.layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
    <div>
        <h2 class="judul my-4">TAMBAH REKOMENDASI KULINER</h2>
    </div>
    <div>
        <form action="/dashboard/kuliner/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Tempat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_tempat" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi" required></textarea>
            </div>
            <div class="mb-3">
                <label for="inputTipe" class="form-label">Kategori</label>		
                <select class="form-select" id="inputTipe" aria-label="Default select example" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>	
            </div> 
            <div class="mb-3">
                <label for="formFile" class="form-label">Gambar</label>
                <input class="form-control" type="file" id="formFile" name="gambar" required>
            </div>
            <div class="button">
                <button type="submit" class="btn btn-outline-secondary">SUBMIT</button>
            </div>
        </form>
    </div>
</main>
@endsection