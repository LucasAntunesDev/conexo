@extends('layout')
@section('title', 'Jogos - Conexo')
@section('content')

<div class="flex flex-col">
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


        </div>

        <h2 class="font-bold mx-auto text-2xl">CONEXO</p>
    </div>

    <main class="flex flex-col gap-2 w-screen justify-center items-center grow">
        <h3 class="mx-auto font-semibold text-xl">Todos os jogos</h3>

        <form action="#">
            <select name="dia" id="dia" class="btn-secundary border-none">
                @for($i = 1; $i <= 31; $i++){ <option value={{$i}}>{{$i}}</option>
                    }
                    @endfor
            </select>
            <select name="mes" id="mes" class="btn-secundary border-none">
                @php
                $meses = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro",
                "outubro", "novembro", "dezembro"];
                @endphp

                @foreach($meses as $mes)
                { <option value={{$mes}}>{{$mes}}</option>
                }
                @endforeach

            </select>
        </form>
        {{-- <span
            class="inline-flex gap-x-4 items-center bg-violet-600 hover:bg-violet-700 text-violet-50 rounded-xl py-3 px-6 hover:cursor-pointer text-semibold"
            id="buscarDisciplina">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </span> --}}
</div>


<nav class="bg-violet-100  px-4 py-8 rounded-lg items-center gap-4 hidden w-4/5 mx-auto my-4" id="menu-disciplinas">
    <div class="flex gap-x-4 items-center w-8/12 flex-wrap mx-auto">
        @for($i = 0; $i< (count($disciplinas)); $i++) <div value="{{$disciplinas[$i]->id}}" class="flex flex-col gap-4">
            <a href="{{ route('jogos', ['disciplinaId' => $disciplinas[$i]->id]) }}"
                class="bg-violet-500 rounded-lg p-3 text-violet-100"> {{$disciplinas[$i]->nome}}</a>
            <br>
    </div>
    @endfor
    </div>
</nav>

<div class="mx-auto px-4 w-6/12 my-4 grow">
    <div class="grid grid-cols-4 gap-4 w-auto justify-items-center mb-4">
        @foreach ($datas as $data)
        <a href="{{ route('diario', ['dataJogo' => $data->data]) }}" target="_blank"
            class="text-center bg-violet-200 hover:bg-violet-400 dark:bg-neutral-800 dark:hover:bg-neutral-700 text-violet-800 dark:text-violet-50 py-5 px-3 rounded-xl w-fit transicao">
            {{ \Carbon\Carbon::parse($data->data)->format('d/m/Y') }}
        </a>
        @if ($loop->iteration % 4 == 0 && !$loop->last)
    </div>
    <div class="grid grid-cols-4 gap-4 w-auto justify-items-center mb-4">
        @endif
        @endforeach
    </div>
</div>

<div class="mt-4">
    {{ $datas->links('includes.pagination') }}
</div>


</main>
</div>

@section('scripts')
@vite(['resources/js/app.js'])