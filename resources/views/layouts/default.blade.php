<!doctype html>
<html>
<title>@yield('title') - Fashion</title>
<head>
    @include('includes.head')
</head>
<body>

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

    @include('includes.foot')
</body>
</html>