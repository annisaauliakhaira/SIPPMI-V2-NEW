<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $table = "fakultas";
    protected $fillable = ['nama'];

    const validation_rules = [
        'name' => 'required'
    ];

    protected $guarded = [];

    public function departments()
    {
        return $this->hasMany(Department::class,'fakultas_id','id');
    }
}
