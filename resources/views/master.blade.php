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
      @include('/partials/_content')
    </div>
    <div class="footer">
            @yield('footer')
    </div>
    @yield('javascript')
    
</body>
</html>