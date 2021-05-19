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
        'id', 'pengusul_id', 'prodi_id', 'status_usulan', 'judul', 'skema_penelitian_periode_id', 'ringkasan', 'biaya', 'biaya_final', 'multi_tahun', 'tahun', 'keterangan', 'file_cv', 'file_pengesahan', 'file_proposal', 'file_lap_progress', 'file_keuangan', 'file_akhir', 'file_profil', 'file_logbook'
    ]; 

    public const status_penelitian = [
        0 => "DRAFT",
        1 => "SUBMITTED",
        2 => "REVIEWING",
        3 => "ACCEPTED",
        4 => "REJECTED",
        5 => "PENDING"
    ];

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($model) {
            if($model->file_cv){
                Storage::disk('public')->delete($model->file_cv);
            }
            if($model->file_proposal){
                Storage::disk('public')->delete($model->file_proposal);
            }
            if($model->file_pengesahan){
                Storage::disk('public')->delete($model->file_pengesahan);
            }
            if($model->file_keuangan){
                Storage::disk('public')->delete($model->file_keuangan);
            }
        });
    }

    public function pengusul()
    {
        return $this->hasOne(Dosen::class, 'id', 'pengusul_id');
    }

    public function prodi()
    {
        return $this->hasOne(Prodi::class, 'id', 'prodi_id');
    }

    public function penelitian_biaya()
    {
        return $this->hasMany(PenelitianBiaya::class, 'penelitian_id', 'id');
    }

    public function penelitian_anggota()
    {
        return $this->hasMany(PenelitianAnggota::class, 'penelitian_id', 'id');
    }

    public function skema_penelitian_periode()
    {
        return $this->hasOne(SkemaPenelitianPeriode::class, 'id', 'skema_penelitian_periode_id');
    }

    public function ketua()
    {
        return $this->hasMany(PenelitianAnggota::class, 'penelitian_id', 'id')
            ->join('dosens', 'penelitian_anggotas.dosen_id', '=', 'dosens.id')->where('jabatan', '=', 'Ketua');
    }

    public function getStatusTextAttribute($value) 
    {
        $status = 'DRAFT';
        switch($this->status_usulan){
            case 0 :
                $status = "DRAFT";
                break;
            case 1 :
                $status = 'SUBMITTED';
                break;
            case 2:
                $status = 'REVIEWING';
                break;
            case 3:
                $status = 'ACCEPTED';
                break;
            case 4:
                $status = 'REJECTED';
                break;
            case 5:
                $status = 'PENDING';
                break;
            default:
                $status = 'UNKNOWN';
        }
        return $status;
    }

    public function getStatusTextColorAttribute($value){
        $status = 'secondary';
        switch($this->status_usulan){
            case 0 :
                $status = "secondary";
                break;
            case 1 :
                $status = 'success';
                break;
            case 2:
                $status = 'warning';
                break;
            case 3:
                $status = 'primary';
                break;
            case 4:
                $status = 'danger';
                break;
            default:
                $status = 'secondary';
        }
        return $status;
    }
    

    public function getFileCvUrlAttribute()
    {
        $patlink = rtrim(app()->basePath('public/storage'), '/');
        if($this->file_cv && is_dir($patlink) && Storage::disk('public')->exists($this->file_cv)){
            return url("/storage/".$this->file_cv);
        }
        return null;
    }
    
    public function getFilePengesahanUrlAttribute()
    {
        $patlink = rtrim(app()->basePath('public/storage'), '/');
        if($this->file_pengesahan && is_dir($patlink) && Storage::disk('public')->exists($this->file_pengesahan)){
            return url("/storage/".$this->file_pengesahan);
        }
        return null;
    }

    public function getFileKeuanganUrlAttribute()
    {
        $patlink = rtrim(app()->basePath('public/storage'), '/');
        if($this->file_keuangan && is_dir($patlink) && Storage::disk('public')->exists($this->file_keuangan)){
            return url("/storage/".$this->file_keuangan);
        }
        return null;
    }

    public function getFileProposalUrlAttribute()
    {
        $patlink = rtrim(app()->basePath('public/storage'), '/');
        if($this->file_proposal && is_dir($patlink) && Storage::disk('public')->exists($this->file_proposal)){
            return url("/storage/".$this->file_proposal);
        }
        return null;
    }
}
