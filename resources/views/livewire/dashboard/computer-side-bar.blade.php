<div class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
        <!-- Desktop sidebar -->
        <aside >
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                    Gladius
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        @if ($page_id == 'dashboard.main')
                            {!! $border_text !!}
                        @endif
                        <button wire:click="switchPage('dashboard.main')" wire:loading.attr="disabled"
                            class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
                            <i class="fa-solid fa-house"></i>
                            <span class="ml-4">Главная</span>
                            <div wire:loading wire:target="switchPage('dashboard.main')">
                                <div class="flex items-center justify-center ml-5 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                    <div
                                        class="px-3 py-1 text-xs font-medium leading-none text-center text-blue-800 bg-blue-200 rounded-full animate-pulse dark:bg-blue-900 dark:text-blue-200">
                                        Загрузка...</div>
                                </div>
                            </div>
                        </button>
                    </li>

                    <!-- <li class="relative px-6 py-3">

                        <button wire:click="switchPage('dashboard.bans')" wire:loading.attr="disabled"
                            class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
                            <i class="fa-solid fa-ban"></i>
                            <span class="ml-4">Баны</span>
                            <div wire:loading wire:target="switchPage('dashboard.bans')">
                                <div class="flex items-center justify-center ml-5 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                    <div
                                        class="px-3 py-1 text-xs font-medium leading-none text-center text-blue-800 bg-blue-200 rounded-full animate-pulse dark:bg-blue-900 dark:text-blue-200">
                                        Загрузка...</div>
                                </div>
                            </div>
                        </button>
                    </li> -->
                    @if (in_array("76561198117193690", [Auth::user()->steamid]) or in_array("76561199446759725", [Auth::user()->steamid]))
                        <li class="relative px-6 py-3">
                            @if ($page_id == 'dashboard.adminka')
                                {!! $border_text !!}
                            @endif
                            <button wire:click="switchPage('dashboard.adminka')" wire:loading.attr="disabled"
                                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
                                <i class="fa-brands fa-angular"></i>
                                <span class="ml-4">Админка</span>
                                <div wire:loading wire:target="switchPage('dashboard.adminka')">
                                    <div class="flex items-center justify-center ml-5 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                        <div
                                            class="px-3 py-1 text-xs font-medium leading-none text-center text-blue-800 bg-blue-200 rounded-full animate-pulse dark:bg-blue-900 dark:text-blue-200">
                                            Загрузка...</div>
                                    </div>
                                </div>
                            </button>
                        </li>
                    @endif

                </ul>
            </div>
        </aside>
</div>
