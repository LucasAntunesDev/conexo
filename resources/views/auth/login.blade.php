<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Conexo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="flex h-lvh flex-col bg-zinc-50 text-gray-700">
    <main
      class="m-auto flex h-fit max-h-fit w-auto min-w-[40%] items-center justify-center gap-4 rounded-2xl bg-gradient-to-tr from-violet-500 to-indigo-700 px-12 py-4 md:h-5/6 md:py-0">
      <fieldset class="flex flex-col items-center justify-center rounded-3xl">
        <div class="my-12 flex flex-col gap-y-2">
          <h2 class="my-2 w-fit text-6xl font-bold text-violet-50">Entrar</h2>
          <p class="font-semibold text-violet-50">
            Entre com seu login e senha
          </p>
        </div>

        <form
          action="{{ route('login') }} "
          class="flex flex-col gap-4"
          method="POST">
          @csrf
          <div class="flex flex-col gap-y-1">
            <label for="login" class="label text-violet-50">Login</label>
            <input
              type="text"
              name="login"
              id="login"
              class="input text-violet-50 ring-violet-200" />
            @if ($errors->has('login'))
              <x-error-message
                class="mt-1 inline-flex max-w-48 gap-x-1 text-sm text-red-300">
                {{ $errors->first('login') }}
              </x-error-message>
            @endif
          </div>

          <div class="flex flex-col gap-y-1">
            <label for="senha" class="label text-violet-50">Senha</label>
            <input
              type="password"
              name="senha"
              id="senha"
              class="input text-violet-50 ring-violet-200" />
            @if ($errors->has('senha'))
              <x-error-message
                class="mt-1 inline-flex max-w-48 gap-x-1 text-sm text-red-300">
                {{ $errors->first('senha') }}
              </x-error-message>
            @endif
          </div>

          <button
            type="submit"
            class="btn-tertiary spin flex w-64 items-center justify-between bg-zinc-50 px-6 py-3 font-semibold"
            id="btn">
            Entrar
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-6 w-6"
              id="login-icon">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>

            <div class="btn-loader loader-white hidden"></div>
          </button>
        </form>
      </fieldset>

      <img src="login.svg" class="ml-28" />
    </main>

    @vite(['resources/js/verificarLogin.js'])
  </body>
</html>
