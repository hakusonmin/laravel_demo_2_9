<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /** @use HasFactory<\Database\Factories\MovieFactory> */
    use HasFactory;

    public function getFormattedPublishedDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->published_date)->format('Y年m月d日');
    }
}
