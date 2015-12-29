<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    protected $table = 'techs';
    protected $fillable = ['disassemblers_id', 'user_id'];
    protected $hidden = ['created_at', 'updated_at'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}