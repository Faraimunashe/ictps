<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mda extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'department_id',
        'title',
        'firstnames',
        'surname'
    ];

    public function targets()
    {
        return $this->hasMany(Target::class);
    }
}
