<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = ['company', 'dba', 'domain', 'tier'];
    protected $hidden = ['created_at', 'updated_at'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    public function addresses()
    {
        return $this->hasMany('App\Models\Address');
    }
    public function phones()
    {
        return $this->hasMany('App\Models\Phone');
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}