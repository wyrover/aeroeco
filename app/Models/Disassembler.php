<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disassembler extends Model
{
    protected $table = 'disassemblers';
    protected $fillable = ['name', 'address', 'address2', 'city', 'state', 'postal_code', 'contact', 'phone', 'email', 'country_id'];
    protected $hidden = ['created_at', 'updated_at'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    public function country()
    {
        return $this->hasOne('App\Models\Country', 'id', 'country_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
