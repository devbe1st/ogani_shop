<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('admin/favicon-admin.png') }}">
    <title>@yield('title', 'Admin Ogani')</title>
    {{-- LINK --}}
    @include('components.admin-link')
    {{-- LINK --}}
</head>

<body class="vertical light">
    <div class="wrapper">
        {{-- NAV --}}
        @include('components.admin-nav')
        {{-- NAV --}}
        {{-- ASIDE --}}
        @include('components.admin-aside')
        {{-- ASIDE --}}

        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    <div class="col-12">
                        {{-- CONTENT --}}
                        @yield('content')
                        {{-- CONTENT --}}
                    </div>
                </div>
            </div>
            {{-- NOTIFICATION --}}
            @include('components.admin-notification')
            {{-- NOTIFICATION --}}
        </main> <!-- main -->
    </div> <!-- .wrapper -->
    {{-- SCRIPT --}}
    @include('components.admin-script')
    {{-- SCRIPT --}}
</body>
</html>
