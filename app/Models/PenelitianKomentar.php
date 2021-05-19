<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenelitianKomentar extends Model
{
    use HasFactory;

    protected $table = 'penelitian_komentars';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'penelitian_id', 'komentar', 'status'
    ]; 

    public function penelitian()
    {
        return $this->hasOne(Penelitian::class, 'id', 'penelitian_id');
    }
}
