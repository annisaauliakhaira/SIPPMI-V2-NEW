<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkemaPenelitian extends Model
{
    use HasFactory;

    protected $table = 'skema_penelitians';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'nama', 'fakultas_id', 'jangka_waktu', 'biaya_minimal', 'biaya_maksimal',	'sumber_dana', 'anggota_min',	'anggota_max', 'mahasiswa_min',	'mahasiswa_max', 'jabatan_ketua_min', 'jabatan_ketua_max', 'jabatan_anggota_min','jabatan_anggota_max'
    ];

    public function fakultas() 
    {
        return $this->hasOne(Fakultas::class, 'id', 'fakultas_id');
    }

    public function skema_penelitian_periode()
    {
        return $this->belongsTo(SkemaPenelitianPeriode::class,'id','skema_penelitian_id');
    }

    public function skema_penelitian_question()
    {
        return $this->belongsTo(SkemaPenelitianQuestion::class,'id','skema_penelitian_id');
    }

}
