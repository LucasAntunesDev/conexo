@extends('layout')
@section('content')

<h1 class="text-blue-500 text-5xl font-bold inline-flex gap-x-2 mt-auto">
    <svg width="50" height="50" viewBox="0 0 192 192" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2.25 15.9029C2.25 8.36262 8.36262 2.25 15.9029 2.25H176.097C183.637 2.25 189.75 8.36262 189.75 15.9029V37.2925C189.75 39.8059 187.712 41.8434 185.199 41.8434H6.80097C4.28754 41.8434 2.25 39.8059 2.25 37.2925V15.9029Z" fill="#C2410C"></path>
        <path d="M2.25 55.9515C2.25 53.438 4.28754 51.4005 6.80097 51.4005H185.199C187.712 51.4005 189.75 53.438 189.75 55.9515V86.443C189.75 88.9564 187.712 90.9939 185.199 90.9939H6.80097C4.28754 90.9939 2.25 88.9564 2.25 86.443V55.9515Z" fill="#047857"></path>
        <path d="M2.25 105.557C2.25 103.044 4.28754 101.006 6.80097 101.006H185.199C187.712 101.006 189.75 103.044 189.75 105.557V136.049C189.75 138.562 187.712 140.6 185.199 140.6H6.80097C4.28754 140.6 2.25 138.562 2.25 136.049V105.557Z" fill="#0E7490"></path>
        <path d="M2.25 154.708C2.25 152.194 4.28754 150.157 6.80097 150.157H185.199C187.712 150.157 189.75 152.194 189.75 154.708V176.097C189.75 183.637 183.637 189.75 176.097 189.75H15.9029C8.36262 189.75 2.25 183.637 2.25 176.097V154.708Z" fill="#6D28D9"></path>
    </svg>
    CONEXO
</h1>

<div id="acertou" class="hidden">
    <span class="font-bold mx-auto inline-flex">Parabéns!</span>
    <p>
        Você conseguiu em <span id="acertouNumeroTentativas"></span> tentativas.
    </p>

    <span class="bg-sky-500 font-semibold rounded-lg p-3 w-fit inline-flex gap-x-2
            hover:bg-sky-600 hover:cursor-pointer mx-auto">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-zinc-50 size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
        </svg>
        Compartilhe
    </span>
</div>

<div class="mx-auto">
    <span class="font-semibold" id="dataAtual"></span>
    <span class="capitalize">acertos: <span class="font-bold" id="numeroAcertos">0</span></span>
    <span class="capitalize">tentativas: <span class="font-bold" id="numeroTentativas">0</span></span>
</div>
<span id="grupos" class="flex flex-col gap-y-1"></span>


<main id="tabuleiro" class="grid grid-cols-4 gap-2 min-w-6/12 m-auto text-uppercase">
    {{-- <pre>
        {{ var_dump($resultados) }}
    </pre> --}}
        @foreach ($resultados as $indice =>$palavra)
        <button type="button" class="bg-slate-800 p-6 rounded-md flex items-center hover:cursor-pointer focus:scale-90 transition duration-300 ease-in-out uppercase">
            {{ $palavra->nome }}
        </button>  
    @endforeach

</main>

</body>
@endsection

@section('scripts')
<!-- @vite(['resources/js/app.js']) -->
@endsection