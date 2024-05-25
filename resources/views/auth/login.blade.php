<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Conexo</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body
    class="text-gray-700 dark:text-violet-50 flex flex-col h-screen bg-violet-100 dark:bg-gradient-to-tr dark:bg-neutral-900">

    <div class="w-screen md:h-screen">

        <div class="flex flex-row justify-center md:justify-stretch">
            <div class="flex flex-col items-center gap-4 w-auto md:w-6/12 h-screen justify-center rounded-r-2xl">

                <fieldset class="w-fit py-10 px-16 bg-violet-300 dark:bg-neutral-800 md:bg-transparent md:dark:bg-transparent rounded-2xl">
                    <div class="flex flex-col gap-y-2 my-12">
                        <h2 class="my-2 text-violet-500 dark:text-violet-50 text-5xl font-bold w-fit">Entrar</h2>
                        <span class="font-semibold">Entre com seu login e senha</span>
                    </div>
                    <form action="{{ route('login')}} " class="flex flex-col items-center gap-4" method="POST">
                        @csrf

                        <div class="relative z-0">
                            <label for="login"
                                class="label">
                                Login
                            </label>
                            <input type="text" name="login" id="login"
                                class="block py-2.5 px-0 w-full text-sm bg-transparent  border-b-2 border-neutral-700 appearance-none focus:outline-none focus:border-violet-700 focus:ring-0 peer pr-7 pl-10  rounded-lg border-2 outline-none autofill:bg-violet-100 focus:autofill:bg-violet-100 dark:bg-transparent dark:focus:border-violet-400 "
                                placeholder=" " />

                        </div>


                        <div class="relative z-0">
                            <label for="senha" class="label">Senha</label>
                            
                            <input type="password" name="senha" id="senha"
                                class="block py-2.5 px-0 w-full text-sm bg-transparent  border-b-2 border-violet-500 appearance-none focus:outline-none focus:border-violet-700 focus:ring-0 peer pr-7 pl-10  rounded-lg border-2 outline-none autofill:bg-violet-100 focus:autofill:bg-violet-100 dark:bg-transparent dark:focus:border-violet-400 dark:text-violet-100"
                                placeholder=" " />
                        </div>


                        <button type="submit"
                            class="btn-primary flex py-3 px-6 w-64 justify-between items-center font-semibold shadow-xl spin" id="btn">
                            <span>Entrar</span>
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

            <div class="hidden md:flex flex-col justify-center items-center gap-2 w-6/12 h-screen mx-auto">

                <div class="bg-violet-300 dark:bg-neutral-800 h-[97%] w-[97%] flex justify-center items-center rounded-2xl">
                    <div class="flex flex-col mx-auto gap-2 w-fit text-violet-700 dark:text-violet-50">
                        <svg viewBox="0 0 192 192" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="w-24 inline-flex m-auto fill-white">
                            <path
                                d="M2.25 15.9029C2.25 8.36262 8.36262 2.25 15.9029 2.25h276.097C183.637 2.25 189.75 8.36262 189.75 15.9029V37.2925C189.75 39.8059 187.712 41.8434 185.199 41.8434H6.80097C4.28754 41.8434 2.25 39.8059 2.25 37.2925V15.9029Z"
                                fill="#C2410C"></path>
                            <path
                                d="M2.25 55.9515C2.25 53.438 4.28754 51.4005 6.80097 51.4005h285.199C187.712 51.4005 189.75 53.438 189.75 55.9515V86.443C189.75 88.9564 187.712 90.9939 185.199 90.9939H6.80097C4.28754 90.9939 2.25 88.9564 2.25 86.443V55.9515Z"
                                fill="#047857"></path>
                            <path
                                d="M2.25 105.557C2.25 103.044 4.28754 101.006 6.80097 101.006h285.199C187.712 101.006 189.75 103.044 189.75 105.557V136.049C189.75 138.562 187.712 140.6 185.199 140.6H6.80097C4.28754 140.6 2.25 138.562 2.25 136.049V105.557Z"
                                fill="#0E7490"></path>
                            <path
                                d="M2.25 154.708C2.25 152.194 4.28754 150.157 6.80097 150.157h285.199C187.712 150.157 189.75 152.194 189.75 154.708V176.097C189.75 183.637 183.637 189.75 176.097 189.75h25.9029C8.36262 189.75 2.25 183.637 2.25 176.097V154.708Z"
                                fill="#6D28D9"></path>
                        </svg>
                        <span class="text-6xl font-bold">CONEXO</span>
                        <p class="font-semibold my-4 w-64 text-center mx-auto">Forme 4 grupos de 4 palavras que tenham
                            algo
                            em
                            comum</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

    @vite(['resources/js/verificarLogin.js'])

</body>

</html>