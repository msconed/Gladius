<div class="w-full overflow-hidden rounded-lg shadow-xs">
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    </h2>
    @if ($myBanData)
        <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-red-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
            href="">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                </svg>
                <span>Вы забанены до {{$myBanData['time_until']}} по причине {{$myBanData['reason']}}</span>
            </div>
            <span>Подать заявку на разбан -></span>
        </a>
    @endif
    
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Список активных банов
    </h4>
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Игрок</th>
                    <th class="px-4 py-3">Причина</th>
                    <th class="px-4 py-3">Дата окончания</th>
                    <th class="px-4 py-3">Заявка на разбан</th>
                    @if (false)
                    <th class="px-4 py-3">Действия</th>
                    @endif

                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                @forelse ($currentBansArray as $user)
                <tr class="{{ ( $user['steamid'] == Auth::user()->steamid ) ? 'text-purple-100 bg-red-600' : 'text-gray-700 dark:text-gray-400' }}">
                    <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            <div>
                                <p class="font-semibold mb-2">{{$user['name']}}</p>
                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                    {{$user['steamid']}}
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$user['reason']}}
                    </td>
                    <td class="px-4 py-3 text-xs">
                        {{$user['time_until']}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <!-- <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            Approved
                        </span> -->
                        <!-- <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                            Отклонена
                        </span> -->
                        <span
                            class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                            Отсутствует
                        </span>

                        <!-- <span
                                class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                Ожидает рассмотрения
                            </span> -->


                    </td>
                    @if (false)
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                            <button
                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                aria-label="Edit">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                    </path>
                                </svg>
                            </button>
                            <button
                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                aria-label="Delete">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </td>
                    @endif
                </tr>
                @empty
                <tr>
                    <td  class="px-4 py-3">
                        Банов нет :)
                    </td>
                    <td  class="px-4 py-3">
                        Банов нет :)
                    </td>
                    <td  class="px-4 py-3">
                        Банов нет :)
                    </td>
                    <td  class="px-4 py-3">
                        Банов нет :)
                    </td>

                </tr>

                @endforelse





            </tbody>
        </table>
    </div>
    <div
        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        <span class="flex items-center col-span-3">
            Отображено {{$bansCountCurrent}} из {{$bansCountAll}}
        </span>
        <span class="col-span-2"></span>
        @if ($bansCountCurrent < $bansCountAll)
            <!-- Pagination -->
            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center gap-5">
                        <li>
                        <button wire:loading.attr="disabled"
                                class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none  text-gray-600 bg-white border border-gray-100 shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700">
                                <div class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                    
                                wire:click="loadMoreBans()"> 
                                    Отобразить ещё {{$bansCountAll - $currentLength}}
                                    <i class="fa-solid fa-plus pr-1 pl-1"></i>
                                    </div>
                            </button>
                        </li>
                        <li>
                            <button wire:loading.attr="disabled"
                                class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none  text-gray-600 bg-white border border-gray-100 shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700">
                                <div class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                wire:click="loadAllBans()"> 
                                    Отобразить всё
                                    </div>
                            </button>
                        </li>
                    </ul>
                </nav>
            </span>
        @endif

    </div>
</div>