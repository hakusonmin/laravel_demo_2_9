<?php

namespace App\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSchedule extends Model
{
    /** @use HasFactory<\Database\Factories\TimeScheduleFactory> */
    use HasFactory;

    public function getFormattedStartTimeAttribute()
    {
        return Carbon::createFromFormat('H:i:s', $this->start_time)->format('G時i分');
    }

    public function getFormattedEndTimeAttribute()
    {
        return Carbon::createFromFormat('H:i:s', $this->end_time)->format('G時i分');
    }
}
