@extends('layout')
@section('content')

    <div class="flex flex-col">
        <div class="flex my-4 items-center w-6/12 mx-auto justify-between px-3">
            <div class="w-fit flex items-center gap-x-3">
                <a href="{{ route('inicio')}}" class="inline-block hover:bg-violet-200 rounded-full p-1">
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
            <h3 class="mx-auto font-semibold text-xl">Todos os jogos</h3>

            {{-- <form action="{{ route('diario', ['dataJogo' => $data->data]) }}" class="flex items-center gap-4">
                <input type="number" name="disciplina" id="disciplina" class="rounded bg-violet-100 p-2 outline-none">
                <button class="bg-emerald-600 rounded-full px-4 py-3 text-zinc-50">Procurar</button>
            </form> --}}
            <form action="" class="flex items-center gap-4">
            {{-- <form action="{{route('filtroDisciplina')}}" class="flex items-center gap-4"> --}}
                {{-- <label class="text-violet-500 font-bold" for="disciplina">
                    Disciplinas
                </label> --}}
                <div class="flex gap-x-4 items-center w-8/12 flex-wrap mx-auto">
                    {{-- <select name="disciplina" id="disciplina" class="bg-violet-100 rounded-xl px-4 py-3"> --}}
                        @foreach($disciplinas as $disciplina)
                        <div value="{{$disciplina->id}}" class="flex flex-col gap-4">
                            {{-- <a href="{{''. $disciplina->id}}" {{$disciplina->nome}}></a> --}}
                            <a href="{{ route('jogos', ['disciplinaId' => $disciplina->id]) }}" class="bg-violet-500 rounded-lg p-3 text-violet-100"> {{$disciplina->nome}}</a>
                            <br>
                        </div>
                        @endforeach
                    {{-- </select> --}}
                </div>
                {{-- <button class="bg-emerald-600 rounded-full px-4 py-3 text-zinc-50">Procurar</button> --}}
            </form>
           


            <div class="mx-auto px-4 w-6/12 my-4 grow">
                <div class="grid grid-cols-4 gap-4 w-auto justify-items-center mb-4">
                    @foreach ($datas as $data)
                    <a href="{{ route('diario', ['dataJogo' => $data->data]) }}" target="_blank"
                        class="text-center bg-violet-200 hover:bg-violet-400 text-violet-800 py-5 px-3 rounded-xl w-fit">
                        {{ \Carbon\Carbon::parse($data->data)->format('d/m/Y') }}
                    </a>
                    @if ($loop->iteration % 4 == 0 && !$loop->last)
                </div>
                <div class="grid grid-cols-4 gap-4 w-auto justify-items-center mb-4">
                    @endif
                    @endforeach
                </div>
            </div>


            <!-- Paginação -->
            <div class="mt-4">
                {{ $datas->links('vendor.pagination.tailwind') }}
            </div>


        </main>
    </div>

</body>

</html>