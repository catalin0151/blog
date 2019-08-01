<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.main.head')
    @yield('head')
</head>
<body>
    <div class="container main-layout">
        @include('layouts.partials.main.nav')

        @include('layouts.partials.main.header')
        <div class="col-10">
            @yield('content')
        </div>
        <div class="col">
            @yield('sidebar')
        </div>


        @include('layouts.partials.main.footer')

        @yield('footer')
    </div>
    @include('layouts.partials.main.footer-scripts')
    </body>
</html>
