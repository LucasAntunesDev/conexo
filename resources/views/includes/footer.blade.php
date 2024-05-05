<footer class="flex w-screen bg-white h-fit py-4 items-center pl-16 border-t-[1px] border-neutral-200 gap-x-20 mt-8">
    <a href="{{ route('diario')}}" class="gap-x-4">
        <svg viewBox="0 0 192 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-8 inline-flex mr-4">
            <path
                d="M2.25 15.9029C2.25 8.36262 8.36262 2.25 15.9029 2.25H176.097C183.637 2.25 189.75 8.36262 189.75 15.9029V37.2925C189.75 39.8059 187.712 41.8434 185.199 41.8434H6.80097C4.28754 41.8434 2.25 39.8059 2.25 37.2925V15.9029Z"
                fill="#C2410C"></path>
            <path
                d="M2.25 55.9515C2.25 53.438 4.28754 51.4005 6.80097 51.4005H185.199C187.712 51.4005 189.75 53.438 189.75 55.9515V86.443C189.75 88.9564 187.712 90.9939 185.199 90.9939H6.80097C4.28754 90.9939 2.25 88.9564 2.25 86.443V55.9515Z"
                fill="#047857"></path>
            <path
                d="M2.25 105.557C2.25 103.044 4.28754 101.006 6.80097 101.006H185.199C187.712 101.006 189.75 103.044 189.75 105.557V136.049C189.75 138.562 187.712 140.6 185.199 140.6H6.80097C4.28754 140.6 2.25 138.562 2.25 136.049V105.557Z"
                fill="#0E7490"></path>
            <path
                d="M2.25 154.708C2.25 152.194 4.28754 150.157 6.80097 150.157H185.199C187.712 150.157 189.75 152.194 189.75 154.708V176.097C189.75 183.637 183.637 189.75 176.097 189.75H15.9029C8.36262 189.75 2.25 183.637 2.25 176.097V154.708Z"
                fill="#6D28D9"></path>
        </svg>
        <span class="text-xl font-bold">CONEXO</span>
    </a>
    <nav class="">
        <ul class="gap-x-8 items-center justify-center" role="list">
            <li class="font-semibold">
                <h3 lass="hover:text-violet-600 cursor-pointer leading-6">Módulos</h3>
            </li>

            <ul class="inline-flex gap-x-8">
                <li>
                    <a href="{{ route('professores') }}" class="hover:text-violet-600 cursor-pointer">Professores</a>
                </li>

                <li>
                    <a href="{{ route('disciplinas') }}" class="hover:text-violet-600 cursor-pointer">Disciplinas</a>
                </li>

                <li>
                    <a href="{{ route('grupos') }}" class="hover:text-violet-600 cursor-pointer">Grupos</a>
                </li>

                <li>
                    <a href="{{ route('palavras') }}" class="hover:text-violet-600 cursor-pointer">Palavras</a>
                </li>
            </ul>

        </ul>
    </nav>
    <div>
        @auth('web')
        <a href="{{route('logout')}}" class="inline-flex hover:text-violet-500 py-3 px-6 w-max">Sair</a>
        @else
        <a href="{{route('login')}}"
            class="inline-flex bg-violet-600 hover:bg-violet-700 text-violet-50 rounded-xl py-3 px-6 w-max">Entar</a>
    @endauth
    </div>
</footer>