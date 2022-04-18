<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/home') ? 'active' : '' }}" aria-current="page" href="/dashboard/home">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories">
            <span data-feather="columns"></span>
            Categories
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/users') ? 'active' : '' }}" aria-current="page" href="/dashboard/users">
            <span data-feather="users"></span>
            User
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kuliner') ? 'active' : '' }}" aria-current="page" href="/dashboard/kuliner">
            <span data-feather="map"></span>
            Wisata Kuliner
          </a>
        </li>
      </ul>
    </div>
  </nav>