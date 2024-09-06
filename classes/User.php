<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'password_hash',
        'role',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
