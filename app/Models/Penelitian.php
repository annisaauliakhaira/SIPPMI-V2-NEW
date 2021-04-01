<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Penelitian extends Model
{
    use HasFactory;

    protected $table = 'penelitians';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'pengusul_id', 'prodi_id', 'status_usulan', 'judul', 'skp_periode_id', 'ringakasan', 'biaya', 'biaya_final', 'multi_tahun', 'tahun', 'keterangan', 'file_cv', 'file_pegesahan', 'file_proposal', 'file_lap_progress', 'file_keuangan', 'file_akhir', 
        'file_profil', 'file_logbook'
    ]; 

    public function getFileProposalPath()
    {
        $folder = config('sippmi.path.proposal');
        $path = Storage::url($folder.'/'.$this->file_proposal);
        return $path;
    }

    public function getFilePengesahanPath()
    {
        $folder = config('sippmi.path.pengesahan');
        $path = Storage::url($folder.'/'.$this->file_pengesahan);
        return $path;
    }

    public function getFileCvPath()
    {
        $folder = config('sippmi.path.cv');
        $path = Storage::url($folder.'/'.$this->file_cv);
        return $path;
    }

    public function getFileProposalUrl()
    {
        $folder = config('sippmi.path.proposal');
        $path = Storage::url($folder.'/'.$this->file_proposal);
        return $path;
    }

    public function getFilePengesahanUrl()
    {
        $folder = config('sippmi.path.pengesahan');
        $path = Storage::url($folder.'/'.$this->file_pengesahan);
        return $path;
    }

    public function getFileCvUrl()
    {
        $folder = config('sippmi.path.cv');
        $path = Storage::url($folder.'/'.$this->file_cv);
        return $path;
    }
}
