<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirPollution extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_id',
        'severity',
    ];


    public function locations()
    {
        return $this->belongsTo(Location::class);
    }
}
