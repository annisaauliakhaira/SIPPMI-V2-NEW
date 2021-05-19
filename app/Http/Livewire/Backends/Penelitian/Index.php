<?php

namespace App\Http\Livewire\Backends\Penelitian;

use Livewire\Component;
use App\Models\Penelitian;
use Illuminate\Support\Facades\Gate;
use Livewire\WithPagination;

class Index extends Component
{
    
    use WithPagination;
    public $searchTerm;
    public function render()
    {
        if (!Gate::allows('roles_access')) {
            return abort(401);
        }
        
        $searchTerm = '%'.$this->searchTerm .'%';
        return view('livewire.backends.penelitian.index', [
            'penelitian' => Penelitian::where(
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
