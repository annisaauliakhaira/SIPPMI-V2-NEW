<?php

namespace App\Http\Livewire\Backends\Penelitian;

use Livewire\Component;
use App\Models\{Penelitian, PenelitianAnggota};

class Detail extends Component
{
    public $penelitian, $dosen, $penelitian_anggota, $penelitian_biaya,  $ketua;
    public $status_usulan;
 
    public function mount(Penelitian $penelitian)
    {
        $this->penelitian = $penelitian;
        $this->edit = $penelitian ? true : false;
        if($this->edit){
            $this->status_usulan = $penelitian->status_usulan;
        }
    }
    public function render()
    {
        return view('livewire.backends.penelitian.detail', [
            'penelitan_anggota_mahasiswas' => PenelitianAnggota::whereNull('dosen_id')->where('penelitian_id', $this->penelitian->id)->get(),
            'penelitian_dosen_ketua' => PenelitianAnggota::whereNotNull('dosen_id')->where('penelitian_id', $this->penelitian->id)->where('jabatan', '=', 'Ketua')->get(),
            'penelitian_dosen_anggota' => PenelitianAnggota::whereNotNull('dosen_id')->where('penelitian_id', $this->penelitian->id)->where('jabatan', '=', 'Anggota')->get(),
            'status_penelitians' => Penelitian::status_penelitian

        ]);
    }

    public function updatedStatusUsulan()
    {
        $this->penelitian->update(['status_usulan'=>$this->status_usulan]);
    }
}
