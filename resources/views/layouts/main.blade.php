<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.main.head')
    @yield('head')
</head>
<body>
<div class="main-layout">
    @include('layouts.partials.main.nav')
    <div class="container p-0 pt-5">
        @include('layouts.partials.main.header')
        <div class="row no-gutters">
            <div class="col-10">
                @yield('content')
            </div>
            <div class="col">
                @yield('sidebar')
            </div>
        </div>
    </div>
    @include('layouts.partials.main.footer')
</div>
@yield('footer')

@include('layouts.partials.main.footer-scripts')
</body>
</html>
