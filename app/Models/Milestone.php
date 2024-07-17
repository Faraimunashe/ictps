<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;

    protected $fillable = [
        'target_id',
        'name',
        'description',
        'status',
        'start_date',
        'due_date'
    ];

    public function target()
    {
        return $this->belongsTo(Target::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
