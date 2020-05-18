<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @include('includes.meta')
    @include('includes.css')
</head>

<body>
    
    @include('layouts._navbar')

    @yield('content')

    @include('layouts._footer')

    @include('includes.script')

    @stack('before-script')
   
</body>

</html>