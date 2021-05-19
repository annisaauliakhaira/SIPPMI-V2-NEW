<?php

namespace App\Http\Livewire\Frontends\Penelitian\Output;

use Livewire\Component;
use App\Models\Penelitian;
use App\Models\PenelitianOutput;
use App\Models\SkemaPenelitianOutput;

class Index extends Component
{
    public $penelitian;
    protected $listeners = ['destroy','destroyOutput'];

    public function mount(Penelitian $penelitian)
    {
        $this->penelitian = $penelitian;
    }

    public function render()
    {
        return view('livewire.frontends.penelitian.output.index', [
            'penelitian_outputs' => SkemaPenelitianOutput::where('skema_penelitian_id', '=', $this->penelitian->skema_penelitian_periode->skema_penelitian_id)->get()
        ]);
    }

    public function checkActionOutput($skema_output_id, $penelitian_id)
    {
        $this->dispatchBrowserEvent('izitoast:minimenu',[
            'title' => 'Action Output',
            'message'   => 'Action Output',
            'skema_output_id'    => $skema_output_id,
            'penelitian_id'    => $penelitian_id,
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

    public function destroyOutput(PenelitianOutput $penelitianOutput)
    {
        $penelitianOutput->delete();
        $this->dispatchBrowserEvent('izitoast:success',[
            'message'   => 'Data periode skema penelitian berhasil dihapus',
            'title' => 'Berhasil'
        ]);
    }
}
