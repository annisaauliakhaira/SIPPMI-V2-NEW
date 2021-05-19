<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisOutput extends Model
{
    use HasFactory;

    protected $table = 'jenis_outputs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'code', 'luaran'
    ]; 
}
