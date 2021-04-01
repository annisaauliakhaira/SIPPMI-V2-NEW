<?php

namespace App\Http\Livewire\Backends\Penelitian;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use App\Models\Penelitian;

class Create extends Component
{
    public $step;

    private $stepActions = [
        'submit1', 'submit2', 'submit3'
    ];

    public function mount()
    {
        $this->step == 0;
        
    }

    public function increaseStep()
    {
        $this->step++;
    }

    public function decreaseStep()
    {
        $this->step--;
    }

    public function render()
    {
        if (!Gate::allows('penelitian_manage')) {
             return abort(401);
        }
        $penelitians = Penelitian::all();
        return view('livewire.backends.penelitian.create', compact('penelitians'));
    }

    public function store()
    {
        
    }

    // public function submit(Penelitian $penelitian)
    // {
    //     if ($penelitian->owner == auth()->user()->id) {
    //         $usulan = $penelitian;
    //         $usulan->save();

    //         return redirect()->route('backend.penelitians.show', [$penelitian->id]);
    //     }
    //     return back();
    // }

    public function submit()
    {
        $action = $this->stepActions[$this->step];
        $this->$action;
    }

    public function submit1()
    {
        $this->step++;
    }

    public function submit2()
    {
        $this->step++;
    }

    public function submit3()
    {
        $this->step++;
    }

}
