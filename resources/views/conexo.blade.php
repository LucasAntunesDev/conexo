@extends('layout')
@section('title', 'Conexo')
@section('content')

<div class="flex flex-col justify-center items-center h-screen w-screen">

<div class="w-screen grow">

    <div class="flex my-4 items-center w-6/12 mx-auto justify-between px-3">
        <div class="w-fit flex items-center gap-x-3">
            <a href="{{ route('inicio')}}" class="inline-block hover:bg-violet-200 rounded-full p-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                        d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <span class="font-bold" id="dataAtual"></span>
            <span class="capitalize">tentativas: <span class="font-bold" id="numeroTentativas">0</span></span>
            <span class="capitalize invisible">acertos: <span class="font-bold" id="numeroAcertos">0</span></span>
        </div>

    </div>
    
    <div id="acertou" class="hidden">
        <span class="font-bold mx-auto inline-flex">Parabéns!</span>
        <p>
            Você conseguiu em <span id="acertouNumeroTentativas"></span> tentativas.
        </p>

        <span class="bg-violet-500 font-semibold rounded-lg p-3 w-fit inline-flex gap-x-2
                hover:bg-violet-600 hover:cursor-pointer mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="stroke-zinc-50 size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
            </svg>
            Compartilhe
        </span>
    </div>

    <div id="grupos" class="flex flex-col gap-x-1 mx-auto w-6/12"></div>

    <main id="tabuleiro" class="grid grid-cols-4 gap-2 min-w-6/12 w-6/12 m-auto text-uppercase">

        @for ($i = 0; $i < 16; $i++) <button type="button"
            class="bg-violet-100 p-5 rounded-md flex items-center hover:cursor-pointer focus:scale-90 transition duration-300 ease-in-out uppercase hidden"
            onClick="verficarJogo(this)">
            </button>
            @endfor

    </main>

</div>

</div>

</body>
@endsection

{{-- @section('scripts') --}}
{{-- @vite(['resources/js/app.js']) --}}
@vite(['resources/js/eventos.js'])
@vite(['resources/js/script.js'])