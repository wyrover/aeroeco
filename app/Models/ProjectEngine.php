<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectEngine extends Model
{
    protected $table = 'project_engines';
    protected $fillable = ['project_id', 'position', 'engine_type_variant', 'engine_msn', 'path_engine_trace', 'stand_provider', 'MPA', 'boroscope', 'storage_program'];
    /*protected $hidden = ['created_at', 'updated_at'];*/

    /* CASTING */
    protected $casts = [
        'MPA' => 'boolean',
        'boroscope' => 'boolean',
        'storage_program' => 'boolean'
    ];
    /* CASTING */
    
    /* RELATIONSHIPS */
    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
    /* RELATIONSHIPS */
    
    /* METHODS */
    /* METHODS */
}
