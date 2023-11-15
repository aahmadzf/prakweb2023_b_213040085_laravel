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
          <li class="nav-item">
            <a href="/applications/coba-laravel/public/login" class="nav-link {{ ($active === 'login' ) ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
          </li>
        </ul>
        </div>
  </div>
</nav>
