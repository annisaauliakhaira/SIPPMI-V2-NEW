<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkemaPenelitianOutput extends Model
{
    use HasFactory;

    protected $table = 'skema_penelitian_outputs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'jenis_output_id', 'skema_penelitian_id', 'field', 'mime', 'required'
    ]; 

    public function jenis_output()
    {
        return $this->hasOne(JenisOutput::class, 'id', 'jenis_output_id');
    }

    public function skema_penelitian()
    {
        return $this->hasOne(SkemaPenelitian::class, 'id', 'skema_penelitian_id');
    }

    public function penelitian_outputs()
    {
       return $this->hasMany(PenelitianOutput::class, 'skema_penelitian_output_id', 'id');
    }
}
