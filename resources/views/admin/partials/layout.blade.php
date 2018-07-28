<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="shortcut icon" href="{{ asset('themes/default/images/logo/favicon.ico') }}" type="image/x-icon" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ env('META_DESCRIPTION') }}">
        <meta name="keywords" content="{{ env('META_KEYWORDS') }}">

        <title>{{ env('APP_NAME') }} @if ( isset ($title ) ) | {{ $title }} @endif</title>

        <link rel="stylesheet" id="css-main" href="{{ asset('admin/css/codebase.min.css') }}">
        <link rel="stylesheet" id="css-theme" href="{{ asset('admin/css/themes/earth.min.css') }}">
        <link rel="stylesheet" id="css-theme" href="{{ asset('admin/css/all.min.css') }}">
        <script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
        @yield('customcss')
      </head>
      <body>
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header-inverse main-content-boxed">
        @include('admin.partials.nav')
        @include('admin.partials.sidebar')
        @yield('content')
        @include('admin.partials.footer')
      </div>
        <script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/js/core/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('admin/js/core/jquery.scrollLock.min.js') }}"></script>
        <script src="{{ asset('admin/js/core/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('admin/js/core/jquery.countTo.min.js') }}"></script>
        <script src="{{ asset('admin/js/core/js.cookie.min.js') }}"></script>
        <script src="{{ asset('admin/js/codebase.js') }}"></script>

        <!-- Page JS Plugins -->
        <script src="{{ asset('admin/js/plugins/chartjs/Chart.bundle.min.js') }}"></script>

        <!-- Page JS Code -->
        <script src="{{ asset('admin/js/codebase.js') }}"></script>
        @yield('customjs')
  </body>
</html>
