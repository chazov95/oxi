<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    public function zoneType() {
        return $this->belongsTo(ZoneType::class);
    }

    public function rooms() {
        return $this->hasMany(Room::class);
    }
}
