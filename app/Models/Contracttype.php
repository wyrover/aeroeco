<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contracttype extends Model
{
    public $timestamps = false;
    protected $table = 'contract_types';
    protected $fillable = ['type', 'abr'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}