<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleAndPermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'edit-donat-items']);
        Permission::create(['name' => 'removeBan']);
        Permission::create(['name' => 'addBan']);
        Permission::create(['name' => 'edit-vip']);
        Permission::create(['name' => 'admin-panel']);

        $superAdminRole = Role::create(['name' => 'SuperAdmin']);
        $adminRole = Role::create(['name' => 'Admin']);

        $superAdminRole->givePermissionTo([
            'edit-donat-items',
            'removeBan',
            'addBan',
            'edit-vip',
            'admin-panel',
        ]);
        
        $steam_ids_admins = ['76561198117193690', '76561199205919397', '76561199446759725'];

        foreach ($steam_ids_admins as $steam_id) {
            $user = User::where(['steamid' => $steam_id])->first();
            if($user) {
                $user->assignRole('SuperAdmin');
            }
        }
        

        

        // $adminRole->givePermissionTo([
        //     'create-blog-posts',
        //     'edit-blog-posts',
        //     'delete-blog-posts',
        // ]);
    }
}