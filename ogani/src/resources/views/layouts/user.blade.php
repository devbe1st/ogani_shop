<!-- resources/views/layouts/user.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ogani">
    <meta name="keywords" content="user, layout, template">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Ogani')</title>
    <link rel="shortcut icon" href="{{ asset('user/img/favicon.png') }}" type="image/x-icon">
    {{-- /* ---------------------------------- LINK ---------------------------------- */ --}}
    @include('components.link')
    {{-- /* ---------------------------------- LINK ---------------------------------- */ --}}
</head>

<body>
    {{-- /* --------------------------------- HEADER --------------------------------- */ --}}
    @include('components.loader')
    @include('components.header')
    @include('components.nav')
    {{-- /* --------------------------------- HEADER --------------------------------- */ --}}
    {{-- /* ---------------------------------- MAIN ---------------------------------- */ --}}
    @yield('content')
    {{-- /* ---------------------------------- MAIN ---------------------------------- */ --}}
    {{-- /* --------------------------------- FOOTER --------------------------------- */ --}}
    @include('components.footer')
    @include('components.script')
    {{-- /* --------------------------------- FOOTER --------------------------------- */ --}}
</body>

</html>
