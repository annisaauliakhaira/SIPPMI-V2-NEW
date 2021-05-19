<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    const validation_rules = [
        'name' => 'required',
        'faculty_id' => 'required',
    ];

    protected $table = 'prodis';

    protected $fillable = ['nama','fakultas_id','kode','kode_dikti','akreditasi'];

    protected $guarded = [];

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class,'fakultas_id','id');
    }
}
