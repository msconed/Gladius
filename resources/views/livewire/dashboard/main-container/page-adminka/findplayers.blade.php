<div class="container px-6 mx-auto grid">
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Поиск игроков в базе данных сервера
    </h4>
    <div class="w-full overflow-x-auto">
        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="px-4 py-3 bg-white rounded-lg dark:bg-gray-800">
                <label class="block mt-4 text-sm">
                    <input wire:model.live.debounce.500ms="search"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        placeholder="Введите что-нибудь...">
                </label>
            </div>

        @if($data)
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Имя</th>
                    <th class="px-4 py-3">SteamID</th>
                    <th class="px-4 py-3">Действия</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @forelse ($data as $user)
                <tr class=" text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-sm">
                        {{$user['name']}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$user['steamid']}}
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                            <button title="Профиль игрока"
                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                aria-label="Edit">
                                <i class="fa-solid fa-user-pen"></i>
                            </button>
                            <button title="Забанить"
                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                aria-label="Delete">
                                <i class="fa-solid fa-ban"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>

        </table>
        @else

        @endif
        </div>
    </div>
</div>