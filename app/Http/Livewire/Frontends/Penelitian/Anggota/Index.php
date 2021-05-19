<?php

namespace App\Http\Livewire\Frontends\Penelitian\Anggota;

use Livewire\Component;

class Index extends Component
{
    public $penelitianAnggota;
    
    public function render()
    {
        return view('livewire.frontends.penelitian.anggota.index');
    }
}
