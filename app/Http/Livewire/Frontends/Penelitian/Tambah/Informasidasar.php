<?php

namespace App\Http\Livewire\Frontends\Penelitian\Tambah;

use App\Models\{
    Penelitian,
    Prodi, 
    SkemaPenelitianPeriode as Skema
};
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Informasidasar extends Component
{
    use WithFileUploads;
    public $penelitian;
    public $edit = false;
    public $prodi, $skema, $multi_tahun, $biaya, $judul, $skema_id, $prodi_id, $file_cv, $file_keuangan, $file_pengesahan, $file_proposal;

    public function mount(Penelitian $penelitian)
    {
        $this->penelitian = $penelitian;
        $this->edit = $penelitian ? true : false;

        if($this->edit){
            $this->prodi_id = $penelitian->prodi_id;
            $this->skema_id = $penelitian->skema_penelitian_periode_id;
            $this->multi_tahun = $penelitian->multi_tahun;
            $this->biaya = $penelitian->biaya;
            $this->judul = $penelitian->judul;
            $this->file_cv = $penelitian->file_cv;
            $this->file_keuangan = $penelitian->file_keuangan;
            $this->file_proposal = $penelitian->file_proposal;
            $this->file_pengesahan = $penelitian->file_pengesahan;
        }
    }

    public function render()
    {
        $this->prodi = Prodi::all();
        $this->skema = Skema::all();
        return view('livewire.frontends.penelitian.tambah.informasidasar');
    }

    public function store()
    {
        $this->validate([
            'judul'                         => 'required',
            'skema_id'                      => 'required',
            'multi_tahun'                   => 'required',
            'biaya'                         => 'required',
            'file_cv'                       => $this->edit ? 'nullable|file|mimes:pdf' : 'required|file|mimes:pdf',
            'file_keuangan'                 => $this->edit ? 'nullable|file|mimes:pdf' : 'required|file|mimes:pdf',
            'file_proposal'                 => $this->edit ? 'nullable|file|mimes:pdf' : 'required|file|mimes:pdf',
            'file_pengesahan'               => $this->edit ? 'nullable|file|mimes:pdf' : 'required|file|mimes:pdf',
        ]);

        $penelitian = new Penelitian();
        if($this->edit){
            $penelitian = $this->penelitian;
        }
        // dd(auth()->user()->lecturer->nama);

        if($this->file_cv){
            $fileName = auth()->user()->lecturer->nidn.$this->file_cv->extension();
            $penelitian->file_cv = $this->file_cv->storeAs('file_cv', $fileName,'public');

        }

        if($this->file_proposal){
            $fileName = auth()->user()->lecturer->nidn.$this->file_proposal->extension();
            $penelitian->file_proposal = $this->file_proposal->storeAs('file_proposal', $fileName,'public');
        }

        if($this->file_keuangan){
            $fileName = auth()->user()->lecturer->nidn.$this->file_keuangan->extension();
            $penelitian->file_keuangan = $this->file_keuangan->storeAs('file_keuangan', $fileName,'public');
        }
        
        if($this->file_pengesahan){
            $fileName = auth()->user()->lecturer->nidn.$this->file_pengesahan->extension();
            $penelitian->file_pengesahan = $this->file_pengesahan->storeAs('file_pengesahan', $fileName,'public');
        }

        $penelitian->judul = $this->judul;
        $penelitian->prodi_id = $this->prodi_id;
        $penelitian->skema_penelitian_periode_id = $this->skema_id;
        $penelitian->multi_tahun = $this->multi_tahun;
        $penelitian->biaya = $this->biaya;
        $penelitian->pengusul_id = Auth::id();
        $penelitian->status_usulan = 0;
        $penelitian->save();
        // dd($penelitian);
        
        return redirect()->route('frontend.penelitian.create.ringkasan', ['penelitian'=>$penelitian]);
    } 


}
