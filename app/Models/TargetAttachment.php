<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'target_id', 'files', 'progress'
    ];

    protected $casts = [
        'files' => 'array',
    ];

    public function target()
    {
        return $this->belongsTo(Target::class);
    }
}
