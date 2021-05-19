<?php

namespace App\Http\Livewire\Backends\Periodeskema;

use Livewire\Component;
use App\Models\SkemaPenelitianPeriode;

class Index extends Component
{
    public $skema_penelitian_periode;

    public function render()
    {
        $this->skema_penelitian_periode = SkemaPenelitianPeriode::all();
        return view('livewire.backends.periodeskema.index');
    }
}
