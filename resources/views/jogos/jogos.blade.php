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
        <div class="flex gap-2">
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                class="btn-primary flex items-center justify-center font-semibold" type="button">
                Criar jogo
            </button>
        </div>

        <div class="flex flex-col">
            @include('includes.pesquisar')
        </div>

        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">

                <div class="relative bg-violet-100 dark:bg-neutral-900 rounded-2xl shadow">

                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t-2xl">
                        <h3 class=" text-lg font-semibold ">
                            Criar jogo
                        </h3>
                        <button type="button"
                            class="text-violet-400 bg-transparent hover:bg-violet-100 hover:text-violet-700 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                            data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>

                    <form action="{{ route('jogoinsert') }}" method="POST" class="p-4 md:p-5">
                        {{ csrf_field()}}
                        <div class="flex flex-col gap-y-1">
                            <label for="nome" class="label capitalize">Nome</label>
                            <input type="text" id="nome" name="nome" value='' class="input">
                        </div>

                        <div class="flex flex-col gap-y-1">
                            <label for="disciplina_id" class="label capitalize">Disciplina</label>
                            <select id="disciplina_id" name="disciplina_id" class="input">
                                {{-- @php
                                $disciplinas = App\Models\Disciplinas::all();
                                @endphp--}}
                                @foreach($disciplinas as $disciplina)
                                <option value='{{$disciplina->id}}'>{{$disciplina->nome}} </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit"
                            class="btn-primary flex items-center mt-4 justify-center self-baseline spin">
                            <span>Criar</span>
                            <svg id="spinner" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="animate-spin hidden">
                                <path d="M21 12a9 9 0 1 1-6.219-8.56" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>

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

<div class="grid grid-cols-4 grid-rows-4 gap-2 p-4 justify-items-center">
    @foreach ($jogos as $jogo)
    <div class="bg-violet-100 dark:bg-neutral-800 w-fit p-6 rounded-xl h-auto lista-item">

        {{-- <div class="flex flex-col gap-3"> --}}
            <a href="{{ route('jogo', ['id' => $jogo->id]) }}"
                class="flex text-violet-900 dark:text-violet-300 font-semibold w-56 text-lg lista-titulo">{{ $jogo->nome
                }}</a>
            <span class="text-gray-500 dark:text-neutral-300 font-medium text-sm">
                {{$jogo->data}}
            </span>
            {{--
        </div> --}}

        <form method="POST" action="{{ route('jogodelete', ['id'=> $jogo->id]) }}" class="w-auto mx-auto pt-4">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field()}}
            <div class="flex gap-x-2 px-14 justify-between items-center">
                <a href="{{ route('jogoform', ['id' => $jogo->id]) }}"
                    class='text-current hover:text-emerald-600 hover:cursor-pointer transition duration-300 ease-in-out'>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                    </svg>

                </a>

                @include('includes.delete_btn')
            </div>
        </form>

    </div>

    @endforeach

</div>

{{ $jogos->links('includes.pagination') }}
</div>



</main>
</div>
@endsection

@section('scripts')
@vite(['resources/js/app.js'])