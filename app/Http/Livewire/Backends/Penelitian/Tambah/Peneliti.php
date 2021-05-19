<?php

namespace App\Http\Livewire\Backends\Penelitian\Tambah;

use App\Models\{PenelitianAnggota, Dosen, Penelitian};
use Livewire\Component;

class Peneliti extends Component
{
    public $penelitian, $penelitian_anggotas;
    public $jabatan, $nama, $dosen_id, $identifier;

    public function mount(Penelitian $penelitian)
    {
        $this->penelitian = $penelitian;
    }
 
    public function render()
    {
        return view('livewire.backends.penelitian.tambah.peneliti', [
            'dosen' => Dosen::all(), 
            'penelitan_anggota_mahasiswas' => PenelitianAnggota::whereNull('dosen_id')->where('penelitian_id', $this->penelitian->id)->get(),
            'penelitian_anggota_dosens' => PenelitianAnggota::whereNotNull('dosen_id')->where('penelitian_id', $this->penelitian->id)->get() 
        ]);
    }

    public function storePeneliti()
    {
        $this->validate([
            'dosen_id'      => 'required',
            'jabatan'       => 'required',
        ]);
        $penelitian_anggotas = new PenelitianAnggota();
        $penelitian_anggotas->penelitian_id = $this->penelitian->id;
        $penelitian_anggotas->dosen_id = $this->dosen_id;
        $penelitian_anggotas->jabatan = $this->jabatan;
        $penelitian_anggotas->tipe = 1;
        $penelitian_anggotas->save();

        $this->resetInput();

    }

    public function storeMahasiswa()
    {
        $penelitian_anggotas = new PenelitianAnggota();
        $penelitian_anggotas->penelitian_id = $this->penelitian->id;
        $penelitian_anggotas->nama = $this->nama;
        $penelitian_anggotas->identifier = $this->identifier;
        $penelitian_anggotas->jabatan = "Anggota";
        $penelitian_anggotas->tipe = 2;
        $penelitian_anggotas->save();

        $this->resetInput();

    }

    public function resetInput()
    {
        $this -> nama = null;
        $this ->identifier = null;
        $this -> dosen_id = null;
        $this -> jabatan = null;
    }

    public function back()
    {
        return redirect()->route('backend.penelitian.create.ringkasan', $this->penelitian);
    }

    public function next()
    {
        return redirect()->route('backend.penelitian.create.anggaran-biaya', $this->penelitian);
    }

    public function destroy(PenelitianAnggota $penelitian_anggotas)
    {
        $this->penelitian_anggotas = $penelitian_anggotas;
        $this->penelitian_anggotas->delete();
        session()->flash('message', 'Penelitian Anggota Berhasil Dihapus');
    }
}
