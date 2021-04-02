<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewers extends Model
{
    use HasFactory; 

    protected $table = 'reviewers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'status'
    ];

    public function dosen()
    {
        return $this->hasone(dosen::class, 'id', 'id');
    }
}
