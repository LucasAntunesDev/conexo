@extends('layout')
@section('title', 'Professor - Conexo')
@section('content')

<div class="flex w-screen h-screen">
    @if($errors->any())
    <div class="flex justify-center items-center">
        <div>
            <div class="bg-red-50 text-red-700 px-20 py-1 rounded-lg mt-4">
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

    <main class="flex justify-stretch items-stretch gap-2 grow px-10 py-4">

        <div class="flex flex-col items-center w-3/5 min-h-[95%] h-fit rounded-xl bg-violet-100 ">

            <div class="space-y-0.5 w-auto rounded-xl bg-violet-100 p-6">
                <h2 class="text-2xl font-bold tracking-tight text-violet-500">Configurções de usuário</h2>
                <p>Altere as configurações de sua conta.</p>
            </div>


            @if($professor->id)
            <form action="{{ route('professorupdate', ['id' =>$professor->id]) }}" method="POST" class="w-auto">
                <input type="hidden" name="_method" value="PUT">
                @else
                <form action="{{ route('professorinsert') }}" method="POST">
                    @endif
                    {{ csrf_field()}}

                    <fieldset class="flex flex-col items-stretch gap-4 p-6 pt-1 bg-violet-100">
                        <div class="flex flex-col gap-y-1">
                            <div class="relative z-0">
                                <label for="nome" class="label">
                                    Nome
                                </label>

                                <input type="text" id="nome" name="nome" value='{{ $professor->nome }}' class="input"
                                    placeholder=" " />
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-1">
                            <div class="relative z-0">
                                <label for="login" class="label">
                                    Login
                                </label>

                                <input type="text" id="login" name="login" value='{{ $professor->login }}' class="input"
                                    placeholder=" " />
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-1">
                            <div class="relative z-0">
                                <label for="senha" class="label">
                                    Senha
                                </label>

                                <input type="password" id="senha" name="senha" value='{{ $professor->senha }}'
                                    class="input" placeholder=" " />
                            </div>
                        </div>

                    </fieldset>

                    <div class="flex items-center gap-x-2 justify-center">
                        <button type="submit"
                            class="btn-primary flex items-center mt-4 justify-center self-baseline spin">
                            <span>Atualizar</span>
                            <svg id="spinner" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="animate-spin hidden">
                                <path d="M21 12a9 9 0 1 1-6.219-8.56" />
                            </svg>
                        </button>
                    </div>

                </form>
        </div>

        <div class="flex flex-col gap-4 rounded-xl bg-violet-100 p-6 min-h-[95%] h-fit flex-auto">
            <div class="flex flex-col mx-auto gap-y-4">
                <div>
                    <h3 class="text-2xl font-bold tracking-tight text-violet-500">Disciplinas</h3>
                    <p>Suas disciplinas ministradas</p>
                </div>

                <div class="flex items-stretch justify-stretch flex-col w-fit gap-y-2 h-fit">
                    @foreach($disciplinas as $disciplina)
                    <a class="inline-flex w-auto grow transicao hover:bg-violet-300  bg-violet-200 rounded-2xl px-4 py-2 ml-0"
                        href="{{ route('disciplinaform', ['id' => $disciplina->id]) }}">{{$disciplina->nome}}</a>
                    @endforeach
                </div>
            </div>

        </div>

    </main>
</div>
@endsection

@section('scripts')
@vite(['resources/js/app.js'])