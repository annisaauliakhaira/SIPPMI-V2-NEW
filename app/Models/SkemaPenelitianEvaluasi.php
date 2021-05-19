<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkemaPenelitianEvaluasi extends Model
{
    use HasFactory;

    protected $table = 'skema_penelitian_evaluasis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'skema_penelitian_id', 'nama', 'jumlah_reviewer'
    ]; 

    public function skema_penelitian()
    {
        return $this->hasOne(SkemaPenelitian::class, 'id', 'skema_penelitian_id');
    }
}
