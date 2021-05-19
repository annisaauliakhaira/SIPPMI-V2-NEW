<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PenelitianOutput extends Model
{
    use HasFactory;

    protected $table = 'penelitian_outputs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'penelitian_id', 'skema_penelitian_output_id', 'filename', 'tanggal_upload'
    ]; 

    public function penelitian()
    {
        return $this->hasOne(Penelitian::class, 'id', 'penelitian_id');
    }

    public function skema_penelitian_output()
    {
        return $this->hasOne(SkemaPenelitianOutput::class, 'id', 'skema_penelitian_output_id');
    }

    public function getFileNameUrlAttribute()
    {
        $patlink = rtrim(app()->basePath('public/storage'), '/');
        if($this->filename && is_dir($patlink) && Storage::disk('public')->exists($this->filename)){
            return url("/storage/".$this->filename);
        }
        return null;
    }
}
