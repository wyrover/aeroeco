<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsortiumGlobal extends Model
{
    public $timestamps = false;
    protected $table = 'consortium_globals';
    protected $fillable = ['name', 'abr', 'address', 'address2', 'phone', 'fax', 'corporation_type'];
    /*protected $hidden = ['created_at', 'updated_at'];*/

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
