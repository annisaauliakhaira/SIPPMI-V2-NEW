<?php

namespace App\Http\Livewire\Backends\Penelitian;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use App\Models\Penelitian;

class Edit extends Component
{
    public function render($id)
    {
        if (!Gate::allows('penelitian_manage')) {
            return abort(401);
        }

        $penelitians = Penelitian::all();
        return view('livewire.backends.penelitian.edit', compact('penelitians'));
    }

    public function Update()
    {
        
    }
}
