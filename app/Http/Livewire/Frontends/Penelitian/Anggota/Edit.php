<?php

namespace App\Http\Livewire\Frontends\Penelitian\Anggota;

use Livewire\Component;

class Edit extends Component
{
    
    public $updateMode = false;
    public function render()
    {
        return view('livewire.frontends.penelitian.anggota.edit');
    }
}
