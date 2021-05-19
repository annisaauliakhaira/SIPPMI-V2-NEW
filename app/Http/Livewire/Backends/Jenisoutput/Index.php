<?php

namespace App\Http\Livewire\Backends\Jenisoutput;

use Livewire\Component;
use App\Models\JenisOutput;

class Index extends Component
{
    public $jenis_output;

    protected $listeners = ['destroy'];

    public function render()
    {
        $this->jenis_output = JenisOutput::all();
        return view('livewire.backends.jenisoutput.index');
    }

    public function destroyConfirmation($id)
    {
        $this->dispatchBrowserEvent('izitoast:confirm',[
            'title' => 'Konfirmasi',
            'message'   => 'Apakah anda yakin ingin menghapus data tersebut ?',
            'id'    => $id,
        ]);
    }

    public function destroy(JenisOutput $jenis_output)
    {
        $jenis_output->delete();
        $this->dispatchBrowserEvent('izitoast:success',[
            'message'   => 'Data jenis output berhasil dihapus',
            'title' => 'Berhasil'
        ]);
    }
}
