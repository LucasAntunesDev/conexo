@extends('layout')
@section('title', 'Palavra - Conexo')
@section('content')

<div class="flex flex-col justify-center items-center gap-2 pt-4 grow">

    <h1 class="font-bold text-4xl text-violet-500 mb-4 capitalize">
        Gerenciar palavra
    </h1>

    @if($errors->any())
    <div class="flex justify-center items-center">
        <div>
            <div
                class="rounded-lg border p-4 [&>svg~*]:pl-7 [&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-4 border-red-500/50 text-red-500 dark:border-red-500 [&>svg]:text-red-500 w-full">
                <ul>
                    <div class="inline-flex gap-x-2 items-center font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                        </svg>

                        Erro
                    </div>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li class="inline-flex items-center gap-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="w-4 h-4">
                                <path
                                    d="M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94 5.28 4.22Z" />
                            </svg>
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
            </div>
        </div>
    </div>
    @endif

    <main class="flex justify-stretch items-stretch gap-2 grow px-10 py-4">

        <section
            class="flex flex-col items-center w-3/5 min-h-[95%] h-fit rounded-xl bg-violet-100 dark:bg-neutral-800">

            <h2 class="p-4 text-2xl font-bold tracking-tight text-violet-500">Editar palavra</h2>

            @if($palavra->id)
            <form action="{{ route('palavraupdate' , ['id' =>$palavra->id]) }}" method="POST" class="w-auto">
                <input type="hidden" name="_method" value="PUT">
                @endif
                {{ csrf_field()}}

                <fieldset class="flex flex-col items-stretch gap-4 p-6 pt-1">
                    <input type="hidden" name="id" value='{{ $palavra->id }}'>

                    <div class="space-y-2">
                        <label for="nome" class="label">Palavra</label>
                        <input type="text" id="nome" name="nome" value='{{ $palavra->nome }}' class="input">
                    </div>

                </fieldset>

                <div class="flex items-center gap-x-2 justify-center">
                    <a href="{{ route('palavras') }}"
                        class="btn-link flex items-center mt-4 justify-center self-baseline">
                        Cancelar
                    </a>

                    <button type="submit" class="btn-primary flex items-center mt-4 justify-center self-baseline spin">
                        <span>Salvar</span>
                        <svg id="spinner" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="animate-spin hidden">
                            <path d="M21 12a9 9 0 1 1-6.219-8.56" />
                        </svg>
                    </button>
                </div>
            </form>
        </section>

        @if($palavra->id)
        <section
            class="flex flex-col gap-4 rounded-xl bg-violet-100 dark:bg-neutral-800 p-6 min-h-[95%] h-fit flex-auto">
            <div class="flex flex-col mx-auto gap-y-4">
                <div>
                    <h3 class="text-2xl font-bold tracking-tight text-violet-500">Grupos</h3>
                    <p>Grupos que contém a palavra <strong class="font-bold">{{$palavra->nome}}</strong></p>
                </div>

                <input type="hidden" name="_method" value="PUT">
                <div class="flex items-stretch justify-stretch flex-col w-fit gap-y-2 h-fit">
                    @foreach($grupos_palavras as $grupo_palavra)
                    <div
                        class="inline-flex justify-between items-center w-auto grow transicao hover:bg-violet-300 dark:hover:bg-neutral-500 bg-violet-200 dark:bg-neutral-700 rounded-2xl px-4 py-2 ml-0 gap-x-2">

                        <h4>{{ App\Models\Grupo::find($grupo_palavra->grupo_id)->nome }}</h4>

                        <div class="inline-flex gap-x-2 mr-0">
                            <x-edit-button link="{{ route('grupopalavraform', ['id' => $grupo_palavra->id]) }}">
                            </x-edit-button>
                            <x-delete-button></x-delete-button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </section>
        @endif

    </main>

</div>

@endsection
@vite(['resources/js/eventos.js'])
@vite(['resources/js/script.js'])