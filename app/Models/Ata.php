<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ata extends Model
{
    public $timestamps = false;
    protected $table = 'atas';
    protected $fillable = ['chapter', 'title', 'active'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
