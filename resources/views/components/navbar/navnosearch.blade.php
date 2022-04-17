<nav class="navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-body rounded">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">
            <img class="ms-sm-3" src="/images/Vector.svg" alt="" height="24">
        </a>
        <div class="d-flex justify-content-end " style="width: 16%;">
            <a class="navbar-brand" href="/profile">{{ auth()->user()->nama }}</a>
            <a href="#">
                <img style="height: 36px;" src="{{ auth()->user()->avatar }}" alt="">
            </a>
        </div>
    </div>
</nav>