<?php

namespace App\Http\Livewire\Backends\Fakultas;

use Livewire\Component;
use App\Models\Fakultas;

class Edit extends Component
{
    public $nama_fakultas;
    public $id_fakultas;

    public function mount(Fakultas $faculty)
    {
        if($faculty)
        {
            $this->id_fakultas = $faculty->id;
            $this->nama_fakultas = $faculty->nama;
        }
    }

    public function render()
    {
        return view('livewire.backends.fakultas.edit');
    }

    public function update()
    {
        $messages = [
            'required'  => ':attribute wajib diisi !',
        ];

        $this->validate(
        [
            "nama_fakultas"  => 'required',
        ],$messages);

        Fakultas::where('id',$this->id_fakultas)->update([
            "nama" => $this->nama_fakultas,
        ]);

        session()->flash('success','Data fakultas berhasil diupdate');

        return redirect()->route('backend.fakultas.index');
    }
}
