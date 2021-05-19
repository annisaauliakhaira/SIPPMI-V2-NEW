<?php

namespace App\Http\Livewire\Backends\Jenisoutput;

use Livewire\Component;
use App\Models\JenisOutput;

class Edit extends Component
{
    public $id_jenis_output;
    public $code;
    public $luaran;

    protected $rules = [
        "code"  => "required",
        "luaran"=> "required",
    ];

    protected $messages = [
        "required"  => ":attribute wajib diisi",
    ];

    public function mount(JenisOutput $jenis_output)
    {
        if($jenis_output)
        {
            $this->id_jenis_output = $jenis_output->id;
            $this->code = $jenis_output->code;
            $this->luaran = $jenis_output->luaran;
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.backends.jenisoutput.edit');
    }

    public function update()
    {
        $validate = $this->validate();
        $update = JenisOutput::where("id",$this->id_jenis_output)->update($validate);

        session()->flash('success','Data jenis output berhasil diupdate');
        return redirect()->route("backend.jenis_output.index");
    }
}
