<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaSkema extends Model
{
    use HasFactory;

    protected $table = 'biaya_skemas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'biaya_komponen_id', 'skema_penelitian_id', 'persen_max', 'persen_min'
    ]; 

    public function biaya_komponen()
    {
        return $this->hasOne(BiayaKomponen::class, 'id', 'biaya_komponen_id');
    }

    public function skema_penelitian()
    {
        return $this->hasOne(SkemaPenelitian::class, 'id', 'skema_penelitian_id');
    }

}
