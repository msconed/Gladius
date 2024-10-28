<div class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
<header >
                <div
                    class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                    <!-- Mobile hamburger -->
                    <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                        @click="toggleSideMenu" aria-label="Menu">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <div class="flex justify-center flex-1 lg:mr-32"> </div>
                    <ul class="flex flex-shrink-0 space-x-6 items-end">
                        <!-- Profile menu -->
                        <li class="relative">
                            <button
                                class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none  text-gray-600 bg-white border border-gray-100 shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700">
                                <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                    href="{{ route('logout') }}">
                                    <i class="fa-solid fa-right-from-bracket fa-rotate-180 w-4 h-4 mr-1"></i>
                                    <span>Выйти</span>
                                </a>
                            </button>
                        </li>
                    </ul>
                </div>

            </header>
</div>
