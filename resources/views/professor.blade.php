@extends('layout')
@section('title', 'Professor - Conexo')
@section('content')

<div class="flex w-screen h-screen">
    <main class="flex flex-col justify-center items-center gap-2 grow">

        <div class="space-y-0.5 w-[70rem] my-4 rounded-xl bg-violet-100 p-6">
            <h2 class="text-2xl font-bold tracking-tight text-violet-500">Configurções de usuário</h2>
            <p>Altere as configurações de sua conta.</p>
        </div>
{{-- 
        <h1 class="text-violet-500 text-5xl font-bold inline-flex gap-x-2 my-4 items-center capitalize">
            {{$professor->nome}}
        </h1> --}}

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

                <fieldset class="flex flex-col items-stretch gap-4 rounded-xl bg-violet-100 p-6 w-[70rem]">
                    <div class="space-y-2">
                        <div class="relative z-0">
                            <input type="text" id="nome" name="nome" value='{{ $professor->nome }}'
                                class="block py-2.5 px-0 w-full text-sm bg-transparent border-violet-500 appearance-none focus:outline-none focus:border-violet-700 focus:ring-0 peer pr-7 pl-10  rounded-lg border-[1.5px] outline-none focus:ring-violet-500 autofill:bg-violet-100 focus:autofill:bg-violet-100"
                                placeholder=" " />

                            <label for="nome"
                                class="absolute text-sm text-violet-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-violet-100  px-2 peer-focus:px-2 peer-focus:text-violet-700  peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                            Nome
                            </label>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <div class="relative z-0">
                            <input type="text" id="login" name="login" value='{{ $professor->login }}'
                                class="block py-2.5 px-0 w-full text-sm bg-transparent border-violet-500 appearance-none focus:outline-none focus:border-violet-700 focus:ring-0 peer pr-7 pl-10  rounded-lg border-[1.5px] outline-none focus:ring-violet-500 autofill:bg-violet-100 focus:autofill:bg-violet-100"
                                placeholder=" " />

                            <label for="login"
                                class="absolute text-sm text-violet-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-violet-100  px-2 peer-focus:px-2 peer-focus:text-violet-700  peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                            Login
                            </label>
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <div class="relative z-0">
                            <input type="password" id="senha" name="senha" value='{{ $professor->senha }}'
                                class="block py-2.5 px-0 w-full text-sm bg-transparent border-violet-500 appearance-none focus:outline-none focus:border-violet-700 focus:ring-0 peer pr-7 pl-10  rounded-lg border-[1.5px] outline-none focus:ring-violet-500 autofill:bg-violet-100 focus:autofill:bg-violet-100"
                                placeholder=" " />

                            <label for="senha"
                                class="absolute text-sm text-violet-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-violet-100  px-2 peer-focus:px-2 peer-focus:text-violet-700  peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                            Senha
                            </label>
                        </div>
                    </div>

                </fieldset>

                <div class="flex items-center gap-x-2 justify-center">
                    <a href="{{ route('inicio') }}"
                        class="hover:text-violet-500 rounded-lg py-2 px-4 flex items-center mt-4 gap-x-2 justify-center transition duration-300 ease-in-out self-baseline">
                        Cancelar
                    </a>

                    <button type="submit"
                        class="btn-primary flex items-center mt-4 justify-center hover:bg-violet-700 self-baseline spin">
                        <span>Salvar</span>
                        <svg id="spinner" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="animate-spin hidden">
                            <path d="M21 12a9 9 0 1 1-6.219-8.56" />
                        </svg>
                    </button>
                </div>

            </form>
    </main>
</div>
@endsection

@section('scripts')
@vite(['resources/js/app.js'])