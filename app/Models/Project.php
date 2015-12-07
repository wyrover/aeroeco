<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /*public $timestamps = false;*/
    protected $table = 'projects';
    protected $fillable = ['project_types_id', 'location_id', 'creator_id', 'company_id', 'sales_id', 'project_start_date', 'asset_arrival_date', 'projected_completion_date', 'completion_date'];
    protected $dates = ['project_start_date', 'asset_arrival_date', 'projected_completion_date', 'completion_date'];
    /*protected $hidden = ['created_at', 'updated_at'];*/

    /* CASTING */
    protected $casts = [];
    /* CASTING */
    
    /* RELATIONSHIPS */
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
    /* RELATIONSHIPS */
    
    /* METHODS */
    /* METHODS */
}