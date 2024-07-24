<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetProgress extends Model
{
    use HasFactory;

    protected $fillable = [
        'target_id',
        'progress'
    ];

    public function target()
    {
        return $this->belongsTo(Target::class);
    }
}
