<?php

namespace App\Http\Livewire\Backends\Skema;

use Livewire\Component;
use App\Models\SkemaPenelitian;
use App\Models\Fakultas;

class Create extends Component
{
    public $fakultas;
    public $fakultas_id;
    public $nama;
    public $jangka_waktu;
    public $biaya_minimal;
    public $biaya_maksimal;
    public $sumber_dana;
    public $anggota_min;
    public $anggota_max;
    public $mahasiswa_min;
    public $mahasiswa_max;
    public $jabatan_ketua_min;
    public $jabatan_ketua_max;
    public $jabatan_anggota_min;
    public $jabatan_anggota_max;

    protected $rules = [
        "fakultas_id"   => "required",
        "nama"   => "required",
        "jangka_waktu"   => "required",
        "biaya_minimal"   => "required",
        "biaya_maksimal"   => "required",
        "sumber_dana"   => "required",
        "anggota_min"   => "required",
        "anggota_max"   => "required",
        "mahasiswa_min"   => "required",
        "mahasiswa_max"   => "required",
        "jabatan_ketua_min"   => "required",
        "jabatan_ketua_max"   => "required",
        "jabatan_anggota_min"   => "required",
        "jabatan_anggota_max"   => "required",
    ];

    protected $messages = [
        "required"  => ":attribute Wajib diisi",
    ];

    public function render()
    {
        $this->fakultas = Fakultas::all();
        return view('livewire.backends.skema.create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $validasi = $this->validate();
        SkemaPenelitian::create($validasi);

        session()->flash('success','Data skema penelitian berhasil disimpan');
        return redirect()->route('backend.skema_penelitian.index');
    }
}
