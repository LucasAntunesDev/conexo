@extends('layout')
@section('title', 'Palavras - Conexo')
@section('content')
  <div class="mb-8 flex grow flex-col items-center justify-center gap-2">
    <div class="flex items-center justify-around gap-8">
      <h1
        class="my-8 inline-flex items-center gap-x-2 text-5xl font-bold text-violet-500">
        Palavras
      </h1>

      @if ($errors->any())
        <div class="flex items-center justify-center">
          <div>
            <div class="mt-4 rounded-md bg-red-50 px-20 py-1 text-red-700">
              <ul>
                <div class="inline-flex items-center gap-x-2 font-semibold">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    class="size-5">
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z"
                      clip-rule="evenodd" />
                  </svg>
                  Foram encontrados os seguintes erros:
                </div>
                @foreach ($errors->all() as $error)
                  <li class="list-disc">{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      @endif

      <button
        data-modal-target="crud-modal"
        data-modal-toggle="crud-modal"
        class="btn-primary flex items-center justify-center font-semibold"
        type="button">
        Adicionar palavra
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
              <h3 class="text-lg font-semibold">Adicionar palavra</h3>

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
              action="{{ route('palavrainsert') }}"
              method="POST"
              class="p-4 md:p-5">
              {{ csrf_field() }}
              <div class="flex flex-col gap-y-1">
                <label for="nome" class="label capitalize">Nome</label>
                <input
                  type="text"
                  id="nome"
                  name="nome"
                  value=""
                  class="input" />
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

    @if (session('status'))
      <x-toast type="success">
        {{ session('status') }}
      </x-toast>
    @endif

    @if (session('delete'))
      <x-toast type="error">
        {{ session('delete') }}
      </x-toast>
    @endif

    <div
      class="grid max-w-[90%] grid-cols-6 grid-rows-4 gap-2 pb-8"
      id="palavras-grid">
      @foreach ($palavras as $palavra)
        <div
          id="groups-modal{{ $palavra->id }}"
          tabindex="-1"
          aria-hidden="true"
          class="appear fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
          <div class="relative max-h-full w-full max-w-md p-4">
            <div class="relative rounded-2xl bg-violet-50 shadow">
              <div
                class="flex items-center justify-between rounded-t-2xl border-b p-4 md:p-5">
                <h3 class="text-lg font-semibold">Adicionar palavra</h3>

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
                action="{{ route('palavrainsert') }}"
                method="POST"
                class="p-4 md:p-5">
                {{ csrf_field() }}
                <div class="flex flex-col gap-y-1">
                  <label for="nome" class="label capitalize">Nome</label>
                  <input
                    type="text"
                    id="nome"
                    name="nome"
                    value=""
                    class="input" />
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

        <div
          class="lista-item inline-flex flex-col gap-x-4 rounded-2xl bg-violet-50 px-4 py-2">
          <div class="inline-flex items-center justify-between gap-x-4">
            <a
              class="lista-titulo w-fit font-semibold capitalize text-violet-900">
              {{ $palavra->nome }}
            </a>

            <form
              method="POST"
              action="{{ route('palavradelete', ['id' => $palavra->id]) }}"
              class="m-0 size-fit">
              <input type="hidden" name="_method" value="DELETE" />
              {{ csrf_field() }}
              <div class="flex items-center gap-x-2">
                <x-edit-button
                  link="{{ route('palavraform', ['id' => $palavra->id]) }}"></x-edit-button>
                <x-delete-button></x-delete-button>
              </div>
            </form>
          </div>
        </div>
      @endforeach
    </div>

    {{ $palavras->links('includes.pagination') }}
  </div>
@endsection

@section('scripts')
@vite(['resources/js/app.js'])
