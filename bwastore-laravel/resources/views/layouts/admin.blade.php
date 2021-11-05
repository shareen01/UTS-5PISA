<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('name')</title>
    @stack('prepend-style')

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
    @stack('addon-style')
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/admin.png" alt="" class="my-4" style="max-width: 150px" />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="#"
              class="list-group-item list-group-item-action active"
              >Dashboard</a
            >
            <a
              href="{{ route('admin-dashboard') }}"
              class="list-group-item list-group-item-action"
              >Product</a
            >
            <a href="#" class="list-group-item list-group-item-action"
              >Categories</a
            >
            <a href="#" class="list-group-item list-group-item-action"
              >Transactions</a
            >
            <a href="#" class="list-group-item list-group-item-action"
              >Users</a
            >
            <a href="/index.html" class="list-group-item list-group-item-action"
              >Sign out</a
            >
          </div>
        </div>
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
            data-aos="fade-down"
          >
            <div class="container-fluid">
              <button
                classclass="btn btn-secondary d-md-none mr-auto mr-2"
                id="menu-toggle"
              >
                &laquo; Menu
              </button>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarResponsive"
              >
                <span class="navbar-toggler-icon"> </span>
              </button>
              <div class="collapse navbar-collapse" id="navnarResponsive">
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                    >
                      <img
                        src="/images/icon-user.png"
                        alt=""
                        class="rounded-circle mr-2 profile-picture"
                      />
                      hi, angga
                    </a>
                    <div class="dropdown-menu">
                     
                      <div class="dropdown-divider"></div>
                      <a href="/" class="dropdown-item">log out</a>
                    </div>
                  </li>
                </ul>
                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link">hi, angga</a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link d-inline-block"> car </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
           {{-- content --}}
           @yield('content')
          </div>
        </div>
      </div>
      @stack('prepend-script')
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    @stack('addon-script')
  </body>
</html>