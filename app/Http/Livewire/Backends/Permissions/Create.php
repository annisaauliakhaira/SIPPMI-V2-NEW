<?php

namespace App\Http\Livewire\Backends\Permissions;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\StorePermissionsRequest;

class Create extends Component
{
    public $name;
    public function render()
    {
        if (!Gate::allows('roles_manage')) {
            return abort(401);
        }
        return view('livewire.backends.permissions.create');
    }

    public function store() 
    {
        $this->validate([
            'name'=>'required']);
        try {
            if (Permission::create(['name'=>$this->name])) {
                notify('success', 'Data permission berhasil disimpan');
            } else {
                notify('error', 'Gagal menyimpan data permission');
            }
        } catch (\InvalidArgumentException $e) {
            notify('error', 'Terjadi kesalahan: '.$e->getMessage());
        }

        return redirect()->route('backend.permissions.index');
    }
}
