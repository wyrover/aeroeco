<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /*public $timestamps = false;*/
    protected $table = 'addresses';
    protected $fillable = ['company_id', 'country_id', 'type', 'address1', 'address2', 'city', 'state', 'postal_code'];
    protected $hidden = ['created_at', 'updated_at'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}