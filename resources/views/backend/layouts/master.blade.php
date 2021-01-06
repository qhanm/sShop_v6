<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('themes/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/css/style.css') }}">

    <style>

    </style>
</head>

<body class="fixed-sn white-skin">

<!-- Main Navigation -->
<header>

    <!-- Sidebar navigation -->
    @include('backend.layouts.sidebar')
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    @include('backend.layouts.header')
    <!-- Navbar -->

</header>

<main>

    <div class="container-fluid">
        @yield('content')
    </div>

</main>
<!-- Main layout -->

<!-- Footer -->
@include('backend.layouts.footer')
<!-- Footer -->

<script src="{{ asset('themes/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/js/mdb.min.js') }}"></script>

<script>
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
    });

</script>

</body>

</html>
