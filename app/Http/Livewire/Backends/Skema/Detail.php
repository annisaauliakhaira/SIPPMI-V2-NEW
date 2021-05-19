<?php

namespace App\Http\Livewire\Backends\Skema;

use Livewire\Component;
use App\Models\SkemaPenelitian;

class Detail extends Component
{
    public $data_skema_penelitian;
    public function mount(SkemaPenelitian $skema_penelitian)
    {
        if($skema_penelitian)
        {
            $this->data_skema_penelitian = $skema_penelitian;
        }
    }

    public function render()
    {
        return view('livewire.backends.skema.detail');
    }
}
