<?php

namespace App\Livewire\Dashboard\MainContainer\PageAdminka;

use Livewire\Component;
use App\Helpers\ArmaServerDB;
use Livewire\Attributes\Validate;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DonatItemsForm extends Component
{
    #[Validate('required', message: 'Выберите действие')]
    public $mode; // Забрать или выдать ('add' or 'take')
    #[Validate('required', message: 'Выберите набор снаряжения')]
    public $itemName; // Название сета как столбец в БД
    #[Validate('required', message: 'Впишите SteamID игрока')]
    public $target_steam_id;
    public $items;
    public $donat_columns = [];

    public function save()
    {
        $this->validate([
            'mode' => 'required',
            'target_steam_id' => 'required',
            'itemName' => 'required',
        ]);

        if (!(ArmaServerDB::isCreatedUser($this->target_steam_id)))
        {
            $this->dispatch('donatItemsUpdated', message: "Игрока нет в базе данных", type: 'error');
            return;
        }


        if (ArmaServerDB::updateDonatSet($this->target_steam_id, $this->itemName, $this->mode))
        {
            $this->dispatch('donatItemsUpdated', message: "Действие успешно выполнено!", type:'success'  );
        } else {
            $this->dispatch('donatItemsUpdated', message: "Произошла ошибка... попробуйте позже...", type: 'error'  );
        }
    }

    public function mount()
    {   
        $items = [  
                    ['Полный WAGNER сет', 'WAGNER_SET'], ['WANGER Снайпер', 'RU_SNIPER'], ['WAGNER Штурмовик', 'RU_STORMER'],
                    ['WAGNER Гранатомётчик', 'RU_GRENADER'], ['WAGNER БПЛА', 'RU_SPECUAV'],['WAGNER Пулемётчик', 'RU_GUNNER'],
                    ['WAGNER Командир', 'RU_COMMANDER'],

                    ['Полный ОШБ сет', 'DYNCORP_SET'], ['ОШБ Снайпер', 'UA_SNIPER'], ['ОШБ Штурмовик', 'UA_STORMER'],
                    ['ОШБ Гранатомётчик', 'UA_GRENADER'], ['ОШБ БПЛА', 'UA_SPECUAV'],  ['ОШБ Пулемётчик', 'UA_GUNNER'],
                    ['ОШБ Командир', 'UA_COMMANDER'], 
                    
                    ['[RU] Спец. набор БПЛА', 'specialUAV_RU'],  ['[UA] Спец. набор БПЛА', 'specialUAV_UA']
        ];
        
        $this->donat_columns = $items;
    }

    public function render()
    {
        return view('livewire.dashboard.main-container.page-adminka.donat-items-form');
    }

}
