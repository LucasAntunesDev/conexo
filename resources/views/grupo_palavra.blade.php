@extends('layout')
@section('content')

<div class="flex flex-col justify-center items-center gap-2 pt-4 grow">

    <h1 class="font-bold text-4xl text-violet-500 mb-4 capitalize">
        Gerenciar relação entre palavras e grupos
    </h1>

    @if($errors->any())
    <div class="flex justify-center items-center">
        <div>
            <div class="bg-red-50 text-red-700 px-20 py-1 rounded-md mt-4">
                <ul>
                    <div class="inline-flex gap-x-2 items-center font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
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

    @if($grupo_palavra->id)
    <form action="{{ route('grupopalavraupdate', ['id' =>$grupo_palavra->id]) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        @else
        <form action="{{ route('grupopalavrainsert') }}" method="POST">
            @endif
            {{ csrf_field()}}

            <fieldset class="flex flex-col p-10 w-[40rem] gap-4">
                <input type="hidden" name="id" value='{{ $grupo_palavra->id }}'>

                <div class="flex flex-col gap-y-1">
                    <label for="palavra_id" class="font-semibold text-violet-500 capitalize">Palavra</label>
                    @if($grupo_palavra->palavra_id)
                    <input type="hidden" id="palavra_id" name="palavra_id" value='{{$grupo_palavra->palavra_id}}'>
                    <div
                        class="rounded-md border-none py-3 px-8 outline-none focus:ring focus:ring-violet-500 bg-violet-100">
                        {{App\Models\Palavra::find($grupo_palavra->palavra_id)->nome }}
                    </div>
                    @else
                    <select id="palavra_id" name="palavra_id"
                        class="text-neutral-700 rounded-md border-none py-3 px-8 outline-none focus:ring focus:ring-violet-500 bg-violet-100">
                        @foreach($palavras as $palavra)
                        <option value='{{$palavra->id}}' {{$palavra->id == $grupo_palavra->palavra_id ? "selected" :
                            ""}}>{{$palavra->nome}} </option>
                        @endforeach
                    </select>
                    @endif
                </div>

                <div class="flex flex-col gap-y-1">
                    <label for="grupo_id" class="font-semibold text-violet-500 capitalize">grupo</label>
                    <select id="grupo_id" name="grupo_id"
                        class="text-neutral-700 rounded-md border-none py-3 px-8 outline-none focus:ring focus:ring-violet-500 bg-violet-100">
                        @foreach($grupos as $grupo)
                        <option value='{{$grupo->id}}' {{$grupo->id == $grupo_palavra->grupo_id ? "selected" :
                            ""}}>{{$grupo->nome}} </option>
                        @endforeach
                    </select>
                </div>

            </fieldset>

            <div class="flex items-center gap-x-2 justify-center">
                @if($grupo_palavra->palavra_id)
                <a href="{{ route('palavraform', ['id'=> App\Models\Palavra::find($grupo_palavra->palavra_id)->id]) }}"class="hover:text-violet-500 rounded-lg py-2 px-4 flex items-center mt-4 gap-x-2 justify-center transition duration-300 ease-in-out self-baseline">
                    Cancelar
                </a>
                @else
                <a href="{{ route('palavras') }}"class="hover:text-violet-500 rounded-lg py-2 px-4 flex items-center mt-4 gap-x-2 justify-center transition duration-300 ease-in-out self-baseline">
                    Cancelar
                </a>
                @endif

                <button type="submit"
                    class="bg-violet-500 rounded-lg py-2 px-4 text-zinc-50 flex items-center mt-4 gap-x-2 justify-center transition duration-300 ease-in-out hover:bg-violet-700 self-baseline focus:outline-none focus:ring focus:ring-violet-400">
                    Salvar
                </button>
            </div>

        </form>
</div>
@endsection

@section('scripts')
@vite(['resources/js/app.js'])