<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkemaPenelitianPeriodeEvaluasi extends Model
{
    use HasFactory;

    protected $table = 'skema_penelitian_periode_evaluasis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'skema_penelitian_periode_id', 'skema_penelitian_evaluasi_id', 'tanggal_mulai', 'tanggal_akhir'	
    ];

    
    public function skema_penelitian_periode()
    {
        return $this->hasOne(SkemaPenelitianPeriode::class, 'id', 'skema_penelitian_periode_id');
    }

    public function skema_penelitian_evaluasi()
    {
        return $this->hasOne(SkemaPenelitianEvaluasi::class, 'id', 'skema_penelitian_evaluasi_id');
    }
}
