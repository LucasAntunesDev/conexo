<header class="flex flex-row justify-between items-center px-12 gap-x-4 
h-16 bg-transparent min-w-[99vw] max-w-[99vw] mx-auto mt-2 rounded-xl py-4">

    <a href="{{ route('index')}}" class="inline-flex gap-x-1 items-center text-xl font-bold uppercase">
        <x-conexo-logo class="w-8 inline-flex mr-4"></x-conexo-logo>
        conexo
    </a>

    @auth('web')
    <div class="flex items-center md:justify-between gap-x-4  md:gap-x-0 flex-row-reverse mx-auto">

        <div class="md:mx-auto">
            <nav class="mr-10 bg-violet-50 px-8 rounded-3xl">
                <ul class="inline-flex gap-x-8 items-center justify-center" role="list">
                    @php
                    {{$modulos = ['jogos', 'disciplinas', 'grupos', 'palavras'];}}
                    @endphp

                    @foreach ($modulos as $modulo)

                    <li
                        class="hover:transicao py-4 px-5 rounded-xl {{(str_contains(url()->current(), strtolower($modulo))) ? 'font-semibold text-violet-500 hover:text-violet-600' : 'hover:text-violet-500 text-neutral-600' }}">
                        <a href="{{ route($modulo) }}" class=" transicao capitalize">
                            {{$modulo}}
                        </a>
                    </li>

                    @endforeach

                </ul>
            </nav>
        </div>

    </div>

    <div class='flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse gap-x-1'>
        <button type='button' class='' id='user-menu-button' aria-expanded='false' data-dropdown-toggle='user-dropdown'
            data-dropdown-placement='bottom'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-7 transition duration-300 ease-in-out">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>

        </button>

        <div class='z-50 hidden my-1 text-base list-none shadow w-64 bg-violet-50/60 backdrop-blur absolute right-10 bottom-14 rounded-xl p-4 gap-4 appear'
            id='user-dropdown'>

            <ul class="flex flex-col gap-y-4">
                <li class="bg-violet-200 rounded-xl *:transition *:duration-300 *:ease-in-out">
                    <a href="{{ route('professorform', ['id' => auth()->user()->id]) }}"
                        class="inline-flex hover:text-violet-500 py-3 px-6 gap-x-4 capitalize">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-7 transition duration-300 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        {{auth()->user()->nome}}
                    </a>
                </li>
                <li class="bg-violet-200 rounded-xl *:transition *:duration-300 *:ease-in-out">
                    <a href="{{route('logout')}}" class="inline-flex hover:text-red-500 py-3 px-6 w-max gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                        </svg>

                        Sair
                    </a>
                </li>
            </ul>

        </div>
        @else
        <a href="{{route('login')}}" class="inline-flex py-3 px-6 w-max justify-between items-center btn-primary">
            Entrar
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd"
                    d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z"
                    clip-rule="evenodd" />
            </svg>

        </a>
        @endif
    </div>

    </div>

</header>