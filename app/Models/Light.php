<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Light extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_id',
        'manual_override',
        'day_start',
        'day_end',
        'interval',
    ];

    public function locations()
    {
        return $this->belongsTo(Location::class);
    }
}
