@extends('layout')
@section('title', 'Grupos de Disciplinas - Conexo')
@section('content')

<div class="flex flex-col justify-center items-center gap-2 pt-4 grow">

    <h1 class="font-bold text-4xl text-violet-500 mb-4 capitalize">
        Gerenciar relação entre disciplinas e grupos
    </h1>

    @if($errors->any())
    <div class="flex justify-center items-center">
        <div>
            <div class="bg-red-50 text-red-700 px-20 py-1 rounded-xl mt-4">
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

    @if($grupo_disciplina->id)
    <form action="{{ route('grupodisciplinaupdate', ['id' =>$grupo_disciplina->id]) }}" method="POST">
        {{ csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        @else
        <form action="{{ route('grupodisciplinainsert') }}" method="POST">
            @endif
            {{ csrf_field()}}

            <fieldset class="flex flex-col p-10 w-[40rem] gap-4 bg-violet-100 rounded-2xl">
                <div class="flex flex-col gap-y-1">
                    <label for="grupo_id" class="label capitalize">grupo</label>
                    <select id="grupo_id" name="grupo_id" class="text-gray-700 input">
                        @foreach($grupos as $grupo)
                        <option value='{{$grupo->id}}' {{$grupo->id == $grupo_disciplina->grupo_id ? "selected" :
                            ""}}>{{$grupo->nome}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="flex flex-col gap-y-1">
                    <label for="disciplina_id" class="label capitalize">Disciplina</label>
                    @if($grupo_disciplina->disciplina_id)
                    <input type="hidden" id="disciplina_id" name="disciplina_id"
                        value='{{$grupo_disciplina->disciplina_id}}'>
                    <div class="input">
                        {{App\Models\Disciplina::find($grupo_disciplina->disciplina_id)->nome }}
                    </div>
                    @else
                    <select id="disciplina_id" name="disciplina_id" class="text-gray-700 input">
                        @foreach($disciplinas as $disciplina)
                        <option value='{{$disciplina->id}}' {{$disciplina->id == $_GET['id'] ? "selected"
                            :""}}>{{$disciplina->nome}} </option>
                        @endforeach
                    </select>
                    @endif
                </div>


                <div class="flex items-center gap-x-2 justify-center">
                    @if($grupo_disciplina->disciplina_id)
                    <a href="{{ route('disciplinaform', ['id'=> App\Models\Disciplina::find($grupo_disciplina->disciplina_id)->id]) }}"
                        class="btn-link flex items-center mt-4 justify-center self-baseline">
                        Cancelar
                    </a>
                    @else
                    <a href="{{ route('disciplinas') }}"
                        class="btn-link flex items-center mt-4 justify-center self-baseline">
                        Cancelar
                    </a>
                    @endif

                    <button type="submit" class="btn-primary flex items-center mt-4 justify-center self-baseline spin">
                        <span>Salvar</span>
                        <div class="btn-loader hidden"></div>
                    </button>
                </div>
            </fieldset>

        </form>
</div>
@endsection

@section('scripts')
@vite(['resources/js/app.js'])