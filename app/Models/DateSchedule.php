<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateSchedule extends Model
{
    /** @use HasFactory<\Database\Factories\DateScheduleFactory> */
    use HasFactory;

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function getFormattedDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->date)->format('Y年m月d日');
    }
}
