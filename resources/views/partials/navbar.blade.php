<nav class="navbar navbar-expand-lg bg-success navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/applications/coba-laravel/public/">Web Latihan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ ($title === 'Home' ) ? 'active' : '' }}" aria-current="page" href="/applications/coba-laravel/public/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($title === 'About' ) ? 'active' : '' }}" href="/applications/coba-laravel/public/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($title === 'Posts' ) ? 'active' : '' }}" href="/applications/coba-laravel/public/posts">Blog</a>
                </li>
            </li>
        </ul>
        </div>
  </div>
</nav>
