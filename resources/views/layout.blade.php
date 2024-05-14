<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('includes.head')

<body class="text-gray-700 flex flex-col h-screen">
    {{-- <div class="flex flex-col justify-center items-center h-screen w-screen"> --}}
        @yield('content')
        
        @include('includes.footer')
    </div>
</body>

@yield('scripts')

</html>
