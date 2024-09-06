<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourType extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'tour_id',
        'type_id',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
