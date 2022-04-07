<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">Laundry.in</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Service") ? 'active' : '' }}" href="/service">Services</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/profile">Profile</a>
              <a class="dropdown-item" href="/company">Company</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/collaboration">Collaboration</a>
            </div>
          </li>
        </ul>
      <ul class="navbar-nav ms-md-auto">
        <li class="nav-item">
          <a href="/login" class="btn btn-light">Login</a>
        </li>
      </ul>
      </div>
    </div>
  </nav>