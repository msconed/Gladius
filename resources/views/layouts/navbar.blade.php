<div class="top-0 left-0 w-full z-50 discord_bg1 border-b backdrop-blur-lg bg-opacity-80">
    <div class="mx-auto max-w-7xl px-6 sm:px-6 lg:px-8 ">
        <div class="relative flex h-16 justify-between">
            <div class="flex flex-1 items-stretch justify-start">
                <!-- <a class="flex flex-shrink-0 items-center" href="/">
                    <img class="block h-12 w-auto" src="https://www.svgrepo.com/show/501888/donut.svg" >
                </a> -->

                
            </div>
            <div class="flex-shrink-0 flex px-2 py-3 items-center space-x-8">
            @auth
                <a class="text-green-50 hover:text-green-200 text-sm font-medium" 
                href="{{ route('dashboard')}}">Профиль</a>
                <a class="text-green-50 hover:text-green-200 text-sm font-medium" 
                    href="{{ route('logout')}}">Выйти</a>

            @else
                <a class="text-green-50 hover:text-green-200 text-sm font-medium" 
                    href="{{ route('auth.steam')}}">Войти</a>
                @endif
            </div>
        </div>
    </div>
</div>