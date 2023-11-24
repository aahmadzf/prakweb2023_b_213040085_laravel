<nav class="navbar navbar-expand-lg bg-success navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/applications/coba-laravel/public/">Web Latihan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ ($active === 'home' ) ? 'active' : '' }}" aria-current="page" href="/applications/coba-laravel/public/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($active === 'about' ) ? 'active' : '' }}" href="/applications/coba-laravel/public/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($active === 'posts' ) ? 'active' : '' }}" href="/applications/coba-laravel/public/posts">Blog</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($active === 'categories' ) ? 'active' : '' }}" href="/applications/coba-laravel/public/categories">Category</a>
                </li>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
             @auth
               <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><i class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item">  <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
          </button>
            </form>
        </li>
            @else   
          <li class="nav-item">
            <a href="/applications/coba-laravel/public/login" class="nav-link {{ ($active === 'login' ) ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
          </li>
          @endauth
        </ul>

      </div>

       
  </div>
</nav>
