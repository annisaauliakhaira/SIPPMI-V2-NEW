<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosens';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'gelar_depan', 'nama', 'gelar_belakang', 'nidn', 'tempat_lahir', 'prodi_id', 'tanggal_lahir', 'jabatan_fungsional', 'status', 'jenis_kelamin', 'pangkat_golongan', 'telepon'
    ]; 

    public function user()
    {
        return $this->hasone(user::class, 'id', 'id');
    }
}
