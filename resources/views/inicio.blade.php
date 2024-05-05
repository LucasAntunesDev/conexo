<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Conexo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="./favicon.ico">
</head>

<body class="text-neutral-700 flex flex-col ">
    <div class="flex flex-col justify-center items-center w-screen grow">
        @yield('content')

        <h1 class="text-5xl font-bold inline-flex flex-col gap-2 justify-center items-center mt-10">
            <svg width="50" height="50" viewBox="0 0 192 192" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2.25 15.9029C2.25 8.36262 8.36262 2.25 15.9029 2.25H176.097C183.637 2.25 189.75 8.36262 189.75 15.9029V37.2925C189.75 39.8059 187.712 41.8434 185.199 41.8434H6.80097C4.28754 41.8434 2.25 39.8059 2.25 37.2925V15.9029Z"
                    fill="#C2410C"></path>
                <path
                    d="M2.25 55.9515C2.25 53.438 4.28754 51.4005 6.80097 51.4005H185.199C187.712 51.4005 189.75 53.438 189.75 55.9515V86.443C189.75 88.9564 187.712 90.9939 185.199 90.9939H6.80097C4.28754 90.9939 2.25 88.9564 2.25 86.443V55.9515Z"
                    fill="#047857"></path>
                <path
                    d="M2.25 105.557C2.25 103.044 4.28754 101.006 6.80097 101.006H185.199C187.712 101.006 189.75 103.044 189.75 105.557V136.049C189.75 138.562 187.712 140.6 185.199 140.6H6.80097C4.28754 140.6 2.25 138.562 2.25 136.049V105.557Z"
                    fill="#0E7490"></path>
                <path
                    d="M2.25 154.708C2.25 152.194 4.28754 150.157 6.80097 150.157H185.199C187.712 150.157 189.75 152.194 189.75 154.708V176.097C189.75 183.637 183.637 189.75 176.097 189.75H15.9029C8.36262 189.75 2.25 183.637 2.25 176.097V154.708Z"
                    fill="#6D28D9"></path>
            </svg>
            CONEXO
        </h1>

        <p class="font-semibold my-4 w-64 text-center mx-auto">Forme 4 grupos de 4 palavras que tenham algo em
            comum</span>

        <div class="flex border border-zinc-50 bg-violet-100 rounded-lg w-fit h-fit p-4 gap-x-4 items-center">
            <span class="font-bold">Jogo diário</span>
            <span>{{date('d/m/Y')}}</span>
            <a href="{{ route('diario', ['dataJogo' => date('Y-m-d')] )}}"
                class="text-zinc-50 bg-violet-500 rounded-md py-2 px-3 hover:bg-violet-700">Jogar</a>
        </div>

        <div>
            {{-- {{ route('jogos')}} --}}
            <a href="{{ route('jogos') }}" class="inline-flex gap-x-2 my-4 px-4 py-2 rounded-lg hover:text-violet-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                </svg>
                Jogos Anteriores
            </a>
        </div>
    </div>
    @include('includes.footer')

</body>




@vite(['resources/js/app.js'])

</html>

@section('scripts')
@vite(['resources/js/app.js'])