<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ata extends Model
{
    public $timestamps = false;
    protected $table = 'atas';
    protected $fillable = ['chapter', 'section', 'title', 'description'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
