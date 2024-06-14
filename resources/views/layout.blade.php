<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="text-gray-700 flex flex-col h-screen bg-violet-50">

    @include('includes.header')

    @yield('content')

    </div>
</body>

@yield('scripts')

</html>