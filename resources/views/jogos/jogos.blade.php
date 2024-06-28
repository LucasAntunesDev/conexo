@extends('layout')
@section('title', 'Jogos - Conexo')
@section('content')

<div class="flex flex-col">
    <div class="flex my-4 items-center w-6/12 mx-auto justify-between px-3">
        <div class="w-fit flex items-center gap-x-3">
            <a href="{{ route('index')}}" class="inline-block hover:bg-violet-200 rounded-full p-1">
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
        <div class="flex flex-col">
            <x-pesquisar-input></x-pesquisar-input>
        </div>

        @auth('web')
        <div class="flex gap-2">
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                class="btn-primary flex items-center justify-center font-semibold" type="button">
                Criar jogo
            </button>
        </div>


        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full appear">
            <div class="relative p-4 w-full max-w-md max-h-full">

                <div class="relative bg-violet-100 rounded-2xl shadow">

                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t-2xl">
                        <h3 class=" text-lg font-semibold ">
                            Criar jogo
                        </h3>
                        <button type="button"
                            class="text-violet-400 bg-transparent hover:text-violet-700 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
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
                                @foreach($disciplinas as $disciplina)
                                <option value='{{$disciplina->id}}'>{{$disciplina->nome}} </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit"
                            class="btn-primary flex items-center mt-4 justify-center self-baseline spin">
                            <span>Criar</span>
                            <div class="btn-loader hidden"></div>
                        </button>
                    </form>
                </div>
                @endif
            </div>
        </div>

</div>


<div class="grid grid-cols-4 grid-rows-4 gap-2 p-4 justify-items-center">
    @foreach ($jogos as $jogo)

    <div id="edit-modal{{$jogo->id}}" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full appear">
        <div class="relative p-4 w-full max-w-md max-h-full">

            <div class="relative bg-violet-100 rounded-2xl shadow">

                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t-2xl">
                    <h3 class=" text-lg font-semibold ">
                        Editar jogo
                    </h3>
                    <button type="button"
                        class="text-violet-400 bg-transparent hover:text-violet-700 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>

                <form action="{{ route('jogoupdate', ['id' =>$jogo->id]) }}" method="POST" class="p-4 md:p-5">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field()}}
                    <div class="flex flex-col gap-y-1">
                        <label for="nome" class="label capitalize">Nome</label>
                        <input type="text" id="nome" name="nome" value='{{$jogo->nome}}' class="input">
                    </div>

                    <button type="submit" class="btn-primary flex items-center mt-4 justify-center self-baseline spin">
                        <span>Salvar</span>
                        <div class="btn-loader hidden"></div>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="bg-violet-100 w-fit p-6 rounded-xl h-auto lista-item">

        <a href="{{ route('jogo', ['id' => $jogo->id]) }}"
            class="flex text-violet-900  font-semibold w-56 text-lg lista-titulo">{{ $jogo->nome
            }}</a>
        <span class="text-gray-500 font-medium text-sm">
            {{$jogo->data}}
        </span>

        @auth('web')
        <form method="POST" action="{{ route('jogodelete', ['id'=> $jogo->id]) }}" class="w-auto mx-auto pt-4">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field()}}
            <div class="flex gap-x-2 px-14 justify-between items-center">
                <x-edit-button link="{{ route('jogoform', ['id' => $jogo->id]) }}"></x-edit-button>
                <x-delete-button></x-delete-button>
            </div>
        </form>
        @endif

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