<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        "isActive",
        'room_id'
    ];

    public function room()
    {
        return $this->hasMany(Room::class);
    }
}
