@extends('layout')
@section('content')

<div class="flex w-screen">
    <main class="flex flex-col justify-center items-center gap-2 grow">

        <h1 class="text-violet-500 text-5xl font-bold inline-flex gap-x-2 mt-4 items-center capitalize">
            {{$professor->nome}}
        </h1>

        @if($errors->any())
        <div class="flex justify-center items-center">
            <div>
                <div class="bg-red-50 text-red-700 px-20 py-1 rounded-lg mt-4">
                    <ul>
                        <div class="inline-flex gap-x-2 items-center font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="size-5">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z"
                                    clip-rule="evenodd" />
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

        @if($professor->id)
        <form action="{{ route('professorupdate', ['id' =>$professor->id]) }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            @else
            <form action="{{ route('professorinsert') }}" method="POST">
                @endif
                {{ csrf_field()}}

                <fieldset class="flex flex-col items-center gap-4 rounded-xl bg-violet-100 p-6">
                    <div class="inline-flex gap-4 justify-between items-center w-full px-4">
                        <label class="font-bold text-violet-500">Id</label>
                        <span
                            class="bg-violet-500 text-violet-50 size-6 rounded-md flex justify-center select-none hover:bg-violet-700">{{$professor->id}}</span>
                        <input type="hidden" name="id" value='{{ $professor->id }}'>
                    </div>

                    <div class="inline-flex gap-4 justify-between items-center w-full px-4">
                        <label for="nome" class="font-bold text-violet-500">Nome</label>
                        <input type="text" id="nome" name="nome" value='{{ $professor->nome }}' class="rounded-lg 
                    border-none py-2 pr-7 pl-10 
                    focus:ring-2 focus:ring-inset focus:ring-violet-400 outline-none bg-white">
                    </div>

                    <div class="inline-flex gap-4 justify-between items-center w-full px-4">
                        <label for="login" class="font-bold text-violet-500">Login</label>
                        <input type="text" id="login" name="login" value='{{ $professor->login }}' class="rounded-lg 
                    border-none py-2 pr-7 pl-10 
                    focus:ring-2 focus:ring-inset focus:ring-violet-400 outline-none bg-white">
                    </div>

                    <div class="inline-flex gap-4 justify-between items-center w-full px-4">
                        <label for="senha" class="font-bold text-violet-500">Senha</label>
                        <input type="password" id="senha" name="senha" value='{{ $professor->senha }}' class="rounded-lg 
                    border-none py-2 pr-7 pl-10 
                    focus:ring-2 focus:ring-inset focus:ring-violet-400 outline-none bg-white">
                    </div>

                </fieldset>

                <div class="flex items-center gap-x-2 justify-center">
                    <a href="{{ route('inicio') }}"
                        class="hover:text-violet-500 rounded-lg py-2 px-4 flex items-center mt-4 gap-x-2 justify-center transition duration-300 ease-in-out self-baseline">
                        Cancelar
                    </a>

                    <button type="submit"
                        class="bg-violet-500 rounded-lg py-2 px-4 text-zinc-50 flex items-center mt-4 gap-x-2 justify-center transition duration-300 ease-in-out hover:bg-violet-700 self-baseline focus:outline-none focus:ring focus:ring-violet-400">
                        Salvar
                    </button>
                </div>

            </form>
    </main>
</div>

@section('scripts')
@vite(['resources/js/app.js'])