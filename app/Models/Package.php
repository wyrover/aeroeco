<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    protected $fillable = ['name', 'level', 'price'];
    /*protected $hidden = ['created_at', 'updated_at'];*/

    /* CASTING */
    protected $casts = [
        'level' => 'integer',
        'price' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}