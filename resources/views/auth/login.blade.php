<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Conexo</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body
    class="text-gray-700 dark:text-violet-50 flex flex-col h-screen bg-violet-50 dark:bg-gradient-to-tr dark:bg-neutral-900">

    <header class="inline-flex md:hidden my-4 ml-20 gap-2 size-fit text-violet-700 dark:text-violet-50">
        <x-conexo-logo class="size-10"></x-conexo-logo>
        <h1 class="text-3xl font-bold">CONEXO</h1>
    </header>

    <div class="w-screen md:h-screen">

        <div class="flex flex-row justify-center md:justify-stretch">
            <div class="flex flex-col items-center gap-4 w-auto md:w-6/12 h-screen justify-center rounded-r-2xl">
                
                <fieldset
                    class="w-fit py-10 px-16 bg-violet-300 dark:bg-neutral-800 md:bg-transparent md:dark:bg-transparent rounded-2xl">
                    <div class="flex flex-col gap-y-2 my-12">
                        <h2 class="my-2 text-violet-500 dark:text-violet-50 text-5xl font-bold w-fit">Entrar</h2>
                        <p class="font-semibold">Entre com seu login e senha</p>
                    </div>

                    <form action="{{ route('login')}} " class="flex flex-col gap-4" method="POST">
                        @csrf
                        <div class="gap-y-1">
                            <label for="login" class="label">Login</label>
                            <input type="text" name="login" id="login"
                                class="block py-2.5 px-0 w-full text-sm bg-transparent  border-b-2 border-violet-500 appearance-none focus:outline-none focus:border-violet-700 focus:ring-0 peer pr-7 pl-10  rounded-lg border-2 outline-none autofill:bg-violet-100 focus:autofill:bg-violet-100 dark:bg-transparent dark:focus:border-violet-400 dark:text-violet-100" />
                        </div>

                        <div class="gap-y-1">
                            <label for="senha" class="label">Senha</label>

                            <input type="password" name="senha" id="senha"
                                class="block py-2.5 px-0 w-full text-sm bg-transparent  border-b-2 border-violet-500 appearance-none focus:outline-none focus:border-violet-700 focus:ring-0 peer pr-7 pl-10  rounded-lg border-2 outline-none autofill:bg-violet-100 focus:autofill:bg-violet-100 dark:bg-transparent dark:focus:border-violet-400 dark:text-violet-100" />
                        </div>

                        <button type="submit"
                            class="btn-primary flex py-3 px-6 w-64 justify-between items-center font-semibold spin"
                            id="btn">
                            Entrar
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6" id="login-icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>

                            <svg id="spinner" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="animate-spin hidden">
                                <path d="M21 12a9 9 0 1 1-6.219-8.56" />
                            </svg>
                        </button>
                    </form>
                </fieldset>

                </form>

            </div>

            <section class="hidden md:flex flex-col justify-center items-center gap-2 w-6/12 h-screen mx-auto">

                <div
                    class="bg-gradient-to-tr from-violet-700 to-violet-500 h-[97%] w-[97%] flex flex-col justify-center items-center rounded-2xl">

                    <img src="{{ Vite::asset('public/login.svg') }}" class="size-[28rem] my-auto">
                </div>
            </section>
        </div>

    </div>

    </div>

    @vite(['resources/js/verificarLogin.js'])

</body>

</html>