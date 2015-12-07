<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contracttopic extends Model
{
    public $timestamps = false;
    protected $table = 'contract_topics';
    protected $fillable = ['contract_type_id', 'topic', 'slug', 'sort_order'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
