<?php

namespace App\Http\Livewire\Backends\Fakultas;

use Livewire\Component;
use App\Models\Fakultas;

class Index extends Component
{
    public $fakultas;

    protected $listeners = ['destroy'];

    public function render()
    {
        $this->fakultas = Fakultas::all();
        return view('livewire.backends.fakultas.index');
    }

    public function destroyConfirmation($id)
    {
        $this->dispatchBrowserEvent('izitoast:confirm',[
            'title' => 'Konfirmasi',
            'message'   => 'Apakah anda yakin ingin menghapus data tersebut ?',
            'id'    => $id,
        ]);
    }

    public function destroy(Fakultas $faculty)
    {
        $faculty->delete();
        $this->dispatchBrowserEvent('izitoast:success',[
            'message'   => 'Data fakultas berhasil dihapus',
            'title' => 'Berhasil'
        ]);
    }
}
