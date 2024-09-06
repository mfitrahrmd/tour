<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'address',
        'price',
    ];

    public function bookings()
    {
        return $this->belongsToMany(Booking::class);
    }
}
