<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama', 'fakultas_id', 'kode', 'kode_dikti', 'akreditasi'
    ]; 
}
