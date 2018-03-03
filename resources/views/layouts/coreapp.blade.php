<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ str_replace('-', ' ', config('app.name', 'Laravel')) }}</title>

  <!-- Icons -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/simple-line-icons.css" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Styles required by this views -->
  <style>
  .dropdown {
    position: relative;
    display: inline-block;
  }
  .dropdown:hover .dropdown-content,.dropdown:focus .dropdown-content {
    display: block;
  }
  </style>
  @yield('css')
</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Brand options
1. '.brand-minimized'       - Minimized brand (Only symbol)

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->

<body class="app header-fixed sidebar-minimized breadcrumb-fixed footer-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav d-md-down-none">      
      <li class="nav-item px-3">
        <a class="nav-link" href="{{ url('reports') }}">Dashboard</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="{{ url('data-entry') }}">Data Entry</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="{{ url('register') }}">Users</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Settings</a>
      </li>
    </ul>

    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <span>{{ Auth::user()->name }}</span>
        <div class="dropdown-menu dropdown-menu-right dropdown-content">
          <div class="dropdown-header text-center">
            <strong>Settings</strong>
          </div>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler aside-menu-toggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
  </header>

  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        @yield('sidebar')        
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>

    <!-- Main content -->
    <main class="main">
    @yield('breadcrumb')            
      <div class="container-fluid">
        <div class="animated fadeIn">
         @yield('content')
        </div>

      </div>
      <!-- /.conainer-fluid -->
    </main>

    <aside class="aside-menu">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">

        <div class="tab-pane p-3 active" id="timeline" role="tabpanel">
          <h6>Timeline</h6>
        </div>

        <div class="tab-pane p-3" id="messages" role="tabpanel">
          <h6>Messages</h6>
        </div>
        <div class="tab-pane p-3" id="settings" role="tabpanel">
          <h6>Settings</h6>
        </div>
      </div>
    </aside>

  </div>

  <footer class="app-footer">
    <span><a href="caraga.popcom.gov.ph">Commission on Population</a> © 2017.</span>
    <span class="ml-auto">Powered by <a href="https://getbootstrap.com">Bootstrap 4</a> & <a href="https://laravel.com">Laravel</a></span>
  </footer>

  <!-- Bootstrap and necessary plugins -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootbox.min.js"></script>
  <script src="js/pace.min.js"></script>
  <!-- CoreUI main scripts -->
  <script src="js/coreui.js"></script>
  @yield('script')
</body>
</html>
