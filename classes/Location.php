<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'latitude',
        'longitude',
    ];

    public function tours()
    {
        return $this->hasMany(Tour::class);
    }
}
