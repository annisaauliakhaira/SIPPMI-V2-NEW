<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaKomponen extends Model
{
    use HasFactory;

    protected $table = 'biaya_komponens';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'nama', 'keterangan'
    ]; 

}
