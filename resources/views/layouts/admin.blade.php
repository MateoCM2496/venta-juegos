<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel de Control</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('css/plugins/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">

  <div class="wrapper">

    @include('layouts.partials.header')

    @include('layouts.partials.sidebar')

    <div class="content-wrapper">

        @yield('content')

    </div>


    {{--@include('layouts.partials.footer')--}}

</div>

<script src="{{ asset('js/plugins/jquery.min.js') }}"></script>
<script src="{{ asset('js/plugins/bootstrap.bundle.js')}}"></script>
<script src="{{ asset('js/adminlte.min.js')}}"></script>

</body>
</html>
