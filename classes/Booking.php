<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'orders_name',
        'number_of_visitor',
        'booking_date',
        'duration',
        'user_id',
        'tour_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
