@extends('layout')
@section('content')

<div class="flex flex-col justify-center items-center gap-2 mb-8">
    <div class="flex justify-around items-center gap-8">

        <h1 class="text-violet-500 text-5xl font-bold inline-flex gap-x-2 my-8 items-center">
            Grupos
        </h1>

        <a href="{{ route('gruponovo') }}"
            class="bg-emerald-500 hover:bg-emerald-700 rounded-lg py-2 px-5 focus:outline-none focus:ring focus:ring-emerald-300 text-zinc-50 flex items-center mt-4 gap-x-2 justify-center transition duration-300 ease-in-out font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
            </svg>
            Adicionar grupo
        </a>

    </div>

    <div class="rounded-lg overflow-hidden mb-6">

        <table class="table-auto text-gray-700 font-medium">
            <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 text-violet-500 bg-violet-100">
                <tr class="table-row">
                    <th class="w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col">
                        <div class=" flex items-center gap-x-2">Nome
                        </div>
                    </th>
                    <th class=" w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col">Disciplina</th>
                    <th class=" w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col">Ações</th>
                </tr>
            </thead>

            <tbody class="text-sm bg-gray-50/40">
                @foreach($grupos as $grupo)
                <tr class="border-b border-violet-100 bg-violet-50/60 even:bg-violet-50">
                    <td class="pl-2 pr-1 w-fit">
                        <span class="bg-violet-200 py-1 px-2 inline-flex justify-center rounded-md hover:bg-violet-200 text-violet-700  text-violet-50
                            hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm mx-2">
                            {{ $grupo->id }}
                        </span>
                        {{ $grupo->nome }}
                    </td>
                    <td class="pl-2 pr-1 w-fit"> {{ App\Models\Disciplina::find($grupo->disciplina_id)->nome }}</td>
                    <td class="flex pl-2 pr-1 w-fit py-5 flex-nowrap gap-x-2" scope="col">
                        <form method="POST" action="{{ route('grupodelete', ['id'=> $grupo->id]) }}">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field()}}
                            <div class="flex gap-x-2 items-center">
                                <a href="{{ route('grupoform', ['id' => $grupo->id]) }}"
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
    {{ $grupos->links('includes.pagination') }}
</div>

@endsection

@section('scripts')
@vite(['resources/js/app.js'])