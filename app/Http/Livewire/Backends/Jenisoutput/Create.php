<?php

namespace App\Http\Livewire\Backends\Jenisoutput;

use Livewire\Component;
use App\Models\JenisOutput;

class Create extends Component
{
    public $code;
    public $luaran;

    protected $rules = [
        "code"  => "required",
        "luaran"=> "required",
    ];

    protected $messages = [
        "required"  => ":attribute wajib diisi",
    ];

    public function render()
    {
        return view('livewire.backends.jenisoutput.create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {

        $validate = $this->validate();
        $store = JenisOutput::create($validate);

        session()->flash('success','Data Jenis Output berhasil disimpan');
        return redirect()->route("backend.jenis_output.index");
    }
}
