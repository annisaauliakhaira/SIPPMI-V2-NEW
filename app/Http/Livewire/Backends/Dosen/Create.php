<?php

namespace App\Http\Livewire\Backends\Dosen;

use Livewire\Component;
use App\Models\Dosen;
use App\Models\Fakultas;
use App\Models\Prodi;
use App\Models\User;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $prodi;
    public $fakultas;
    public $nama;
    public $gelar_depan;
    public $gelar_belakang;
    public $nidn;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $prodi_id;
    public $jabatan_fungsional;
    public $status;
    public $email;
    public $jenis_kelamin;
    public $pangkat_golongan;
    public $telepon;
    public $photo;

    public $selectedFakultas = null;

    protected $rules = [
        "nama"  => "required",
        "gelar_depan"  => "required",
        "gelar_belakang"  => "required",
        "nidn"  => "required",
        "tempat_lahir"  => "required",
        "tanggal_lahir"  => "required",
        "prodi_id"  => "required",
        "jabatan_fungsional"  => "required",
        "status"  => "required",
        "email"  => "required|email",
        "jenis_kelamin"  => "required",
        "pangkat_golongan"  => "required",
        "telepon"  => "required",
        'photo' => 'image|max:2048',
    ];

    protected $messages = [
        "required"  => ":attribute wajib diisi",
        "email"     => ":attribute harus dalam format yang benar",
        "image"     => ":attribute harus berupa gambar",
        "max"       => "ukuran file melebihi batas"
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatedSelectedFakultas($fakultas)
    {
        if(!is_null($fakultas))
        {
            $this->prodi = Prodi::where('fakultas_id',$fakultas)->get();
        }
    }

    public function mount()
    {
        $this->fakultas = Fakultas::all();
        $this->prodi = collect();
    }

    public function render()
    {
        return view('livewire.backends.dosen.create');
    }

    public function deletePreview()
    {
        $this->photo = null;
    }

    public function store()
    {
        $validate = $this->validate();

        $nama_foto = $this->nidn."-avatar.".$this->photo->extension();

        $store_user = User::create([
            "username"  => $this->nidn,
            "name"  => $this->nama,
            "email"  => $this->email,
            "password"  => bcrypt($this->nidn),
            "type"  => "2",
            "active"    => "1",
            "avatar"    => $nama_foto,
        ]);

        $this->photo->storeAs('foto-dosen',$nama_foto,'public');

        $store_dosen = Dosen::create([
            "id"    => $store_user->id,
            "nama"  => $this->nama,
            "gelar_depan"  => $this->gelar_depan,
            "gelar_belakang"  => $this->gelar_belakang,
            "nidn"  => $this->nidn,
            "tempat_lahir"  => $this->tempat_lahir,
            "tanggal_lahir"  => $this->tanggal_lahir,
            "prodi_id"  => $this->prodi_id,
            "jabatan_fungsional"  => $this->jabatan_fungsional,
            "status"  => $this->status,
            "email"  => $this->email,
            "jenis_kelamin"  => $this->jenis_kelamin,
            "pangkat_golongan"  => $this->pangkat_golongan,
            "telepon"  => $this->telepon,
        ]);

        $store_user->assignRole('dosen');

        session()->flash("success","Data dosen berhasil ditambahkan");
        return redirect()->route("backend.dosen.index");
    }
}
