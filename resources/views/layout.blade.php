<!DOCTYPE html>
<html lang="pt-BR">

@include('includes.head')

<body class="bg-slate-900 text-zinc-50">
    <div class="flex flex-col justifycenter items-center h-screen w-screen">
        @include('includes.header')
    @yield('content')

    </div>
</body>

@yield('scripts')

</html>