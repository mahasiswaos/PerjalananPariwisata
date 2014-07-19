<html>
    
    @include('layout.bootstrap3.css')
    @include('layout.bootstrap3.js')
       
    <head>
        <title>MONJOK TRAVEL - ADMIN</title>
        @include('layout.admin.head')
        @include('layout.bootstrap3.nav')
    </head>
    
    <body>
        <div class='container'>
            @yield('content')
        </div>
        @include('layout.bootstrap3.footer')
    </body>
</html>