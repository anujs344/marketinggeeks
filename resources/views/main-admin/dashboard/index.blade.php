<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MarketingGeeks</title>
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

  @yield('css')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  @include('main-admin.dashboard.layouts.navbar')

  <!-- Main Sidebar Container -->

  @include('main-admin.dashboard.layouts.sidebar')

  
  @yield('main')

  <footer class="main-footer">
    <strong>Copyright &copy; 2019-2029 <a href="">MarketingGeeks</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b>
    </div>
  </footer>
</div>

@yield('scripts')


</body>
</html>
