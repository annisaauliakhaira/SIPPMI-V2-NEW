<?php

namespace App\Http\Livewire\Backends\Permissions;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;

class Edit extends Component
{
    public $name;
    public $permissions;

    public function mount(Permission $permissions)
    {
        $this->name=$permissions->name;
    }

    public function render() 
    {
        if (!Gate::allows('roles_manage')) {
            return abort(401);
        }
        $permissions = $this->permissions;
        return view('livewire.backends.permissions.edit', compact('permissions'));
    }

    public function update()
    {
        $this->validate([
            'name'=>'required'
        ]);
        try {
            $permissions = $this->permissions->update(['name'=>$this->name]);
            $this->permissions->givePermissionTo($this->permissions);

            notify('success', 'Data permission berhasil ditambahkan');
        } catch (\Exception $e) {
            notify('error', 'Data permission gagal ditambahkan');
        }

        return redirect()->route('backend.permissions.index');
    }
}
