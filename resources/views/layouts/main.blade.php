<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include( 'partials.layouts.head' )
</head>
<body>
    @yield( 'content' )
</body>
</html>
