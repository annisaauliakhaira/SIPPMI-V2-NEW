<?php

namespace App\Http\Livewire\Backends\Pertanyaanskema;

use Livewire\Component;
use App\Models\SkemaPenelitianQuestion;

class Edit extends Component
{
    public $id_skema_penelitian_question;
    public $skema_penelitian_id;
    public $pertanyaan;
    public $bobot;
    public $tipe_pertanyaan;

    protected $rules = [
        "pertanyaan"    => "required",
        "bobot"    => "required",
        "tipe_pertanyaan"    => "required",
    ];

    protected $messages = [
        "required"  => ":attribute wajib diisi",
    ];

    public function mount(SkemaPenelitianQuestion $skema_penelitian_question)
    {
        if($skema_penelitian_question)
        {
            $this->skema_penelitian_id = $skema_penelitian_question->skema_penelitian_id;
            $this->id_skema_penelitian_question = $skema_penelitian_question->id;
            $this->pertanyaan = $skema_penelitian_question->pertanyaan;
            $this->bobot = $skema_penelitian_question->bobot;
            $this->tipe_pertanyaan = $skema_penelitian_question->tipe_pertanyaan;
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.backends.pertanyaanskema.edit');
    }

    public function update()
    {
        $validate = $this->validate();
        $update = SkemaPenelitianQuestion::where('id',$this->id_skema_penelitian_question)->update($validate);

        session()->flash("success","Data berhasil diupdate");
        return redirect()->route('backend.skema_penelitian.index');
    }
}
