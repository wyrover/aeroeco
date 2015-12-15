<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['project_types_id', 'project_statuses_id', 'disassemblers_id', 'creator_id', 'company_id', 'directory_path', 'sales_id', 'project_start_date', 'asset_arrival_date', 'projected_completion_date', 'completion_date'];
    protected $dates = ['project_start_date', 'asset_arrival_date', 'projected_completion_date', 'completion_date'];
    /*protected $hidden = ['created_at', 'updated_at'];*/

    /* CASTING */
    protected $casts = [];
    /* CASTING */
    
    /* RELATIONSHIPS */
    public function aircraft()
    {
        return $this->hasOne('App\Models\ProjectAircraft', 'project_id', 'id');
    }
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
    public function creator()
    {
        return $this->hasOne('App\User', 'id', 'creator_id');
    }
    public function engines()
    {
        return $this->hasMany('App\Models\ProjectEngine', 'project_id', 'id');
    }
    public function project_type()
    {
        return $this->hasOne('App\Models\ProjectType', 'id', 'project_types_id');
    }
    public function sales()
    {
        return $this->hasOne('App\User', 'id', 'sales_id');
    }
    public function status()
    {
        return $this->hasOne('App\Models\ProjectStatus', 'id', 'project_statuses_id');
    }
    public function worksite()
    {
        return $this->hasOne('App\Models\Disassembler', 'id', 'disassemblers_id');
    }
    /* RELATIONSHIPS */
    
    /* METHODS */
    /* METHODS */
}