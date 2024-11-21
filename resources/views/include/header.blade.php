<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand"  href="{{ route('home') }}">My Application</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        @guest
        
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('registration') ? 'active' : '' }}" href="{{ route('registration') }}">Register User</a>
        </li>
        @endguest

        @auth

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('users.index') ? 'active' : '' }}" href="{{ route('users.index') }}">Users List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('upload') ? 'active' : '' }}" href="{{ route('upload') }}">Upload File</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('logout') ? 'active' : '' }}" href="{{ route('logout') }}">Logout</a>
        </li>
        
        @endauth
      </ul>
    </div>
  </div>
</nav>
