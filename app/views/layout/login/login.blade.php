<html>
    
    @include('layout.bootstrap3.css')
    @include('layout.bootstrap3.js')
       
    <head>
        @include('layout.bootstrap3.head')
        <title>MONJOK TRAVEL - login</title>
    </head>
    
    <body>
        <div class='container'>
            @yield('content')
        </div>
        @include('layout.bootstrap3.footer')
    </body>
</html>