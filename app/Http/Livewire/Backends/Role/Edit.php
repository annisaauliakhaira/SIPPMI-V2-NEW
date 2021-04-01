<?php

namespace App\Http\Livewire\Backends\Role;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Edit extends Component
{
    public $name, $permit=[];
    public $role;

    public function mount(Role $role) 
    {
        $this->role=$role;
        $this->name=$role->name;
        $this->permit=$role->permissions()->pluck('name')->toArray();
    }
    
    public function render()
    {
        if (!Gate::allows('roles_manage')) {
            return abort(401);  
        }

        $permissions = Permission::all();
        $role = $this->role;
        return view('livewire.backends.role.edit', compact('role', 'permissions'));
    }

    public function update()
    {
        $this->validate([
            'name'=>'required',
            'permit'=>'required'
        ]);
        try {
            $role = $this->role->update(['name'=>$this->name]);
            $this->role->givePermissionTo($this->permit);

            notify('success', 'Data role berhasil ditambahkan');
        } catch (\Exception $e) {
            notify('error', 'Data role gagal ditambahkan');
        }

        return redirect()->route('backend.roles.index');
    }

}
