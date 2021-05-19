<?php

namespace App\Http\Livewire\Backends\Pertanyaanskema;

use Livewire\Component;
use App\Models\SkemaPenelitianQuestion;
use App\Models\SkemaPenelitian;

class Create extends Component
{
    public $pertanyaan;
    public $bobot;
    public $tipe_pertanyaan;
    public $skema_penelitian_id;

    protected $rules = [
        "pertanyaan"    => "required",
        "bobot"    => "required",
        "tipe_pertanyaan"    => "required",
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
        return view('livewire.backends.pertanyaanskema.create');
    }

    public function store()
    {
        $validate = $this->validate();
        $store = SkemaPenelitianQuestion::create([
            "pertanyaan"    => $this->pertanyaan,
            "bobot"    => $this->bobot,
            "tipe_pertanyaan"    => $this->tipe_pertanyaan,
            "skema_penelitian_id"    => $this->skema_penelitian_id,
        ]);

        session()->flash("success","Pertanyaan Skema Penelitian berhasil disimpan");
        return redirect()->route('backend.skema_penelitian.index');
    }
}
