<html>
    
    @include('layout.bootstrap3.css')
    @include('layout.bootstrap3.js')
       
    <head><title>MONJOK TRAVEL - Tabel Perjalanan</title></head>
    
    <body>
        @include('layout.perjalanan.header')
        @include('layout.bootstrap3.nav')
        <div class='container'>
            @yield('isi')
        </div>
        @include('layout.bootstrap3.footer')
    </body>
</html>