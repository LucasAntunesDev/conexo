@extends('layout')
@section('content')

<div class="w-screen grow">


    <div class="flex items-center grow">
    
        <div class="flex flex-col items-center gap-4 w-6/12">
            <h2 class="my-8 text-violet-500 text-5xl 
        font-bold mx-auto w-fit">Login</h2>
            <fieldset class="bg-violet-100 w-fit rounded-lg py-10 px-16">
                <form action="{{ route('login')}} " class="flex flex-col items-center gap-4" method="POST">
                    @csrf

                    <div class="flex flex-col gap-2">
                        <label for="login" class="text-violet-500">Login</label>
                    <input type="text" name="login" id="login" class="pr-7 pl-10 py-3 rounded-xl border-[1px] border-violet-200 outline-none">
                    </div>

                   <div class="flex flex-col gap-2">
                    <label for="senha" class="text-violet-500">Senha</label>
                    <input type="password" name="senha" id="senha" class="pr-7 pl-10 py-3 rounded-xl border-[1px] border-violet-200 outline-none">
                   </div>

                    <button type="submit" class="inline-flex bg-violet-600 hover:bg-violet-700 text-violet-50 rounded-xl py-3 px-6 w-max">Entar</button>
                </form>
            </fieldset>
        </div>

        <div class="flex flex-col items-center h-max w-6/12 h-64">
            <div class="flex flex-col mx-auto gap-2">
                <svg viewBox="0 0 192 192" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-24 inline-flex m-auto">
                    <path
                        d="M2.25 15.9029C2.25 8.36262 8.36262 2.25 15.9029 2.25h276.097C183.637 2.25 189.75 8.36262 189.75 15.9029V37.2925C189.75 39.8059 187.712 41.8434 185.199 41.8434H6.80097C4.28754 41.8434 2.25 39.8059 2.25 37.2925V15.9029Z"
                        fill="#C2410C"></path>
                    <path
                        d="M2.25 55.9515C2.25 53.438 4.28754 51.4005 6.80097 51.4005h285.199C187.712 51.4005 189.75 53.438 189.75 55.9515V86.443C189.75 88.9564 187.712 90.9939 185.199 90.9939H6.80097C4.28754 90.9939 2.25 88.9564 2.25 86.443V55.9515Z"
                        fill="#047857"></path>
                    <path
                        d="M2.25 105.557C2.25 103.044 4.28754 101.006 6.80097 101.006h285.199C187.712 101.006 189.75 103.044 189.75 105.557V136.049C189.75 138.562 187.712 140.6 185.199 140.6H6.80097C4.28754 140.6 2.25 138.562 2.25 136.049V105.557Z"
                        fill="#0E7490"></path>
                    <path
                        d="M2.25 154.708C2.25 152.194 4.28754 150.157 6.80097 150.157h285.199C187.712 150.157 189.75 152.194 189.75 154.708V176.097C189.75 183.637 183.637 189.75 176.097 189.75h25.9029C8.36262 189.75 2.25 183.637 2.25 176.097V154.708Z"
                        fill="#6D28D9"></path>
                </svg>
                <span class="text-6xl font-bold">CONEXO</span>
                <p class="font-semibold my-4 w-64 text-center mx-auto">Forme 4 grupos de 4 palavras que tenham algo em comum</p>
            </div>
        </div>
    </div>

</div>


@endsection