@extends('Dashboard.layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <form action="/dashboard/categories/{{ $category->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
            <div class="mb-3 mt-3" style="width: 300px">
                <label for="exampleFormControlInput1" class="form-label">Nama Category</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ $category->name }}">
                <div class="button mt-2">
                    <button type="submit" class="btn btn-outline-secondary">SUBMIT</button>
                </div>
            </div>
    </form>
</main>
@endsection