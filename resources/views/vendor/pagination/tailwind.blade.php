@if ($paginator->hasPages())
<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}"
    class="flex items-center justify-between mx-auto">

    <div class="flex justify-between flex-1 sm:hidden *:border-none">
        @if ($paginator->onFirstPage())
        <span
            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-violet-500 font-bold bg-violet-100 cursor-default leading-5 rounded-lg">
            {!! __('pagination.previous') !!}
        </span>
        @else
        <a href="{{ $paginator->previousPageUrl() }}"
            class="relative inline-flex items-center px-4 py-2 text-sm font-medium bg-violet-100 leading-5 rounded-lg hover:text-violet-500 font-bold focus:outline-none focus:ring ring-violet-300 focus:border-violet-300 hover:bg-violet-500 hover:text-zinc-50 focus:bg-violet-500 focus:text-zinc-50 active:bg-violet-100 active: transition ease-in-out duration-300">
            {!! __('pagination.previous') !!}
        </a>
        @endif

        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}"
            class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium  bg-violet-100 leading-5 rounded-lg hover:text-violet-500 font-bold focus:outline-none focus:ring ring-violet-300 focus:border-violet-300 hover:bg-violet-500 hover:text-zinc-50 focus:bg-violet-500 focus:text-zinc-50 active:bg-violet-100 active: transition ease-in-out duration-300">
            {!! __('pagination.next') !!}
        </a>
        @else
        <span
            class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-violet-500 font-bold bg-violet-100 cursor-default leading-5 rounded-lg">
            {!! __('pagination.next') !!}
        </span>
        @endif
    </div>

    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between w-6/12 mx-auto *:border-none">
        <div>
            <p class="text-sm  leading-5">
                {!! __('Mostrando entre') !!}
                @if ($paginator->firstItem())
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                {!! __('e') !!}
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
                @else
                {{ $paginator->count() }}
                @endif
                {!! __('de') !!}
                <span class="font-medium">{{ $paginator->total() }}</span>
                {!! __('resultados') !!}
            </p>
        </div>

        <div class="ml-10 *:border-none">
            <span class="relative z-0 inline-flex rtl:flex-row-reverse shadow-sm rounded-lg gap-x-1.5">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                    <span
                        class="bg-violet-100 relative inline-flex items-center px-2 py-2 text-sm font-medium text-violet-500 cursor-default rounded-lg leading-5"
                        aria-hidden="true">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </span>
                @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-violet-500 font-bold bg-violet-100 rounded-lg leading-5 hover:text-violet-400 focus:z-10 focus:outline-none focus:ring ring-violet-300 focus:border-violet-300 hover:bg-violet-500 hover:text-zinc-50 focus:bg-violet-500 focus:text-zinc-50 active:bg-violet-100 active:text-violet-500 font-bold transition ease-in-out duration-300 "
                    aria-label="{{ __('pagination.previous') }}">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                <span aria-disabled="true">
                    <span
                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium  bg-violet-100 cursor-default leading-5 rounded-lg">{{
                        $element }}</span>
                </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <span aria-current="page">
                    <span
                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-violet-50 font-bold bg-violet-500 cursor-default leading-5 rounded-lg">{{
                        $page }}</span>
                </span>
                @else
                <a href="{{ $url }}"
                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium  bg-violet-100 leading-5 hover:text-violet-500 font-bold focus:z-10 focus:outline-none focus:ring ring-violet-300 focus:border-violet-300 hover:bg-violet-500 hover:text-zinc-50 focus:bg-violet-500 focus:text-zinc-50 active:bg-violet-100 active: transition ease-in-out duration-300 rounded-lg"
                    aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                    {{ $page }}
                </a>
                @endif
                @endforeach
                @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                    class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-violet-500 font-bold bg-violet-100 rounded-lg leading-5 hover:text-violet-400 focus:z-10 focus:outline-none focus:ring ring-violet-300 focus:border-violet-300 hover:bg-violet-500 hover:text-zinc-50 focus:bg-violet-500 focus:text-zinc-50 active:bg-violet-100 active:text-violet-500 font-bold transition ease-in-out duration-300 "
                    aria-label="{{ __('pagination.next') }}">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                @else
                <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                    <span
                        class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-violet-500 font-bold bg-violet-100 cursor-default rounded-lg leading-5 "
                        aria-hidden="true">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
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