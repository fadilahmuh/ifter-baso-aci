<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@isset($title){{$title}} -@endisset Catatan Keuangan</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

  @yield('csslib')

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

  @yield('custom-css')

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->nama_pemilik }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="{{ route('profil') }}" class="dropdown-item has-icon @if(url()->current()==route('profil'))active @endif">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="{{ route('log') }}" class="dropdown-item has-icon @if(url()->current()==route('log'))active @endif">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
        </ul>
      </nav>
      
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/">{{ Auth::user()->nama_mitra }}</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">CT</a>
          </div>
          <ul class="sidebar-menu">
            <li class=" @if(url()->current()==route('home'))active @endif"><a class="nav-link" href="{{ route('home')}}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class=" @if(url()->current()==route('transaksi'))active @endif"><a class="nav-link" href="{{ route('transaksi')}}"><i class="fas fa-hand-holding-usd"></i> <span>Transaksi</span></a></li>
            <li class=" @if(url()->current()==route('masuk') or url()->current()==route('masuk2'))active @endif"><a class="nav-link" href="{{ route('masuk')}}"><i class="fas fa-sign-in-alt"></i> <span>Uang Masuk</span></a></li>
            <li class=" @if(url()->current()==route('keluar') or url()->current()==route('keluar2'))active @endif"><a class="nav-link" href="{{ route('keluar')}}"><i class="fas fa-sign-out-alt"></i> <span>Uang Keluar</span></a></li>           
            <li class=" @if(url()->current()==route('laporan'))active @endif"><a class="nav-link" href="{{ route('laporan')}}"><i class="fas fa-file-invoice-dollar"></i> <span>Laba-Rugi</span></a></li>           
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ route('about') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> About
            </a>
          </div>        
        </aside>
      </div>
      <!-- Main Content -->
      @yield('content')

      
      <footer class="main-footer">
      </footer>
    </div>
  </div>
  
  @yield('modal')

  <!-- General JS Scripts -->
  <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/modules/popper.js') }}"></script>
  <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/stisla.js') }}"></script>
  
  @yield('lib-script')

  @yield('page-script')

  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>

  @yield('line-script')
</body>
</html>