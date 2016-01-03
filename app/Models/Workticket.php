<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workticket extends Model
{
    /*public $timestamps = false;*/
    protected $table = 'worktickets';
    protected $fillable = ['project_id', 'part_id', 'scopestatus_id', 'tech_id', 'time_spent'];
    /*protected $hidden = ['created_at', 'updated_at'];*/

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    public function part()
    {
        return $this->hasOne('App\Models\PartsListing', 'id', 'part_id');
    }
    public function project()
    {
        return $this->hasOne('App\Models\Project', 'id', 'project_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}