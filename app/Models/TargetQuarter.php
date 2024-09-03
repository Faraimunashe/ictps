<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetQuarter extends Model
{
    use HasFactory;

    public function quarter()
    {
        return $this->belongsTo(Quarter::class);
    }

    public function target()
    {
        return $this->belongsTo(Target::class);
    }
}
