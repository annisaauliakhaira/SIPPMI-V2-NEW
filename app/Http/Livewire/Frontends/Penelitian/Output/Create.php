<?php

namespace App\Http\Livewire\Frontends\Penelitian\Output;

use App\Models\Penelitian;
use App\Models\PenelitianOutput;
use Livewire\Component;
use Carbon\Carbon;
use App\Models\SkemaPenelitianOutput;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $penelitian_output, $outputs, $penelitian;
    public $filename;

    public function mount(SkemaPenelitianOutput $penelitian_output, Penelitian $penelitian)
    {
        $this->penelitian_output = $penelitian_output;
        $this->penelitian = $penelitian;
    }

    public function render()
    {
        return view('livewire.frontends.penelitian.output.create', [
            'penelitian_outputs' => PenelitianOutput::where('skema_penelitian_output_id', $this->penelitian_output->id)->get(),
        ]);
    }

    public function storeOutput()
    {
        $outputs = new PenelitianOutput();
        if($this->filename){
            $name = auth()->user()->lecturer->nidn.$this->filename->extension();
            $outputs->filename = $this->filename->storeAs('filename', $name,'public');
        }
        $outputs->penelitian_id = $this->penelitian->id;
        $outputs->tanggal_upload = Carbon::now()->toDateString();
        $outputs->skema_penelitian_output_id = $this->penelitian_output->id;
        $outputs->save();

        session()->flash('success','Data output penelitian berhasil disimpan');
        return redirect()->route('frontend.penelitian.index.output');
    }
}
