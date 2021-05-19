<?php

namespace App\Http\Livewire\Backends\Penelitian\Tambah;

use App\Models\Dosen;
use Livewire\Component;
use App\Models\Penelitian;
use App\Models\PenelitianAnggota;
use App\Models\PenelitianBiaya;

class Review extends Component
{
    public $penelitian, $dosen, $penelitian_anggota, $penelitian_biaya,  $ketua;

    public function mount(Penelitian $penelitian)
    {
        $this->penelitian = $penelitian;
    }

    public function render()
    {
        $this->dosen = Dosen::all();
        $this->penelitian_biaya = PenelitianBiaya::all();

        return view('livewire.backends.penelitian.tambah.review', [
            'penelitan_anggota_mahasiswas' => PenelitianAnggota::whereNull('dosen_id')->where('penelitian_id', $this->penelitian->id)->get(),
            'penelitian_dosen_ketua' => PenelitianAnggota::whereNotNull('dosen_id')->where('penelitian_id', $this->penelitian->id)->where('jabatan', '=', 'Ketua')->get(),
            'penelitian_dosen_anggota' => PenelitianAnggota::whereNotNull('dosen_id')->where('penelitian_id', $this->penelitian->id)->where('jabatan', '=', 'Anggota')->get(),
        ]);
    }

    public function next()
    {
        return redirect()->route('backend.penelitian.index', $this->penelitian);
    }

    public function back()
    {
        return redirect()->route('backend.penelitian.create.anggaran-biaya', $this->penelitian);
    }

    public function cancel(Penelitian $penelitian)
    {
        $this->penelitian = $penelitian;
        $this->penelitian->delete();
        
        return redirect()->route('backend.penelitian.index', $this->penelitian);
    }
}
