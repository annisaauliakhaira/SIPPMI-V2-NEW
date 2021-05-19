<?php

namespace App\Http\Livewire\Frontends\Penelitian;

use App\Models\{JenisOutput, SkemaPenelitianOutput,PenelitianOutput, Penelitian};
use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class Output extends Component
{   
    use WithFileUploads;
    public $penelitian_output;
    public $penelitian, $jenis_output, $output_skema;
    public $luaran, $filename, $tanggal_upload, $id_penelitian_output;

    public function mount(Penelitian $penelitian, SkemaPenelitianOutput $skemaPenelitianOutput, PenelitianOutput $penelitian_output)
    {
        $this->penelitian = $penelitian;
        if($penelitian){
            
        }
        $this->output_skema = $skemaPenelitianOutput;
        if($skemaPenelitianOutput){
            
        }
        $this->penelitian_output = $penelitian_output;
        if($penelitian_output){
            $this->id_penelitian_output = $penelitian_output->id;

        }
    }

    public function render()
    {
        $this->penelitian_output = PenelitianOutput::all()->where('penelitian_id', '=', $this->penelitian->id);
        $this->jenis_output = JenisOutput::all();
        return view('livewire.frontends.penelitian.output');
    }

    public function storeOutput()
    {
        $this->validate([
            'filename'  => 'required|file|mimes:pdf'
        ]);

        $penelitian_output = new PenelitianOutput();
        // if($this->edit){
        //     $penelitian_output = $this->penelitian_output;
        // }
        if($this->filename){
            $name = auth()->user()->lecturer->nidn.$this->filename->extension();
            $penelitian_output->filename = $this->filename->storeAs('filename', $name,'public');
        }
        $penelitian_output->tanggal_upload = Carbon::now()->toDateString();
        $penelitian_output->penelitian_id = $this->penelitian->id;
        $penelitian_output->skema_penelitian_output_id = $this->output_skema->id;
        $penelitian_output->save();
        dd($penelitian_output);
    }
}
