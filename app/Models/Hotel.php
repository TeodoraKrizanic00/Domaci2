<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = ['place_id', 'name', 'address', 'stars', 'email', 'phone'];
    protected $with = ['place'];
    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
