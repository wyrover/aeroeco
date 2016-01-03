<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bundle extends Model
{
    protected $table = 'bundles';
    protected $fillable = ['name', 'description', 'color', 'cost', 'value'];
    /*protected $hidden = ['created_at', 'updated_at'];*/

    /* CASTING */
    protected $casts = [
        'cost' => 'double',
        'value' => 'double'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function parts()
    {
        return $this->hasMany('App\Models\PartsListing');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}