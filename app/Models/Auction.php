<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $table = 'auctions';
    protected $fillable = ['project_id', 'status_id', 'status_start'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    public function project()
    {
        return $this->hasMany('App\Models\Project', 'id', 'project_id');
    }
    public function status()
    {
        return $this->hasOne('App\Models\Status', 'id', 'status_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}