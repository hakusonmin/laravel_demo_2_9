<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /** @use HasFactory<\Database\Factories\TicketFactory> */
    use HasFactory;

    protected $fillable = [
        'is_reserved',
    ];

    public function timeSchedule()
    {
        return $this->belongsTo(TimeSchedule::class,);
    }

    public function sheet()
    {
        return $this->belongsTo(Sheet::class);
    }
}
