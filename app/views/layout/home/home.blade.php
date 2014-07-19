<html>
    
    @include('layout.bootstrap3.css')
    @include('layout.bootstrap3.js')
    
    <head>
        @include('layout.home.head')
        <title>SISTEM INFORMASI MONJOK TRAVEL</title>
    </head>
    
    <body>
        <div class='container'>
            @yield('content')
        </div>
        @include('layout.bootstrap3.footer')
    </body>
</html>