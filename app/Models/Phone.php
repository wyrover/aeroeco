<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    /*public $timestamps = false;*/
    protected $table = 'phones';
    protected $fillable = ['user_id', 'company_id', 'phone', 'type'];
    protected $hidden = ['created_at', 'updated_at'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */
    
    /* RELATIONSHIPS */
    /* RELATIONSHIPS */
    
    /* METHODS */
    /* METHODS */
}