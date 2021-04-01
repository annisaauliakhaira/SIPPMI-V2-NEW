<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class CommunityService extends Model
{
    use HasFactory;

    const VALIDATION_RULES = [
        'title' => 'required',
        'community_service_schema_id' => 'required',
        'partner' => 'required',
        'start_at' => 'required',
        'fund_amount' => 'required|integer',
        'proposal_file' => 'required',
        'report_file' => 'required'
    ];

    protected $guarded = [];

    public function schema()
    {
        return $this->belongsTo(CommunityServiceSchema::class, 'community_service_schema_id');
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'community_service_members')
            ->withPivot('id', 'position');
    }
}
