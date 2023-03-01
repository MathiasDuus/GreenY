<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstTimeSetup extends Model
{
    use HasFactory;


    protected $fillable = [
        'location_id',
        'sensor_type',
        'upper_limit',
        'lower_limit',
        'interval',
    ];


    public function locations()
    {
        return $this->belongsTo(Location::class);
    }
}
