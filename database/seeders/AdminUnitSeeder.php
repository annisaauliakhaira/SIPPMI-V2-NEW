<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create([
            'username' => 'admin_unit',
            'name' => 'Administrator_Unit',
            'password' => bcrypt('admin_unit'),
            'email' => 'admin_unit@admin.com',
            'type' => 3,
            'active' => 1
        ]);

        $permissions = [
            'users_manage',
            'roles_access',
            'roles_manage',
            'dosen_access',
            'dosen_manage',
            'prodi_access',
            'prodi_manage',
            'penelitian_access',
            'penelitian_manage',
            'pengabdian_access',
            'penelitian_submit',
            'pengabdian_submit',
        ];

        $admin_unit = Role::findByName('admin_unit');
        if($admin_unit){
            $admin_unit->givePermissionTo($permissions);
        }

        $user->assignRole('admin_unit');
    }
}
