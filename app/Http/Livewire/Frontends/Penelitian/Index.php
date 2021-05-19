<?php

namespace App\Http\Livewire\Frontends\Penelitian;

use Livewire\Component;
use App\Models\Penelitian;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $penelitianAnggotas, $searchTerm;

    public function render()
    {

        $searchTerm = '%'.$this->searchTerm .'%';
        
        return view('livewire.frontends.penelitian.index', [
            'penelitian' => Penelitian::where('pengusul_id', '=', Auth::id())->where(
                function($query)use($searchTerm){
                    $query->orWhere('judul', 'LIKE', $searchTerm)
                          ->orWhere('biaya', 'LIKE', $searchTerm)
                          ->orWhere('status_usulan', 'LIKE', $searchTerm)
                          ->orWhere('file_cv', 'LIKE', $searchTerm)
                          ->orWhere('file_proposal', 'LIKE', $searchTerm)
                          ->orWhere('file_pengesahan', 'LIKE', $searchTerm);
                })->paginate(5)
        ]);
    }

    public function destroy(Penelitian $penelitian)
    {
        $this->penelitian = $penelitian;
        $this->penelitian->delete();
    }
}
