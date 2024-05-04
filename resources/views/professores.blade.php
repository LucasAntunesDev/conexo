@extends('layout')
@section('content')

    <div class="flex flex-col justify-center items-center gap-2">
        <div class="flex justify-around items-center gap-2">

            <div class="flex justify-start items-center gap-x-12">

                <h1 class="text-violet-500 text-5xl font-bold inline-flex gap-x-2 mt-4 items-center">
                    professores
                </h1>

            </div>
            <a href="{{ route('professornovo') }}" class="bg-emerald-500 rounded-md py-1 px-4 focus:bg-slate-50
            text-neutral-700 flex items-center mt-4 gap-x-2 justify-center border-2 border-emerald-500 
            focus:text-emerald-500 focus:border-emerald-500 transition duration-300 ease-in-out
            hover:bg-emerald-600 hover:border-emerald-600 self-baseline">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                </svg>
                Adicionar professor
            </a>

        </div>

        <div class="relative overflow-x-auto max-w-11/12 rounded-xl">
            <table class="table-auto text-neutral-700 font-medium">
                <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 text-violet-500 bg-violet-100">
                    <tr class="table-row">
                        <th class="w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col"">
                            <div class=" flex items-center gap-x-2">Nome</div>
                            </th>
                        <th class=" w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col">Id da Disciplina</th>
                        <th class=" w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col">Ações</th>
                    </tr>
                </thead>

        <tbody class="text-sm bg-neutral-50/40">
            @foreach($professores as $professor)
            <tr class="bg-violet-100 even:bg-violet-200">
                <td class="pl-2 pr-1 w-fit">
                    <span class="bg-violet-100 py-1 px-2 rounded-md hover:bg-violet-200 text-violet-700
                            hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm mx-2">
                        {{ $professor->id }}
                    </span>
                    {{ $professor->nome }}
                </td>
                <td class="pl-2 pr-1 w-fit"> {{ $professor->professor_id }}</td>
                <td class="flex pl-2 pr-1 w-fit py-5 flex-nowrap gap-x-2" scope="col">
                    <form method="POST" action="{{ route('professordelete', ['id'=> $professor->id]) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field()}}
                    <a href="{{ route('professorform', ['id' => $professor->id]) }}" 
                        class='bg-emerald-500 rounded-full py-1 px-4 focus:bg-slate-50
                        text-neutral-700 flex items-center mt-4 gap-x-2 justify-center border-2 border-emerald-500 focus:text-emerald-500 focus:border-emerald-500 transition duration-300 ease-in-out
                        hover:bg-emerald-600 hover:border-emerald-600'>

                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='w-4 h-4'>
                            <path d='M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z' />
                        </svg>
                    </a>

                    <button type="submit" class='bg-red-500 rounded-full py-1 px-4 focus:bg-slate-50
                        text-neutral-700 flex items-center mt-4 gap-x-2 justify-center border-2 border-red-500 focus:text-red-500 focus:border-red-500 transition duration-300 ease-in-out
                        hover:bg-red-3 hover:border-red-3'>

                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='w-4 h-4'>
                            <path fill-rule='evenodd' d='M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z' clip-rule='evenodd' />
                        </svg>
                    </button>

                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>

    @endsection