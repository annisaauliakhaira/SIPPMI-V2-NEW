<?php

namespace App\Http\Livewire\Frontends\Penelitian\Tambah;

use Livewire\Component;
use App\Models\{Penelitian, PenelitianBiaya};

class Anggaranbiaya extends Component
{
    public $penelitian;
    public $penelitian_biayas;
    public  $jumlah_final=0;
    public $penelitian_id, $biaya_skema_id, $satuan, $jumlah, $harga_satuan;

    public function mount(Penelitian $penelitian)
    {
        $this->penelitian = $penelitian;
    }

    public function render()
    {
        $this->penelitian_biayas = PenelitianBiaya::where('penelitian_id', $this->penelitian->id)->get();
        // $this->skemas = BiayaSkema::all();
        return view('livewire.frontends.penelitian.tambah.anggaranbiaya');
    }

    public function CountJumlah()
    {
        $this->jumlah_final = ($this->jumlah) * ($this->harga_satuan);
        return $this->jumlah_final;

    }

    public function store()
    {
        $penelitian_biayas = new PenelitianBiaya();
        $penelitian_biayas->penelitian_id = $this->penelitian->id;
        // $penelitian_biayas->biaya_skema_id = $this->skemas->id;
        $penelitian_biayas->satuan = $this->satuan;
        $penelitian_biayas->jumlah = $this->jumlah;
        $penelitian_biayas->jumlah_final = $this->CountJumlah();
        $penelitian_biayas->harga_satuan_final = $this->harga_satuan;
        $penelitian_biayas->save();

        $this->resetInput();
        // dd($penelitian_biayas);

        // return redirect()->route('frontend.penelitian.create.anggaran-biaya', $this->penelitian);
    }

    public function resetInput()
    {
        $this -> satuan = null;
        $this ->jumlah = null;
        $this -> jumlah_final = null;
        $this -> harga_satuan = null;
    }

    public function back()
    {
        return redirect()->route('frontend.penelitian.create.peneliti', $this->penelitian);
    }

    public function next()
    {
        return redirect()->route('frontend.penelitian.create.review-penelitian', $this->penelitian);
    }

    public function destroy(PenelitianBiaya $penelitian_biaya)
    {
        $this->penelitian_biayas = $penelitian_biaya;
        $this->penelitian_biayas->delete();
    }
    
}
