<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['hotel_id', 'price', 'sea_view', 'room_number', 'floor', 'capacity'];
    protected $with = ['hotel'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
