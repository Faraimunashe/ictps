<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'milestone_id',
        'name',
        'description',
        'status',
        'start_date',
        'end_date',
        'actual_end_date',
        'progress'
    ];

    public function milestone()
    {
        return $this->belongsTo(Milestone::class);
    }
}
