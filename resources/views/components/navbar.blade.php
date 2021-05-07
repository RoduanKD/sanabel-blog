<nav class="navbar is-light" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://bulma.io">
        <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
      </a>
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a href="/" class="navbar-item {{ Route::currentRouteName() == 'home' ? 'is-active' : '' }}">
          Home
        </a>
        <a class="navbar-item">
          Documentation
        </a>
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            Create
          </a>
          <div class="navbar-dropdown">
            <a href="/posts/create" class="navbar-item">
              Create Post
            </a>
            <a href="{{route('categories.create')}}" class="navbar-item">
              Creat Category
            </a>
            {{-- <a href="{{route('tags.create')}}" class="navbar-item">
              Create Tag
            </a> --}}

          </div>
        </div>
      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a class="button is-danger">
              Log in
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
