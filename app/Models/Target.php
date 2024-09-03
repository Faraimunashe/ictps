<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;

    protected $fillable = [
        'quarter_id',
        'mda_id',
        'name',
        'description',
        'status',
        'start_date',
        'due_date'
    ];

    public function mda()
    {
        return $this->belongsTo(Mda::class);
    }

    public function milestones()
    {
        return $this->hasMany(Milestone::class);
    }

    public function progress()
    {
        return $this->hasOne(TargetProgress::class);
    }

    public function attachments()
    {
        return $this->hasMany(TargetAttachment::class);
    }

    public function quarter()
    {
        return $this->belongsTo(Quarter::class);
    }

    public function target_quarters()
    {
        return $this->hasMany(TargetQuarter::class);
    }
}
