
<div class="w-full overflow-hidden rounded-lg shadow-xs">
@if ($myStatistics)
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    </h2>

    
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Моя статистика
    </h4>
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Убитов игроков</th>
                    <th class="px-4 py-3">Уничтожено техники</th>
                    <th class="px-4 py-3">Уничтожено бронетехники</th>
                    <th class="px-4 py-3">Уничтожено вертолётов</th>
                    <th class="px-4 py-3">Уничтожено самолётов</th>
                    <th class="px-4 py-3">Наиграно часов</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                <tr class="'text-gray-700 dark:text-gray-400'">
                    <td class="px-4 py-3 text-sm">
                        {{$myStatistics['man_kills_total']}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$myStatistics['car_kills_total']}}
                    </td>
                    <td class="px-4 py-3 text-xs">
                        {{$myStatistics['tank_kills_total']}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$myStatistics['heli_kills_total']}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$myStatistics['plane_kills_total']}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{round($myStatistics['playtime_total'] / 60)}}
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    @endif

</div>
