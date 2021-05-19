<?php

namespace App\Http\Livewire\Backends\Prodi;

use Livewire\Component;
use App\Models\Prodi;
use App\Models\Fakultas;

class Index extends Component
{
    public $prodi;
    public $fakultas;

    protected $listeners = ['destroy'];

    public function render()
    {
        $this->prodi = Prodi::all();
        $this->fakultas = Fakultas::all();
        return view('livewire.backends.prodi.index');
    }

    public function destroy(Prodi $department)
    {
        $department->delete();
        $this->dispatchBrowserEvent('izitoast:success',[
            'message'   => 'Data skema penelitian berhasil dihapus',
            'title' => 'Berhasil'
        ]);
        return redirect()->back();
    }
}
