<?php

namespace App\Http\Livewire\Backends\Periodeskema;

use Livewire\Component;
use App\Models\SkemaPenelitianPeriode;

class Edit extends Component
{
    public $nama;
    public $id_skema_penelitian_periode;
    public $skema_penelitian_id;
    public $tanggal_mulai_registrasi;
    public $tanggal_akhir_registrasi;
    public $tanggal_mulai_penelitian;
    public $tanggal_akhir_penelitian;

    protected $rules = [
        "nama"                       => "required",
        "tanggal_mulai_registrasi"   => "required",
        "tanggal_akhir_registrasi"   => "required",
        "tanggal_mulai_penelitian"   => "required",
        "tanggal_akhir_penelitian"   => "required",
    ];

    protected $messages = [
        "required"  => ":attribute wajib diisi",
    ];

    public function mount(SkemaPenelitianPeriode $skema_penelitian_periode)
    {
        if($skema_penelitian_periode)
        {
            $this->nama = $skema_penelitian_periode->nama;
            $this->id_skema_penelitian_periode = $skema_penelitian_periode->id;
            $this->skema_penelitian_id = $skema_penelitian_periode->skema_penelitian_id;
            $this->tanggal_mulai_registrasi = $skema_penelitian_periode->tanggal_mulai_registrasi;
            $this->tanggal_akhir_registrasi = $skema_penelitian_periode->tanggal_akhir_registrasi;
            $this->tanggal_mulai_penelitian = $skema_penelitian_periode->tanggal_mulai_penelitian;
            $this->tanggal_akhir_penelitian = $skema_penelitian_periode->tanggal_akhir_penelitian;
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.backends.periodeskema.edit');
    }

    public function update()
    {
        $validate = $this->validate();
        $update = SkemaPenelitianPeriode::where('id',$this->id_skema_penelitian_periode)->update([
            "nama"                       => $this->nama,
            "tanggal_mulai_registrasi"   => $this->tanggal_mulai_registrasi,
            "tanggal_akhir_registrasi"   => $this->tanggal_akhir_registrasi,
            "tanggal_mulai_penelitian"   => $this->tanggal_mulai_penelitian,
            "tanggal_akhir_penelitian"   => $this->tanggal_akhir_penelitian,
        ]);

        session()->flash('success','Data periode skema penelitian berhasil diupdate');
        return redirect()->route('backend.skema_penelitian.index');
    }
}
