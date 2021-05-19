<?php

namespace App\Http\Livewire\Backends\Prodi;

use Livewire\Component;
use App\Models\Prodi;
use App\Models\Fakultas;

class Create extends Component
{
    public $fakultas;
    public $nama_prodi;
    public $fakultas_id;
    public $kode;
    public $kode_dikti;
    public $akreditasi;

    public function render()
    {
        $this->fakultas = Fakultas::all();
        return view('livewire.backends.prodi.create');
    }

    public function store()
    {
        $messages = [
            "required"  => ":attribute wajib diisi",
        ];

        $this->validate([
            "nama_prodi"    => "required",
            "kode"          => "required",
            "kode_dikti"    => "required",
            "akreditasi"    => "required",
        ],$messages);

        Prodi::create([
            "nama"          => $this->nama_prodi,
            "fakultas_id"   => $this->fakultas_id,
            "kode"          => $this->kode,
            "kode_dikti"    => $this->kode_dikti,
            "akreditasi"    => $this->akreditasi,
        ]);

        session()->flash('success','Data prodi berhasil disimpan');

        return redirect()->route('backend.prodi.index');
    }
}
