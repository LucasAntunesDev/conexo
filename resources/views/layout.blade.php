<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('includes.head')

<body class="text-neutral-700">
    <div class="flex flex-col justifycenter items-center  w-screen">
        @yield('content')
        
        @include('includes.footer')
    </div>
</body>

@yield('scripts')

</html>
