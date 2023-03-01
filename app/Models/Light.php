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
    ];

    public function locations()
    {
        return $this->belongsTo(Location::class);
    }
}
