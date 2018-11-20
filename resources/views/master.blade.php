<!DOCTYPE html>
<html lang="en">
<head>
    @yield('header')
   
</head>
<body>
    <div class="head">
        @include('/partials/_navbar')
    </div>
    
    <div class="container">
        @yield('content')
    </div>
    <div class="footer">
            @yield('footer')
    </div>

</body>
</html>