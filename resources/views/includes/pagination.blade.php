@if ($paginator->hasPages())
  <nav
    role="navigation"
    aria-label="{{ __('Pagination Navigation') }}"
    class="mx-auto flex items-center justify-between">
    <div class="flex flex-1 justify-between *:border-none sm:hidden">
      @if ($paginator->onFirstPage())
        <span
          class="relative inline-flex cursor-default items-center rounded-lg bg-violet-50 px-4 py-2 text-sm font-bold leading-5 text-violet-500 dark:bg-neutral-900 dark:text-violet-400">
          {!! __('pagination.previous') !!}
        </span>
      @else
        <a
          href="{{ $paginator->previousPageUrl() }}"
          class="active: relative inline-flex items-center rounded-lg bg-violet-50 px-4 py-2 text-sm font-bold leading-5 ring-violet-300 transition duration-300 ease-in-out hover:bg-violet-500 hover:text-zinc-50 focus:border-violet-300 focus:bg-violet-500 focus:text-zinc-50 focus:outline-none focus:ring active:bg-violet-50 dark:bg-neutral-900">
          {!! __('pagination.previous') !!}
        </a>
      @endif

      @if ($paginator->hasMorePages())
        <a
          href="{{ $paginator->nextPageUrl() }}"
          class="active: relative ml-3 inline-flex items-center rounded-lg bg-violet-50 px-4 py-2 text-sm font-bold leading-5 ring-violet-300 transition duration-300 ease-in-out hover:bg-violet-500 hover:text-zinc-50 focus:border-violet-300 focus:bg-violet-500 focus:text-zinc-50 focus:outline-none focus:ring active:bg-violet-50 dark:bg-neutral-900">
          {!! __('pagination.next') !!}
        </a>
      @else
        <span
          class="relative ml-3 inline-flex cursor-default items-center rounded-lg bg-violet-50 px-4 py-2 text-sm font-bold leading-5 text-violet-500 dark:bg-neutral-900 dark:text-violet-400">
          {!! __('pagination.next') !!}
        </span>
      @endif
    </div>

    <div
      class="mx-auto hidden w-6/12 *:border-none sm:flex sm:flex-1 sm:items-center sm:justify-between">
      <div class="ml-10 *:border-none">
        <span
          class="relative z-0 inline-flex gap-x-1.5 rounded-lg rtl:flex-row-reverse">
          {{-- Previous Page Link --}}
          @if ($paginator->onFirstPage())
          @else
            <a
              href="{{ $paginator->previousPageUrl() }}"
              rel="prev"
              class="focus-visible:ring-ring pl-2.5r inline-flex h-10 items-center justify-center gap-1 whitespace-nowrap rounded-xl px-4 py-2 text-sm font-medium text-violet-500 transition-colors hover:bg-violet-50 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 dark:bg-neutral-900 dark:text-violet-400 dark:hover:bg-neutral-800"
              aria-label="{{ __('pagination.previous') }}">
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                  clip-rule="evenodd" />
              </svg>
              Anterior
            </a>
          @endif

          {{-- Pagination Elements --}}
          @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
              <span aria-disabled="true">
                <span
                  class="relative -ml-px inline-flex cursor-default items-center rounded-lg bg-violet-50 px-4 py-2 text-sm font-medium leading-5 dark:bg-neutral-900">
                  {{ $element }}
                </span>
              </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
              @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                  <span aria-current="page">
                    <span
                      class="focus-visible:ring-ring border-input inline-flex h-10 w-10 items-center justify-center whitespace-nowrap rounded-xl border border-violet-200 text-sm font-medium text-violet-500 transition-colors hover:cursor-pointer hover:bg-violet-50 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-violet-400 dark:hover:bg-neutral-800">
                      {{ $page }}
                    </span>
                  </span>
                @else
                  <a
                    href="{{ $url }}"
                    class="focus-visible:ring-ring inline-flex h-10 w-10 items-center justify-center whitespace-nowrap rounded-xl text-sm font-medium text-violet-500 transition-colors hover:bg-violet-50 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 dark:bg-neutral-900 dark:text-violet-400 dark:hover:bg-neutral-800"
                    aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                    {{ $page }}
                  </a>
                @endif
              @endforeach
            @endif
          @endforeach

          {{-- Next Page Link --}}

          @if ($paginator->hasMorePages())
            <a
              href="{{ $paginator->nextPageUrl() }}"
              rel="next"
              class="focus-visible:ring-ring pl-2.5r inline-flex h-10 items-center justify-center gap-1 whitespace-nowrap rounded-xl px-4 py-2 text-sm font-medium text-violet-500 transition-colors hover:bg-violet-50 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 dark:bg-neutral-900 dark:text-violet-400 dark:hover:bg-neutral-800"
              aria-label="{{ __('pagination.next') }}">
              Próximo
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
              </svg>
            </a>
          @else
            <span
              aria-disabled="true"
              aria-label="{{ __('pagination.next') }}">
              <span
                class="relative -ml-px inline-flex cursor-default items-center rounded-lg bg-violet-50 px-2 py-2 text-sm font-bold leading-5 text-violet-500 dark:bg-neutral-900 dark:text-violet-400"
                aria-hidden="true">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd" />
                </svg>
              </span>
            </span>
          @endif
        </span>
      </div>
    </div>
  </nav>
@endif
