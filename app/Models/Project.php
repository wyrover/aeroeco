<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['is_mocked', 'is_scoped', 'is_submitted', 'project_types_id', 'project_statuses_id', 'disassemblers_id', 'creator_id', 'company_id', 'directory_path', 'sales_id', 'project_start_date', 'project_submission_date', 'asset_arrival_date', 'projected_completion_date', 'completion_date'];
    protected $dates = ['project_start_date', 'project_submission_date', 'asset_arrival_date', 'projected_completion_date', 'completion_date'];
    /*protected $hidden = ['created_at', 'updated_at'];*/

    private function getAssetArrivalDateValue() {
        return date('m/d/Y', strtotime($this->attributes['asset_arrival_date']));
    }

    /* CASTING */
    protected $casts = [
        'is_mocked' => 'boolean',
        'is_scoped' => 'boolean',
        'is_submitted' => 'boolean'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function aircraft()
    {
        return $this->hasOne('App\Models\ProjectAircraft', 'project_id', 'id');
    }
    public function apu()
    {
        return $this->hasOne('App\Models\ProjectApu', 'project_id', 'id');
    }
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
    public function creator()
    {
        return $this->hasOne('App\User', 'id', 'creator_id');
    }
    public function disassembler()
    {
        return $this->hasOne('App\Models\Disassembler', 'id', 'disassemblers_id');
    }
    public function engines()
    {
        return $this->hasMany('App\Models\ProjectEngine', 'project_id', 'id');
    }
    public function project_type()
    {
        return $this->hasOne('App\Models\ProjectType', 'id', 'project_types_id');
    }
    public function parts()
    {
        return $this->hasMany('App\Models\ProjectPart');
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
    public function worktickets()
    {
        return $this->hasMany('App\Models\Workticket', 'id', 'project_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}