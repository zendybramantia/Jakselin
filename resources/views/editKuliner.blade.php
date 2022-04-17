<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <x-navbar.nav2/>

    <div>
        <h2 class="judul">UBAH REKOMENDASI KULINER</h2>
    </div>
    
    <div>
        <form action="/kuliner/edit/{{ $kuliner->id }}" method="POST" enctype="multipart/form-data">
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
</body>
</html>