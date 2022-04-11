<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/tyle1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<body>

    <x-navbar.nav2/>

    <div>
        <h2 class="judul">EDIT USER</h2>
    </div>
    <form action="/edit-profile" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" id="exampleFormControlInput1"
                    value="{{ $user->nama }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input name="username" type="text" class="form-control" id="exampleFormControlInput1"
                    value="{{ $user->username }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Telepon</label>
                <input name="nohp" type="text" class="form-control" id="exampleFormControlInput1"
                    value="{{ $user->nohp }}">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto Profil</label>
                <input name="avatar" class="form-control" type="file" id="formFile" >
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
