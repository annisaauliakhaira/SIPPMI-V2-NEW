<?php

namespace App\Http\Livewire\Backends\Skema;

use Livewire\Component;
use App\Models\SkemaPenelitian;
use App\Models\SkemaPenelitianPeriode;
use App\Models\SkemaPenelitianQuestion;

class Index extends Component
{
    public $skema_penelitian;

    protected $listeners = ['destroy','destroyPeriode','destroyQuestion'];

    public function render()
    {
        $this->skema_penelitian = SkemaPenelitian::all();
        return view('livewire.backends.skema.index');
    }

    public function checkActionPeriode($id)
    {
        $this->dispatchBrowserEvent('izitoast:minimenu1',[
            'title' => 'Action Periode',
            'message'   => 'Action Periode',
            'id'    => $id,
        ]);
    }

    public function checkActionQuestion($id)
    {
        $this->dispatchBrowserEvent('izitoast:minimenu2',[
            'title' => 'Action Question',
            'message'   => 'Action Question',
            'id'    => $id,
        ]);
    }

    public function destroyConfirm($id)
    {
        $this->dispatchBrowserEvent('izitoast:confirm',[
            'title' => 'Konfirmasi',
            'message'   => 'Apakah anda yakin ingin menghapus data tersebut ?',
            'id'    => $id,
        ]);
    }

    public function destroyPeriode(SkemaPenelitianPeriode $skema_penelitian_periode)
    {
        $skema_penelitian_periode->delete();
        $this->dispatchBrowserEvent('izitoast:success',[
            'message'   => 'Data periode skema penelitian berhasil dihapus',
            'title' => 'Berhasil'
        ]);
    }

    public function destroyQuestion(SkemaPenelitianQuestion $skema_penelitian_question)
    {
        $skema_penelitian_question->delete();
        $this->dispatchBrowserEvent('izitoast:success',[
            'message'   => 'Data pertanyaan skema penelitian berhasil dihapus',
            'title' => 'Berhasil'
        ]);
    }

    public function destroy(SkemaPenelitian $skema_penelitian)
    {
        $skema_penelitian->delete();
        $this->dispatchBrowserEvent('izitoast:success',[
            'message'   => 'Data skema penelitian berhasil dihapus',
            'title' => 'Berhasil'
        ]);
    }
}
