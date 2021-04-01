<?php

namespace App\Http\Livewire\Backends\Penelitian;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class Index extends Component
{
    public function render()
    {
        if (!Gate::allows('roles_access')) {
            return abort(401);
        }

        // $roles = Role::all();
        return view('livewire.backends.penelitian.index');
    }
}
