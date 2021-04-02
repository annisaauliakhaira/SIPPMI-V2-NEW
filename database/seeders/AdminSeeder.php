<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create([
            'username' => 'admin_sistem',
            'name' => 'Administrator_Sistem',
            'password' => bcrypt('admin_sistem'),
            'email' => 'admin@admin.com',
            'type' => 3,
            'active' => 1
        ]);

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $system_roles = config('central.system_roles');

        $admin = null;
        foreach ($system_roles as $type => $role) {
            if ($type == 'admin_sistem')
                $admin = Role::create(['name' => $role]);
            else
                Role::create(['name' => $role]);
        }

        $permissions = [
            'user_access','users_manage', 'roles_access', 'roles_manage', 'dosen_access', 'dosen_manage', 'fakultas_access', 'fakultas_manage', 'prodi_access', 'prodi_manage', 'penelitian_access', 'penelitian_manage', 'pengabdian_access', 'skema_access', 'skema_manage','penelitian_submit', 'pengabdian_submit',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
            $admin->givePermissionTo($permission);
        }

        $user->assignRole('admin_sistem');
    }
}
