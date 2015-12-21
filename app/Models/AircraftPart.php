<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AircraftPart extends Model
{
    public $timestamps = false;
    protected $table = 'aircraft_part';
    protected $fillable = ['aircraft_id', 'part_listing_id', 'quantity'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    public function aircraft()
    {
        return $this->belongsTo('App\Models\Aircraft');
    }
    public function parts()
    {
        return $this->hasMany('App\Models\PartsListing', 'id', 'part_listing_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}