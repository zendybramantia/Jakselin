<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Jakselin | @yield('title')</title>
    @hasSection ('css')
    <link rel="stylesheet" href="/css/@yield('css')">
    @else

    @endif
  </head>
  <body>
    <nav class="navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-body rounded">
      <div class="container-fluid">
          <a class="navbar-brand" href="/home">
              <img class="ms-sm-3" src="/images/Jakselin-color.svg" alt="" height="24">
          </a>
          <div class="d-flex justify-content-end" style="width: 16%;">
            @auth
              @if (app()->view->getSections()['title'] === "Home" || app()->view->getSections()['title'] === "Category")
                @can('admin', \App\Http\Middleware\isAdmin::class)
                @endcan
                <a class="navbar-brand btn btn-warning" href="/dashboard/home"><small>ADMINISTRATOR</small></a>

                <a class="navbar-brand" href="/User/profile">{{ auth()->user()->name }}</a>
                <a href="/User/profile">
                    <img style="height: 36px;width: 36px; object-fit: cover;" class="rounded-circle" src="/{{ auth()->user()->avatar }}" alt="">
                </a>
              @endif
            @else
                <a class="navbar-brand" href="/login">Login</a>
            @endauth
          </div>
      </div>
    </nav>
    {{-- @section('navbar') --}}
        {{-- This is the master sidebar. --}}
    {{-- @show --}}

    <div class="container-fluid px-0">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
