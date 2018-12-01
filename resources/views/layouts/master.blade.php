<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @section('head')
        @include('partials.head')
</head>
<body>
@include('partials.nav')
<div class="container">
    @yield('content')
</div>
</body>
</html>