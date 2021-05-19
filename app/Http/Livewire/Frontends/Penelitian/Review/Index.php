<?php

namespace App\Http\Livewire\Frontends\Penelitian\Review;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use App\Models\{Penelitian, PenelitianAnggota};

class Index extends Component
{
    public $penelitian, $penelitianAnggotas;
    public function render()
    {
        if (!Gate::allows('penelitian_access')) {
            return abort(401);
        }
        return view('livewire.frontends.penelitian.review.index', ['penelitian' =>Penelitian::all()], ['penelitianAnggotas' => PenelitianAnggota::all()]);
    }
    public function deleteModel(Penelitian $penelitian)
    {
        $this->penelitian = $penelitian;
    }

    public function destroy()
    {
        if($this->penelitian){
            $this->penelitian->delete();
        }
    }
}
