
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Изменение доступа к донат шмоту
        </h2>
        <form wire:submit="save" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">SteamID игрока</span>
                <input wire:model="target_steam_id"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="123456789">
                <div class="text-red-600">@error('target_steam_id') {{ $message }} @enderror</div>
            </label>

            <div class="mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                    Тип действия
                </span>
                <div class="mt-2">
                    <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                        <input type="radio"
                            class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            name="setItemMode" value="1" wire:model="mode">
                        <span class="ml-2">Выдать</span>
                    </label>
                    <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                        <input type="radio"
                            class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            name="setItemMode" value="0" wire:model="mode">
                        <span class="ml-2">Забрать</span>
                    </label>
                    <div class="text-red-600">@error('mode') {{ $message }} @enderror</div>
                </div>
            </div>
            <label class="block mt-4 text-sm">

                <select wire:model="itemName" id="itemName"
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <option value="">Выберите набор снаряжения</option>
                    @forelse ($donat_columns as $item)
                    <option value="{{ $item[1] }}">{{ $item[0] }}</option>
                    @empty
                    @endforelse
                </select>
                <div class="text-red-600">@error('itemName') {{ $message }} @enderror</div>
            </label>


            <div class="flex mt-6 text-sm">
                <button type="submit"
                    class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none  text-gray-600 bg-white border border-gray-100 shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700">
                    <span
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="http://127.0.0.1:8000/logout">
                        <span>Применить</span>
                    </span>
                </button>
            </div>
        </form>
        <div>
        </div>

    </div>
    @script
    <script>
        $wire.on('donatItemsUpdated', (event) => {
           // alert();
            createToast(type = event.type, title = "", text = event.message)
        });
    </script>
    @endscript
