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

    @if($palavra->id)


    <div class="rounded-lg overflow-hidden mb-6">

        <table class="table-auto text-gray-700 font-medium">

            <div class="flex items-center justify-center gap-4 my-4">
                <span class="font-bold text-2xl text-violet-500 mb-4 capitalize mx-auto">Grupos em que está:</span>
                <a href="{{ route('grupopalavranovo') }}"
                    class="bg-violet-500 hover:bg-violet-700 rounded-lg py-2 px-5 focus:outline-none focus:ring focus:ring-violet-300 text-zinc-50 inline-flex items-center gap-x-2 justify-center transition duration-300 ease-in-out font-semibold">
                    Adicionar novo grupo
                </a>
            </div>

            <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 text-violet-500 bg-violet-100">
                <tr class="table-row">
                    <th class="w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col">Grupo</th>
                    <th class=" w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col">Ações</th>
                </tr>
            </thead>

            <tbody class="text-sm bg-gray-50/40">
                @foreach($grupos_palavras as $grupo_palavra)
                <tr class="border-b border-violet-100 bg-violet-50/60 even:bg-violet-50">
                    <td class="pl-2 pr-1 w-fit capitalize">
                        {{ App\Models\Grupo::find($grupo_palavra->grupo_id)->nome }}
                    </td>
                    <td class="flex pl-2 pr-1 w-fit py-5 flex-nowrap gap-x-2" scope="col">
                        <form method="POST" action="{{ route('grupopalavradelete', ['id'=> $grupo_palavra->id]) }}">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field()}}
                            <div class="flex gap-x-2 items-center">
                                <a href="{{ route('grupopalavraform', ['id' => $grupo_palavra->id]) }}"
                                    class='text-current hover:text-emerald-600 hover:cursor-pointer transition duration-300 ease-in-out'>

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                    </svg>
                                </a>

                                <button type="submit"
                                    class='text-current hover:text-red-600 hover:cursor-pointer transition duration-300 ease-in-out'>

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- {{ $grupos_palavras->links('includes.pagination') }} --}}

    <input type="hidden" name="_method" value="PUT">
    @else
    <form action="{{ route('palavrainsert') }}" method="POST">
        @endif
        {{ csrf_field()}}

        <fieldset class="flex flex-col  p-10 w-[40rem] gap-4">
            <input type="hidden" name="id" value='{{ $palavra->id }}'>

            <div class="flex flex-col gap-y-1">
                <label for="nome" class="font-semibold text-violet-500 capitalize">Nome</label>
                <input type="text" id="nome" name="nome" value='{{ $palavra->nome }}'
                    class="rounded-md border-none py-3 px-8 outline-none focus:ring focus:ring-violet-500 bg-violet-100">
            </div>

        </fieldset>

        <div class="flex items-center gap-x-2 justify-center">
            <a href="{{ route('palavras') }}"
                class="hover:text-violet-500 rounded-lg py-2 px-4 flex items-center mt-4 gap-x-2 justify-center transition duration-300 ease-in-out self-baseline">
                Cancelar
            </a>

            <button type="submit"
                class="btn-primary flex items-center mt-4 justify-center hover:bg-violet-700 self-baseline spin">
                <span>Salvar</span>
                <svg id="spinner" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="animate-spin hidden">
                    <path d="M21 12a9 9 0 1 1-6.219-8.56" />
                </svg>
            </button>
        </div>

    </form>

</div>
@endsection
{{-- @section('scripts') --}}
@vite(['resources/js/eventos.js'])
@vite(['resources/js/script.js'])