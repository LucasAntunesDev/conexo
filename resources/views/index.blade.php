<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Início - Conexo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="./favicon.ico" />
  </head>

  <body class="flex h-screen flex-col bg-zinc-50 text-gray-700">
    @include('includes.header')

    <main class="flex w-screen grow flex-col items-center justify-center">
      <div
        class="mt-10 inline-flex items-center justify-center gap-2 text-5xl font-bold">
        <x-conexo-logo></x-conexo-logo>
        <h1 class="uppercase">CONEXO</h1>
      </div>

      <p class="mx-auto my-4 w-64 text-center font-semibold">
        Forme 4 grupos de 4 palavras que tenham algo em comum
      </p>

      <section class="flex gap-2 p-4">
        <div class="btn-primary inline-flex items-center p-4">
          <a href="{{ route('jogos') }}" class="inline-flex gap-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
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
          <div class="btn-ghost inline-flex items-center p-4 text-violet-500">
            <a href="{{ route('disciplinas') }}" class="inline-flex gap-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="lucide lucide-graduation-cap">
                <path
                  d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z" />
                <path d="M22 10v6" />
                <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5" />
              </svg>
              Disciplinas
            </a>
          </div>

          <div class="btn-ghost inline-flex items-center p-4 text-violet-500">
            <a href="{{ route('grupos') }}" class="inline-flex gap-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
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

          <div class="btn-ghost inline-flex items-center p-4 text-violet-500">
            <a href="{{ route('palavras') }}" class="inline-flex gap-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
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
      </section>
    </main>
  </body>
</html>

@section('scripts')
@vite(['resources/js/app.js'])
