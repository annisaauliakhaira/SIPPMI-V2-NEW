<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkemaPenelitianQuestion extends Model
{
    use HasFactory;

    protected $table = 'skema_penelitian_questions';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'skema_penelitian_id', 'pertanyaan', 'bobot', 'tipe_pertanyaan'	
    ];

    
    public function skema_penelitian()
    {
        return $this->hasOne(SkemaPenelitian::class, 'id', 'skema_penelitian_id');
    }

}
