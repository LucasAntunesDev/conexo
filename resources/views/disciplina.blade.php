@extends('layout')
@section('content')

    <div class="flex flex-col justify-center items-start gap-2 pt-4 h-screen">

        <h1 class="font-bold text-4xl text-violet-500 mb-4 capitalize mx-auto">
            Gerenciar disciplina
        </h1>

        @if($errors->any())
        <div class="flex justify-center items-center">
            <div>
                <div class="bg-red-50 text-red-700 px-20 py-1 rounded-md mt-4">
                    <ul>
                        <div class="inline-flex gap-x-2 items-center font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z" clip-rule="evenodd" />
                            </svg>
                            Foram encontrados os seguintes erros:
                        </div>
                        @foreach($errors->all() as $error)
                        <li class="list-disc">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endif

        @if($disciplina->id)
        <form action="{{ route('disciplinaupdate', ['id' =>$disciplina->id]) }}" method="POST" class="mx-auto">
            <input type="hidden" name="_method" value="PUT">
            @else
            <form action="{{ route('disciplinainsert') }}" method="POST">
                @endif
                {{ csrf_field()}}

                <fieldset class="flex flex-col items-center p-10 w-[40rem]">
                    <input type="hidden" name="id" value='{{ $disciplina->id }}'>

                    <div class="flex flex-col gap-y-1">
                        <label for="nome" class="label">Nome</label>
                        <input type="text" id="nome" name="nome" value='{{ $disciplina->nome }}' class="rounded-md 
                    border-none py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                    focus:ring-2 focus:ring-inset focus:ring-violet-400 outline-none bg-violet-100">
                    </div>

                    <div class="flex flex-col gap-y-1">

                        <label for="professor_id" class="label">Professor</label>
                        <select id="professor_id" name="professor_id" value="professor_id" class="rounded-md border-none py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300 focus:ring-2 focus:ring-inset focus:ring-violet-400 outline-none bg-violet-100">
                            @foreach($professores as $professor)
                                <option value='{{$professor->id}}' {{$professor->id == $disciplina->professor_id ? "selected" : ""}}>{{$professor->nome}} </option>
                            @endforeach
                        </select>
                    </div>

                </fieldset>

                <div class="flex items-center gap-x-2 justify-center">
                    <a href="{{ route('disciplinas') }}" class="hover:text-violet-500 rounded-lg py-2 px-4 flex items-center mt-4 gap-x-2 justify-center transition duration-300 ease-in-out self-baseline">
                        Cancelar
                    </a>

                    <button type="submit" class="bg-violet-500 rounded-lg py-2 px-4 text-zinc-50 flex items-center mt-4 gap-x-2 justify-center transition duration-300 ease-in-out hover:bg-violet-700 self-baseline">
                        Salvar
                    </button>
                </div>

            </form>

@section('scripts')
@vite(['resources/js/app.js'])