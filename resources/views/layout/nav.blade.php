<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
      <div
        class="d-flex align-items-center justify-content-between justify-content-lg-start w-100"
      >
        <div>
          <a
            class="d-block d-lg-none"
            data-bs-toggle="offcanvas"
            href="#offcanvasExample"
            role="button"
            aria-controls="offcanvasExample"
            ><i class="fa-solid fa-bars"></i
          ></a>
        </div>
        <div class="text-center">
          <a class="navbar-brand fw-bold" href="{{route('home')}}">TandaJasa</a>
        </div>
      </div>
      <div class="d-none d-lg-block w-100">
        <div class="navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item mx-4">
              <a class="nav-link fw-bold" href="{{route('services')}}">Services</a>
            </li>
            @guest
            <li class="nav-item mx-4">
              <a class="nav-link fw-bold" href="{{route('login')}}">Sign Up/Sign In</a>
            </li>
            @endguest
            @auth
            <li class="nav-item mx-4">
              <a class="nav-link fw-bold" href="{{route('dashboard')}}">Dashboard</a>
            </li>
            @endauth
            <li class="nav-item mx-4">
              @auth
                @if (Auth::user()->role == 'user')
                <a class="btn btn-outline-success fw-bold" href="{{route('become-tasker')}}">Become a Tasker</a>
                @endif
              @endauth
              @guest
                <a class="btn btn-outline-success fw-bold" href="{{route('login')}}">Become a Tasker</a>
              @endguest  
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Offcanvas -->
  <div
    class="offcanvas offcanvas-start"
    tabindex="-1"
    id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel"
  >
    <div class="offcanvas-header">
      <button
        type="button"
        class="btn-close"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      ></button>
    </div>
    <div class="offcanvas-body">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action"
          >Locations</a
        >
        <a href="" class="list-group-item list-group-item-action"
          >Services</a
        >
        <a href="" class="list-group-item list-group-item-action"
          >Signup/Signin</a
        >
        <a
          href="#"
          class="list-group-item list-group-item-action text-success fw-bold"
          >Become Taskers</a
        >
      </div>
    </div>
  </div>