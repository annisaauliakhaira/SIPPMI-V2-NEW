<?php

namespace App\Http\Livewire\Backends\Dosen;

use Livewire\Component;
use App\Models\Dosen;
use App\Models\User;

class Index extends Component
{
    public $dosen;

    protected $listeners = ['destroy'];

    public function render()
    {
        $this->dosen = Dosen::all();
        return view('livewire.backends.dosen.index');
    }

    public function destroyConfirmation($id)
    {
        $this->dispatchBrowserEvent('izitoast:confirm',[
            'title' => 'Konfirmasi',
            'message'   => 'Apakah anda yakin ingin menghapus data tersebut ?',
            'id'    => $id,
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        $this->dispatchBrowserEvent('izitoast:success',[
            'message'   => 'Data fakultas berhasil dihapus',
            'title' => 'Berhasil'
        ]);
    }
}
