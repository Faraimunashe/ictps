<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;

    protected $fillable = [
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
}
