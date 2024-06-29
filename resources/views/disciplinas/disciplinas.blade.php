@extends('layout')
@section('title', 'Disciplinas - Conexo')
@section('content')
  <div class="mb-8 flex flex-col items-center justify-center gap-2">
    <div class="flex items-center justify-around gap-8">
      <h1
        class="my-8 inline-flex items-center gap-x-2 text-5xl font-bold text-violet-500">
        Disciplinas
      </h1>

      <button
        data-modal-target="crud-modal"
        data-modal-toggle="crud-modal"
        class="btn-primary flex items-center justify-center font-semibold"
        type="button">
        Adicionar disciplina
      </button>

      <div class="flex flex-col">
        <x-pesquisar-input></x-pesquisar-input>
      </div>

      <div
        id="crud-modal"
        tabindex="-1"
        aria-hidden="true"
        class="appear fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
        <div class="relative max-h-full w-full max-w-md p-4">
          <div class="relative rounded-2xl bg-violet-50 shadow">
            <div
              class="flex items-center justify-between rounded-t-2xl border-b p-4 md:p-5">
              <h3 class="text-lg font-semibold">Adicionar disciplina</h3>
              <button
                type="button"
                class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-violet-400 hover:text-violet-700"
                data-modal-toggle="crud-modal">
                <svg
                  class="h-3 w-3"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 14 14">
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
              </button>
            </div>

            <form
              action="{{ route('disciplinainsert') }}"
              method="POST"
              class="p-4 md:p-5">
              {{ csrf_field() }}
              <div class="flex flex-col items-center gap-2">
                <div class="flex flex-col gap-y-1">
                  <label for="nome" class="label capitalize">Nome</label>
                  <input type="text" id="nome" name="nome" class="input" />
                </div>

                <div class="flex flex-col gap-y-1">
                  <label for="professor_id" class="label capitalize">
                    Professor
                  </label>
                  <select id="professor_id" name="professor_id" class="input">
                    @foreach ($professores as $professor)
                      <option
                        value="{{ $professor->id }}"
                        {{
                          $professor->id == $disciplina->professor_id ? 'selected' : ''
                        }}>
                        {{ $professor->nome }}
                      </option>
                    @endforeach
                  </select>
                </div>
              </div>
              <button
                type="submit"
                class="btn-primary spin mt-4 flex items-center justify-center self-baseline">
                <span>Salvar</span>
                <div class="btn-loader hidden"></div>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-4 grid-rows-4 justify-items-center gap-2 p-4">
      @foreach ($disciplinas as $disciplina)
        <div class="lista-item h-auto w-fit rounded-xl bg-violet-50 p-6">
          <div class="flex flex-col gap-3">
            <a
              href="{{ route('disciplinaform', ['id' => $disciplina->id]) }}"
              class="lista-titulo flex w-56 text-lg font-semibold text-violet-900">
              {{ $disciplina->nome }}
            </a>
            <span class="text-sm font-medium text-gray-500">
              {{ App\Models\Professor::find($disciplina->professor_id)->nome }}
            </span>
          </div>

          <form
            method="POST"
            action="{{ route('disciplinadelete', ['id' => $disciplina->id]) }}"
            class="mx-auto w-auto pt-4">
            <input type="hidden" name="_method" value="DELETE" />
            {{ csrf_field() }}
            <div class="flex items-center justify-between gap-x-2 px-14">
              <a
                href="{{ route('disciplinaform', ['id' => $disciplina->id]) }}"
                class="text-current transition duration-300 ease-in-out hover:cursor-pointer hover:text-emerald-600">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-5">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
              </a>

              <x-delete-button></x-delete-button>
            </div>
          </form>
        </div>
      @endforeach
    </div>

    {{ $disciplinas->links('includes.pagination') }}
  </div>
@endsection

@section('scripts')
@vite(['resources/js/app.js'])
