<!DOCTYPE html>
<html lang=en>
<head>
    <title>@yield('title')</title>
    @stack('additional-css')
    @stack('additional-js')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    
    <div class="wrapper">
        @yield('preloader')
        @include('adminlte.navbar')
        @include('adminlte.sidebar')
        @yield('konten')
        @include ('adminlte.footer')
    </div>

</body>
</html>