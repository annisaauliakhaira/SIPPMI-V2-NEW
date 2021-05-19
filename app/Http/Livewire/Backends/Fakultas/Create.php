<?php

namespace App\Http\Livewire\Backends\Fakultas;

use Livewire\Component;
use App\Models\Fakultas;

class Create extends Component
{
    public $fakultas;
    public $nama_fakultas;

    public function mount()
    {

    }

    public function render()
    {
        $this->fakultas = Fakultas::all();
        return view('livewire.backends.fakultas.create');
    }

    public function store()
    {
        $messages = [
            'required'  => ':attribute wajib diisi !',
        ];

        $this->validate(
        [
            "nama_fakultas"  => 'required',
        ],$messages);

        Fakultas::create([
            "nama"  => $this->nama_fakultas,
        ]);

        session()->flash('success','Data fakultas berhasil disimpan');

        return redirect()->route('backend.fakultas.index');
    }
}
