<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'end_date'
    ];

    public function targets()
    {
        return $this->hasMany(Target::class);
    }

    public function target_quarters()
    {
        return $this->hasMany(TargetQuarter::class);
    }
}
