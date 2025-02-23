<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    /** @use HasFactory<\Database\Factories\SheetFactory> */
    use HasFactory;

    public function hall()  // 親テーブルが `events` の場合
    {
        return $this->belongsTo(Hall::class);
    }
}
