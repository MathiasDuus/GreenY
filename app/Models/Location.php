<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function cities()
    {
        return $this->belongsTo(City::class);
    }

    public function temperatures()
    {
        return $this->hasMany(Temperature::class);
    }

    public function lights()
    {
        return $this->hasMany(Light::class);
    }

    public function humidities()
    {
        return $this->hasMany(Humidity::class);
    }

    public function air_pollutions()
    {
        return $this->hasMany(AirPollution::class);
    }
}
