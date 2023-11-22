<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tanda Jasa</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <script
    defer
    src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
  </head>
  <body>
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
                <a class="nav-link fw-bold" href="{{route('dashboard')}}">Book a Task</a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link fw-bold" href="{{route('task')}}">My Task</a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link fw-bold" href="{{route('account')}}">Account</a>
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
          <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action"
            >Book A Task</a
          >
          <a href="{{route('task')}}" class="list-group-item list-group-item-action">My Task</a>
          <a
            href="#"
            class="list-group-item list-group-item-action text-success fw-bold"
            >Account</a
          >
        </div>
      </div>
    </div>

    @yield('content')

    <footer>
        <div class="container mt-5">
          <div class="row justify-content-center h-full">
            <div class="col-lg-6 text-center align-items-center">
              <span class="p-5">Yasya Technology ©️ 2023 </span>
            </div>
          </div>
        </div>
      </footer>
      <!-- End Footer -->
      <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.2/dist/cdn.min.js"
    ></script>
      <script
        src="https://kit.fontawesome.com/4c03683015.js"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
      ></script>
    </body>
  </html>