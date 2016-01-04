<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    protected $table = 'techs';
    protected $fillable = ['disassemblers_id', 'team_id', 'firstname', 'lastname', 'phone', 'email', 'title', 'is_active'];
    protected $hidden = ['created_at', 'updated_at'];

    /* CASTING */
    protected $casts = [
        'is_active' => 'boolean'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function team()
    {
        return $this->hasOne('App\Models\Team', 'id', 'team_id');
    }
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}