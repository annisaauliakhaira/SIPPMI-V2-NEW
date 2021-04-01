<?php

namespace App\Http\Livewire\Frontends\Penelitian;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use App\Models\Penelitian;
use App\Models\SkemaPenelitianPeriode as Skema;

class Create extends Component
{
    public $step;
    public $anggaran_biaya = 1, $form_biaya = [];
    public $keterangan = [], $biaya = [];

    public function mount()
    {
        $this->step == 0;
        
    }

    public function increaseStep()
    {
        $this->step++;
    }

    public function decreaseStep()
    {
        $this->step--;
    }

    public function render()
    {
        if (!Gate::allows('penelitian_manage')) {
            return abort(401);
       }
       $penelitians = Penelitian::all();
        return view('livewire.frontends.penelitian.create', ['skemas' => Skema::all()]);
    }

    public function store()
    {
        // $penelitian = Penelitian::create([

        // ]);
        // Penelitian_biaya::create([
        //     'id_penelitian' => $penelitian->id,
        //     'keterangan' => $this->keterangan[1],
        //     'biaya' =>$this->biaya[1]
        // ]);
        // foreach ($this->form_biaya as $value) {
        //     Penelitian_biaya::create([
        //         'keterangan' => $this->keterangan[$value],
        //         'biaya' =>$this->biaya[$value]
        //     ]);
        // }
    }

    public function addAnggaranBiaya($i)
    {
        $i = $i + 1;
        $this->anggaran_biaya = $i;
        array_push($this->form_biaya ,$i);
    }

    public function removeAnggaranBiaya($i)
    {
        unset($this->form_biaya[$i]);
    }

    
}
