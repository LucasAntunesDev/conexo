@extends('layout')
@section('content')

<body class=" text-neutral-700">

    <div class="flex flex-col justify-center pl-24 items-start gap-2">

        <nav class="flex my-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li>
                    <div class="flex items-center">
                        <a href="{{ route('professores') }}" class="ms-1 text-sm font-medium 
                        hover:text-violet-500 md:ms-2">Professores</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium md:ms-2">Formulário</span>
                    </div>
                </li>
            </ol>
        </nav>

        <h1 class="font-bold text-4xl text-violet-500 mb-4">
            Gerenciar professor
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

        @if($professor->id)
        <form action="{{ route('grupoupdate', ['id' =>$professor->id]) }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            @else
            <form action="{{ route('grupoinsert') }}" method="POST">
                @endif
                {{ csrf_field()}}

                <fieldset class="flex flex-col items-center p-10 w-[40rem]">
                    <input type="hidden" name="id" value='{{ $professor->id }}'>

                    <div class="flex flex-col gap-y-1">
                        <label for="nome" class="label">Nome</label>
                        <input type="text" id="nome" name="nome" value='{{ $professor->nome }}' class="rounded-md 
                    border-none py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                    focus:ring-2 focus:ring-inset focus:ring-violet-400 outline-none bg-violet-100">
                    </div>

                    <div class="flex flex-col gap-y-1">
                        <label for="login" class="label">Login</label>
                        <input type="text" id="login" name="login" value='{{ $professor->login }}' class="rounded-md 
                    border-none py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                    focus:ring-2 focus:ring-inset focus:ring-violet-400 outline-none bg-violet-100">
                    </div>

                    <div class="flex flex-col gap-y-1">
                        <label for="senha" class="label">Senha</label>
                        <input type="text" id="senha" name="senha" value='{{ $professor->senha }}' class="rounded-md 
                    border-none py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                    focus:ring-2 focus:ring-inset focus:ring-violet-400 outline-none bg-violet-100">
                    </div>

                </fieldset>

                <div class="flex items-center gap-x-2 justify-center">
                    <a href="{{ route('professores') }}" class="btn outlined">
                        Cancelar
                    </a>

                    <button type="submit" class="btn primary">
                        Salvar
                    </button>
                </div>

            </form>

</body>

</html>