<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectPart extends Model
{
    protected $table = 'project_parts';
    protected $fillable = ['project_id', 'ATA', 'in_project', 'part_listing_id', 'package_id', 'condition_id', 'msn', 'can_sell'];
    protected $hidden = ['created_at', 'updated_at'];

    /* CASTING */
    protected $casts = [
        'in_project' => 'boolean'
    ];
    /* CASTING */

    /* RELATIONSHIPS */
    public function condition()
    {
        return $this->hasOne('App\Models\Condition', 'id', 'condition_id');
    }
    public function part()
    {
        return $this->hasOne('App\Models\PartsListing', 'id', 'part_listing_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}