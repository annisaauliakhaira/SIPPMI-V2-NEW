<?php

namespace App\Http\Livewire\Frontends\Penelitian\Tambah;

use App\Models\Penelitian;
use App\Models\SkemaPenelitianPeriode;
use Livewire\Component;

class Ringkasan extends Component
{

    public $penelitian, $skema;
    public $ringkasan, $judul;

    public function mount(Penelitian $penelitian)
    {
        $this->penelitian = $penelitian;
        $this->edit = $penelitian ? true : false;
        if($this->edit){
            $this->ringkasan = $penelitian->ringkasan;
        }
    }

    public function render()
    { 
        $this->skema = SkemaPenelitianPeriode::all();
        return view('livewire.frontends.penelitian.tambah.ringkasan');
    }

    public function store()
    {
        $this->penelitian->update(['ringkasan'=>$this->ringkasan]);
        // dd($this->penelitian);
        return redirect()->route('frontend.penelitian.create.peneliti', $this->penelitian);
    }

    public function back()
    {
        return redirect()->route('frontend.penelitian.create.informasi-dasar', $this->penelitian);
    }
}
