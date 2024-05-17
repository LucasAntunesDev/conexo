<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Conexo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="text-gray-700 flex flex-col h-screen bg-violet-600">

    <div class="w-screen h-screen">

        <div class="flex flex-row ">
            <div class="flex flex-col items-center gap-4 w-6/12 h-screen justify-center rounded-r-2xl bg-violet-100">

                <fieldset class="w-fit py-10 px-16">
                    <div class="flex flex-col gap-y-2 my-12">
                        <h2 class="my-2 text-violet-500 text-5xl font-bold w-fit">Entrar</h2>
                        <span class="font-semibold">Entre com seu login e senha</span>
                    </div>
                    <form action="{{ route('login')}} " class="flex flex-col items-center gap-4" method="POST">
                        @csrf

                        <div class="flex flex-col gap-2">
                            <label for="login" class="text-violet-500 font-bold">Login</label>
                            <input type="text" name="login" id="login"
                                class="border-b border-b-violet-500 pr-7 pl-10 py-1 outline-none bg-transparent focus:border-b-2 focus:border-b-violet-700">
                        </div>

                        <div class="flex flex-col gap-2">
                            <label for="senha" class="text-violet-500 font-bold">Senha</label>
                            <input type="password" name="senha" id="senha"
                                class="border-b border-b-violet-500 pr-7 pl-10 py-1 outline-none bg-transparent focus:border-b-2 focus:border-b-violet-700">
                        </div>

                        <button type="submit"
                            class="flex bg-violet-600 hover:bg-violet-700 text-violet-50 rounded-xl py-3 px-6 w-64 justify-center items-center gap-x-2 focus:outline-none focus:ring focus:ring-violet-400 font-semibold shadow-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5">
                                <path fill-rule="evenodd"
                                    d="M3 4.25A2.25 2.25 0 015.25 2h5.5A2.25 2.25 0 0113 4.25v2a.75.75 0 01-1.5 0v-2a.75.75 0 00-.75-.75h-5.5a.75.75 0 00-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 00.75-.75v-2a.75.75 0 011.5 0v2A2.25 2.25 0 0110.75 18h-5.5A2.25 2.25 0 013 15.75V4.25z"
                                    clip-rule="evenodd"></path>
                                <path fill-rule="evenodd"
                                    d="M6 10a.75.75 0 01.75-.75h9.546l-1.048-.943a.75.75 0 111.004-1.114l2.5 2.25a.75.75 0 010 1.114l-2.5 2.25a.75.75 0 11-1.004-1.114l1.048-.943H6.75A.75.75 0 016 10z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Entrar
                        </button>
                    </form>
                </fieldset>

                </form>

            </div>

            <div class="flex flex-col justify-center items-center gap-2 w-6/12 h-screen">

                <div class="bg-violet-600 h-[100%] w-[100%] flex justify-center items-center">
                    <div class="flex flex-col mx-auto gap-2 w-fit text-white">
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
</body>

</html>