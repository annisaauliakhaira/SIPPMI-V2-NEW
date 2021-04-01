<?php

namespace App\Http\Livewire\Backends\Role;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Http\Requests\Admin\StoreRolesRequest;

class Create extends Component
{
    public $name, $permit=[];

    public function render()
    {
        if (!Gate::allows('roles_manage')) {
            return abort(401);
        }
        $permissions = Permission::all();
        return view('livewire.backends.role.create', compact('permissions'));
    }

    public function store()
    {
        $this->validate([
            'name'=>'required',
            'permit'=>'required'
        ]);
        try {
            $role = Role::create(['name'=>$this->name]);
            $role->givePermissionTo($this->permit);

            notify('success', 'Data role berhasil ditambahkan');
        } catch (\Exception $e) {
            notify('error', 'Data role gagal ditambahkan');
        }

        return redirect()->route('backend.roles.index');
    }
}
