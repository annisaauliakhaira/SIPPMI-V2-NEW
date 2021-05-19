<?php

namespace App\Http\Livewire\Backends\Skema;

use Livewire\Component;
use App\Models\SkemaPenelitian;
use App\Models\Fakultas;

class Edit extends Component
{
    public $id_skema;
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

    public function mount(SkemaPenelitian $skema_penelitian)
    {
        if($skema_penelitian)
        {
            $this->id_skema = $skema_penelitian->id;
            $this->fakultas_id = $skema_penelitian->fakultas_id;
            $this->nama = $skema_penelitian->nama;
            $this->jangka_waktu = $skema_penelitian->jangka_waktu;
            $this->biaya_minimal = $skema_penelitian->biaya_minimal;
            $this->biaya_maksimal = $skema_penelitian->biaya_maksimal;
            $this->sumber_dana = $skema_penelitian->sumber_dana;
            $this->anggota_min = $skema_penelitian->anggota_min;
            $this->anggota_max = $skema_penelitian->anggota_max;
            $this->mahasiswa_min = $skema_penelitian->mahasiswa_min;
            $this->mahasiswa_max = $skema_penelitian->mahasiswa_max;
            $this->jabatan_ketua_max = $skema_penelitian->jabatan_ketua_max;
            $this->jabatan_ketua_min = $skema_penelitian->jabatan_ketua_min;
            $this->jabatan_anggota_max = $skema_penelitian->jabatan_anggota_max;
            $this->jabatan_anggota_min = $skema_penelitian->jabatan_anggota_min;
        }
    }

    public function render()
    {
        $this->fakultas = Fakultas::all();
        return view('livewire.backends.skema.edit');
    }

    public function update()
    {
        $validate = $this->validate();
        $update = SkemaPenelitian::where("id",$this->id_skema)->update($validate);

        session()->flash('success','Data skema penelitian berhasil diupdate');
        return redirect()->route('backend.skema_penelitian.index');
    }
}
