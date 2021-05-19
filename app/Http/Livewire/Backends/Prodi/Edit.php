<?php

namespace App\Http\Livewire\Backends\Prodi;

use Livewire\Component;
use App\Models\Prodi;
use App\Models\Fakultas;

class Edit extends Component
{
    public $fakultas;
    public $prodi;

    public $id_prodi;
    public $nama_prodi;
    public $fakultas_id;
    public $kode;
    public $kode_dikti;
    public $akreditasi;

    public function mount(Prodi $department)
    {
        if($department)
        {
            $this->fakultas = Fakultas::all();
            $this->id_prodi = $department->id;
            $this->nama_prodi = $department->nama;
            $this->kode = $department->kode;
            $this->kode_dikti = $department->kode_dikti;
            $this->akreditasi = $department->akreditasi;
            $this->fakultas_id = $department->fakultas_id;
        }
    }

    public function render()
    {
        return view('livewire.backends.prodi.edit');
    }

    public function update()
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

        Prodi::where('id',$this->id_prodi)->update([
            "nama"          => $this->nama_prodi,
            "fakultas_id"   => $this->fakultas_id,
            "kode"          => $this->kode,
            "kode_dikti"    => $this->kode_dikti,
            "akreditasi"    => $this->akreditasi,
        ]);

        session()->flash('success','Data prodi berhasil diupdate');

        return redirect()->route('backend.prodi.index');
    }
}
