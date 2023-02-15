<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Humidity extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_id',
        'percentage',
        'interval',
    ];

    public function locations()
    {
        return $this->belongsTo(Location::class);
    }
}
