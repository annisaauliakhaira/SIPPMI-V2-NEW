<?php

namespace App\Http\Livewire\Backends\Periodeskema;

use Livewire\Component;
use App\Models\SkemaPenelitianPeriode;
use App\Models\SkemaPenelitian;
use App\Models\Fakultas;

class Create extends Component
{
    public $nama;
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

    public function mount(SkemaPenelitian $skema_penelitian)
    {
        if($skema_penelitian)
        {
            $this->skema_penelitian_id = $skema_penelitian->id;
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.backends.periodeskema.create');
    }

    public function store()
    {
        $validate = $this->validate();
        $store = SkemaPenelitianPeriode::create([
            "nama"                       => $this->nama,
            "skema_penelitian_id"        => $this->skema_penelitian_id,
            "tanggal_mulai_registrasi"   => $this->tanggal_mulai_registrasi,
            "tanggal_akhir_registrasi"   => $this->tanggal_akhir_registrasi,
            "tanggal_mulai_penelitian"   => $this->tanggal_mulai_penelitian,
            "tanggal_akhir_penelitian"   => $this->tanggal_akhir_penelitian,
        ]);

        session()->flash('success','Data periode penelitian berhasil disimpan');
        return redirect()->route('backend.skema_penelitian.index');
    }
}
