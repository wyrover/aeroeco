<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectAircraft extends Model
{
    /*public $timestamps = false;*/
    protected $table = 'project_aircrafts';
    protected $fillable = ['project_id', 'type_id', 'msn', 'tail', 'manufacturer', 'has_incident', 'owner', 'last_operator', 'country_id', 'model_year', 'flight_hours', 'cycles', 'apu_stands_provider', 'landing_gear_stands_provider', 'thrust_reverser_stands_provider', 'path_proof_ownership', 'path_denied_party', 'path_nis', 'path_trace', 'path_proof_insurance', 'path_amm', 'path_ipc', 'path_plane_image'];
    /*protected $hidden = ['created_at', 'updated_at'];*/

    /* CASTING */
    protected $casts = [
        'has_incident' => 'boolean'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
    public function type()
    {
        return $this->hasOne('App\Models\Aircraft', 'id', 'type_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}