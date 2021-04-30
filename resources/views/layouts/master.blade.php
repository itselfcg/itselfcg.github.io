<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') Itzel Contreras</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/transition.css') }}">
    <link href="{{ asset('css/modules/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modules/footer.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/cocoen/dist/cocoen.js"></script>

    @yield('css-scripts')
</head>

<body>
    <header>
        @include('includes.header')
    </header>

    @include('includes.scroll-up')


    <main style="padding: 4em 0 12em; background-color: white;">
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</body>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>
<script src="{{ asset('js/scroll-up.js') }}" defer></script>
<script>
    Cocoen.parse(document.body);
</script>
@yield('js-scripts')
</html>
