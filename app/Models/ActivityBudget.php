<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityBudget extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_id',
        'description',
        'amount',
        'type'
    ];
}
