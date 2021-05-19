<?php

namespace App\Http\Livewire\Backends\Penelitian\Tambah;

use App\Models\Dosen;
use App\Models\Penelitian;
use App\Models\SkemaPenelitianPeriode;
use Livewire\Component;

class Ringkasan extends Component
{
    public $penelitian, $skema, $pengusul;
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
        $this->pengusul = Dosen::all();
        return view('livewire.backends.penelitian.tambah.ringkasan');
    }

    public function store()
    {
        $this->penelitian->update(['ringkasan'=>$this->ringkasan]);
        return redirect()->route('backend.penelitian.create.peneliti', $this->penelitian);
    }

    public function back()
    {
        return redirect()->route('backend.penelitian.create.informasi-dasar', $this->penelitian);
    }
}
