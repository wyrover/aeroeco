<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /*public $timestamps = false;*/
    protected $table = 'teams';
    protected $fillable = ['disassemblers_id', 'teamleader_id', 'team_name'];
    /*protected $hidden = ['created_at', 'updated_at'];*/

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    public function leader()
    {
        return $this->hasOne('App\User', 'id', 'teamleader_id');
    }
    public function members()
    {
        return $this->hasMany('App\Models\Tech', 'team_id', 'id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}