<?php

namespace App\Http\Livewire\Backends\Dosen;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\Dosen;
use App\Models\User;
use App\Models\Fakultas;
use App\Models\Prodi;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $id_dosen;
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
    public $photo_user;
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
        'photo_user' => 'image|max:2048',
    ];

    protected $messages = [
        "required"  => ":attribute wajib diisi",
        "email"     => ":attribute harus dalam format yang benar",
        "image"     => ":attribute harus berupa gambar",
        "max"       => "ukuran file melebihi batas"
    ];

    public function mount(Dosen $dosen)
    {
        if($dosen)
        {
            $this->fakultas = Fakultas::all();
            $this->prodi = Prodi::all();
            $this->id_dosen = $dosen->id;
            $this->prodi_id = $dosen->prodi_id;
            $this->selectedFakultas = $dosen->prodi->faculty->id;
            $this->nama = $dosen->nama;
            $this->gelar_depan = $dosen->gelar_depan;
            $this->gelar_belakang = $dosen->gelar_belakang;
            $this->nidn = $dosen->nidn;
            $this->tempat_lahir = $dosen->tempat_lahir;
            $this->tanggal_lahir = $dosen->tanggal_lahir;
            $this->jabatan_fungsional = $dosen->jabatan_fungsional;
            $this->status = $dosen->status;
            $this->email = $dosen->email;
            $this->jenis_kelamin = $dosen->jenis_kelamin;
            $this->pangkat_golongan = $dosen->pangkat_golongan;
            $this->telepon = $dosen->telepon;
            $this->photo = $dosen->user->avatar;
        }
    }

    public function updatedSelectedFakultas($fakultas)
    {
        if(!is_null($fakultas))
        {
            $this->prodi = Prodi::where('fakultas_id',$fakultas)->get();
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function deletePreview()
    {
        if($this->photo)
        {
            $this->photo = null;
        }
        else
        {
            $this->photo_user = null;
        }
    }

    public function render()
    {
        return view('livewire.backends.dosen.edit');
    }

    public function update()
    {
        if($this->photo_user)
        {
            Storage::disk('public')->delete('foto-dosen/'.$this->photo_user);

            $nama_foto = $this->nidn."-avatar.".$this->photo_user->extension();
            $this->photo_user->storeAs('foto-dosen',$nama_foto,'public');

            $update_user = User::where('id',$this->id_dosen)->update([
                'avatar'    => $nama_foto,
            ]);
        }

        $update_dosen = Dosen::where('id',$this->id_dosen)->update([
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

        session()->flash('success','Data dosen berhasil diupdate');

        return redirect()->route('backend.dosen.index');
    }
}
