<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('searchbar')
            This is the master searchbar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>