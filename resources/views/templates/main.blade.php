
<!doctype html>
<html lang="en">
  <head>
    <title>Chef's Assistant</title>
    <link rel="stylesheet" href="/css/app.css" />
  </head>
  <body>
    <!--Header-->
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Chef's Assistant</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            @include('inc.sidebarleft')
          </div>
        </nav>

        <main role="main" class="col-md-7 ml-sm-auto col-lg-8 px-4">
          @yield('content')
        </main>

        <nav class="col-md-2 d-none d-md-block bg-light sidebar-right">
          <div class="sidebar-sticky">
              @include('inc.sidebarright')
          </div>
        </nav>
    
      </div>
    </div>
  </body>
</html>
