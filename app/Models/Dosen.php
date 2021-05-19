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

    const ACTIVE = 1;
    const PENSION = 2;
    const ON_DUTY = 3;
    const INACTIVE = 4;

    const STATUS_SELECT = [
        self::ACTIVE => 'Aktif',
        self::PENSION => 'Pensiun',
        self::ON_DUTY => 'Tugas Belajar',
        self::INACTIVE => 'KELUAR'
    ];

    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class, 'id','id');
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }

    public function dosen_ketua()
    {
        return $this->hasMany(PenelitianAnggota::class, 'penelitian_id', 'id')
            ->where('jabatan', 1);
    }
}
