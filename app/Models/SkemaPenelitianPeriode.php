<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkemaPenelitianPeriode extends Model
{
    use HasFactory;

    protected $table = 'skema_penelitian_periodes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama', 'skema_penelitian_id', 'tanggal_mulai_registrasi', 'tanggal_akhir_registrasi', 'tanggal_mulai_penelitian', 'tanggal_akhir_penelitian'
    ];

    
    public function skema_penelitian()
    {
        return $this->hasOne(SkemaPenelitian::class, 'id', 'skema_penelitian_id');
    }
}
