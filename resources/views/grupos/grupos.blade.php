@extends('layout')
@section('title', 'Grupos - Conexo')
@section('content')

<div class="flex flex-col justify-center items-center gap-2 mb-8">
    <div class="flex justify-around items-center gap-8">

        <h1 class="text-violet-500 text-5xl font-bold inline-flex gap-x-2 my-8 items-center">
            Grupos
        </h1>

        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
            class="btn-primary flex items-center justify-center font-semibold" type="button">
            Adicionar grupo
        </button>

        <div class="flex flex-col">
            <x-pesquisar-input></x-pesquisar-input>
        </div>

        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full appear">
            <div class="relative p-4 w-full max-w-md max-h-full">

                <div class="relative bg-violet-100 rounded-2xl shadow">

                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t-2xl">
                        <h3 class=" text-lg font-semibold">
                            Adicionar grupo
                        </h3>
                        <button type="button"
                            class="text-violet-400 bg-transparent hover:text-violet-700 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>

                    <form action="{{ route('grupoinsert') }}" method="POST" class="p-4 md:p-5">
                        {{ csrf_field()}}
                        <div class="flex flex-col gap-y-1">
                            <label for="nome" class="label capitalize">Nome</label>
                            <input type="text" id="nome" name="nome" value='' class="input">
                        </div>
                        <div class="flex flex-col gap-y-1">
                            <label for="disciplina_id" class="label capitalize">Disciplina</label>
                            <select id="disciplina_id" name="disciplina_id" class="input">
                                @foreach($disciplinas as $disciplina)
                                <option value='{{$disciplina->id}}' {{$disciplina->id == $grupo->disciplina_id ?
                                    "selected" :
                                    ""}}>{{$disciplina->nome}} </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit"
                            class="btn-primary flex items-center mt-4 justify-center self-baseline spin">
                            <span>Salvar</span>
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

    </div>

    <div class="grid grid-cols-4 grid-rows-4 gap-4">

        @foreach($grupos as $grupo)

        <div class="bg-violet-100 w-fit p-6 rounded-xl h-auto lista-item">
            {{-- <div class="inline-flex flex-col gap-3 lista-item"> --}}
                <a class="flex text-violet-900  font-semibold w-56 text-lg lista-titulo">{{
                    $grupo->nome }}</a>
                {{-- @foreach ($grupo->disciplinas as $disciplina)
                <a class='text-current hover:text-emerald-600 hover:cursor-pointer 
                    transition duration-300 ease-in-out mb-4 self-start'>
                    <span class="rounded-2xl bg-violet-200 p-1 size-fit">{{$disciplina->nome}}</span>
                </a>
                @endforeach --}}
                {{-- <span class="text-gray-500 font-medium text-sm"> --}}
                    {{-- {{ App\Models\Disciplina::find($grupo->disciplina_id)->nome}} --}}
                    {{-- </span> --}}
                {{--
            </div> --}}

            <form method="POST" action="{{ route('grupodelete', ['id'=> $grupo->id]) }}" class="w-auto mx-auto pt-4">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field()}}
                <div class="flex gap-x-2 px-14 justify-between items-center">
                    <x-edit-button link="{{ route('grupoform', ['id' => $grupo->id]) }}"></x-edit-button>
                    <x-delete-button></x-delete-button>
                </div>
            </form>

        </div>

        @endforeach

    </div>

    {{ $grupos->links('includes.pagination') }}
</div>

@endsection

@section('scripts')
@vite(['resources/js/app.js'])