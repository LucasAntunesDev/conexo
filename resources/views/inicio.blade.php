<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Início - Conexo</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="icon" type="image/png" href="./favicon.ico">
</head>

<body class="text-gray-700 dark:text-violet-50 flex flex-col h-screen bg-violet-50 dark:bg-neutral-900">
    @include('includes.header')

    <div class="flex flex-col justify-center items-center w-screen grow">
        {{-- @yield('content') --}}

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

        <span class="font-semibold my-4 w-64 text-center mx-auto">Forme 4 grupos de 4 palavras que tenham algo em
            comum</span>

        <div class="p-4 flex gap-2">
            <div class="inline-flex items-center p-4 btn-primary">
                <a href="{{ route('jogos') }}" class="inline-flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-gamepad">
                        <line x1="6" x2="10" y1="12" y2="12" />
                        <line x1="8" x2="8" y1="10" y2="14" />
                        <line x1="15" x2="15.01" y1="13" y2="13" />
                        <line x1="18" x2="18.01" y1="11" y2="11" />
                        <rect width="20" height="12" x="2" y="6" rx="2" />
                    </svg>
                    Jogos
                </a>
            </div>
            
            @auth('web')
            <div class="inline-flex items-center p-4 btn-primary">
                <a href="{{ route('disciplinas') }}" class="inline-flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-graduation-cap">
                        <path
                            d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z" />
                        <path d="M22 10v6" />
                        <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5" />
                    </svg>
                    Disciplinas
                </a>
            </div>

            <div class="inline-flex items-center p-4 btn-primary">
                <a href="{{ route('grupos') }}" class="inline-flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-group">
                        <path d="M3 7V5c0-1.1.9-2 2-2h2" />
                        <path d="M17 3h2c1.1 0 2 .9 2 2v2" />
                        <path d="M21 17v2c0 1.1-.9 2-2 2h-2" />
                        <path d="M7 21H5c-1.1 0-2-.9-2-2v-2" />
                        <rect width="7" height="5" x="7" y="7" rx="1" />
                        <rect width="7" height="5" x="10" y="12" rx="1" />
                    </svg>
                    Grupos
                </a>
            </div>

            <div class="inline-flex items-center p-4 btn-primary">
                <a href="{{ route('palavras') }}" class="inline-flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-case-lower">
                        <circle cx="7" cy="12" r="3" />
                        <path d="M10 9v6" />
                        <circle cx="17" cy="12" r="3" />
                        <path d="M14 7v8" />
                    </svg>
                    Palavras
                </a>
            </div>
            @endif
        </div>
    </div>

</body>

</html>

@section('scripts')
@vite(['resources/js/app.js'])