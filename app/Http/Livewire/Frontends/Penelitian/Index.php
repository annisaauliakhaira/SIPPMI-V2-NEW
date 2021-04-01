<?php

namespace App\Http\Livewire\Frontends\Penelitian;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class Index extends Component
{
    public function render()
    {
        if (!Gate::allows('penelitian_access')) {
            return abort(401);
        }

        return view('livewire.frontends.penelitian.index');
    }
}
