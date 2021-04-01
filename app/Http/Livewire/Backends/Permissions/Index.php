<?php

namespace App\Http\Livewire\Backends\Permissions;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;

class Index extends Component
{
    public function render()
    {
        if (!Gate::allows('roles_access')) {
            return abort(401);
        }

        $permissions = Permission::all();

        return view('livewire.backends.permissions.index', compact('permissions'));
    }

}
