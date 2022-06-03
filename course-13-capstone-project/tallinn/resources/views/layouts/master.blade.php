<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Unknown Page')</title>
</head>

<body>
    {{-- Start Nav Bar --}}
    @include('layouts.navbar')
    {{-- End Nav Bar --}}
    @section('sidebar')
    Welcome in master
    @show
    @yield('welcome')

</body>

</html>