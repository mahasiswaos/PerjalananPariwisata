<html>
    
    @include('layout.bootstrap3.css')
    @include('layout.bootstrap3.js')
       
    <head><title>MONJOK TRAVEL - Tabel Bus</title></head>
    
    <body>
        @include('layout.bus.header')
        @include('layout.bootstrap3.nav')
        <div class='container'>
            @yield('content')
        </div>
        @include('layout.bootstrap3.footer')
    </body>
</html>