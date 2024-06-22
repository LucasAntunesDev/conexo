<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Conexo</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="text-gray-700 flex flex-col h-lvh bg-violet-50">

    <main
        class="flex items-center gap-4 w-auto min-w-[40%] max-h-fit justify-center rounded-2xl px-12 h-fit py-4 md:py-0 md:h-5/6 m-auto bg-gradient-to-tr from-violet-500 to-indigo-700">

        <fieldset class="flex flex-col justify-center items-center rounded-3xl">

            <div class="flex flex-col gap-y-2 my-12">
                <h2 class="my-2 text-violet-50 text-6xl font-bold w-fit">Entrar</h2>
                <p class="font-semibold text-violet-50">Entre com seu login e senha</p>
            </div>

            <form action="{{ route('login')}} " class="flex flex-col gap-4" method="POST">
                @csrf
                <div class="gap-y-1 flex flex-col">
                    <label for="login" class="label text-violet-50">Login</label>
                    <input type="text" name="login" id="login" class="input ring-violet-200 text-violet-50" />
                    @if ($errors->has('login'))
                    <x-error-message class="inline-flex gap-x-1 max-w-48 text-sm mt-1 text-red-300">
                        {{ $errors->first('login') }}
                    </x-error-message>
                    @endif
                </div>

                <div class="gap-y-1 flex flex-col">
                    <label for="senha" class="label text-violet-50">Senha</label>
                    <input type="password" name="senha" id="senha" class="input ring-violet-200 text-violet-50" />
                    @if ($errors->has('senha'))
                    <x-error-message class="inline-flex gap-x-1 max-w-48 text-sm mt-1 text-red-300">
                        {{ $errors->first('senha') }}
                    </x-error-message>
                    @endif
                </div>

                <button type="submit"
                    class="btn-tertiary bg-violet-50 flex py-3 px-6 w-64 justify-between items-center font-semibold spin"
                    id="btn">
                    Entrar
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6" id="login-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>

                    <div class="btn-loader loader-white hidden"></div>
                </button>
            </form>
        </fieldset>

        <img src='login.svg' class="ml-28">

    </main>

    @vite(['resources/js/verificarLogin.js'])

</body>

</html>