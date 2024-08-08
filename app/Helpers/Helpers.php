<?php
use App\Models\Quarter;
use Carbon\Carbon;

function get_current_quarter()
{
    $current_date = Carbon::now();

    $current_quarter = Quarter::where('start_date', '<=', $current_date)
        ->where('end_date', '>=', $current_date)
        ->first();

    return $current_quarter;
}
