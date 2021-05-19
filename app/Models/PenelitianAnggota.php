<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenelitianAnggota extends Model
{
    use HasFactory;
    
    protected $table = 'penelitian_anggotas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'tipe', 'dosen_id', 'penelitian_id', 'nama', 'identifier', 'unit', 'jabatan'
    ]; 

    public function dosen()
    {
        return $this->hasOne(Dosen::class, 'id', 'dosen_id');
    }

    public function penelitian()
    {
        return $this->hasOne(Penelitian::class, 'id', 'penelitian_id');
    }
}
