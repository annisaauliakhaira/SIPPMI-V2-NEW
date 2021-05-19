<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenelitianBiaya extends Model
{
    use HasFactory;
    protected $table = 'penelitian_biayas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'penelitian_id', 'biaya_skema_id', 'jumlah', 'jumlah_final', 'satuan', 'harga_satuan_final', 'justifikasi', 'status'
    ]; 

    public function biaya_skema()
    {
        return $this->hasOne(BiayaSkema::class, 'id', 'biaya_skema_id');
    }

    public function penelitian()
    {
        return $this->hasOne(Penelitian::class, 'id', 'penelitian_id');
    }
}
