@extends('layout')
@section('title', 'Conexo')
@section('content')

<div class="flex flex-col justify-center items-center grow w-screen">

    <div class="w-screen">

        <div class="flex flex-col my-4 items-center w-6/12 mx-auto justify-between px-3">
            <div class="w-fit flex items-center gap-x-3">
                <a href="{{ route('jogos')}}" class="inline-block hover:bg-violet-200 rounded-full p-1" id="voltar">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <span class="capitalize font-bold text-4xl text-violet-500" id="nomeJogo"></span>
            </div>
            <div id="acertou"
                class="hidden flex flex-col mx-auto my-4 gap-4 w-fit p-4 rounded-lg bg-violet-100 shadow-md">
                <span class="font-bold mx-auto inline-flex">Parabéns!</span>
                <h2>Você conseguiu em <span id="acertouNumeroTentativas"></span> tentativas.</h2>

            </div>

            <div class="w-fit flex items-center gap-x-3">
                <time class="font-bold" id="dataJogo"></time>
                <span class="capitalize">tentativas: <span class="font-bold" id="numeroTentativas">0</span></span>
                <span class="capitalize invisible">acertos: <span class="font-bold" id="numeroAcertos">0</span></span>
            </div>

        </div>

        <div id="grupos" class="flex flex-col gap-x-1 mx-auto w-6/12"></div>

        <main id="tabuleiro" class="grid grid-cols-4 gap-2 w-11/12 md:w-9/12 lg:w-6/12 m-auto text-uppercase">
            <div id="skeleton" class="grid grid-cols-4 gap-2 m-auto text-uppercase w-[42.7rem] animate-pulse">
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
                <button type="button" class="conexo-btn">
                    <div class="h-2 w-11/12 bg-gray-500/50 rounded"></div>
                </button>
            </div>

        </main>

    </div>

</div>

</body>
@endsection