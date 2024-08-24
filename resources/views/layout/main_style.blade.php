<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('css')
    <link rel="stylesheet" href="{{asset('/assess/css/style.css')}}">
    @yield('js')

    <title>@yield('title')</title>
</head>
<body>
    <header>
        @yield('header')
        <div class="logo1">
            <a href="/">
                @yield('logo')                
            </a>
        </div>  
    </header>
    <main>
      @yield('main')
    </main>
    <footer>
        @yield('footer')
        <p>copyright © 北陸排水菅サーヒス All Rights Reserved.</p>
    </footer>
    @yield('js')
</body>
</html>