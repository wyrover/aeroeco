<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = ['company', 'dba', 'corporation_type', 'country_id', 'main_phone', 'location_id', 'folder_name', 'domain', 'mail_domain', 'website', 'tier', 'admin_id'];
    protected $hidden = ['created_at', 'updated_at'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    public function addresses()
    {
        return $this->hasMany('App\Models\Address');
    }
    public function admin()
    {
        return $this->hasOne('App\User', 'id', 'admin_id');
    }
    public function contacts()
    {
        return $this->hasMany('App\Models\CompanyContact');
    }
    public function emails()
    {
        return $this->hasMany('App\Models\CompanyEmail');
    }
    public function locations()
    {
        return $this->hasMany('App\Models\Location');
    }
    public function messages()
    {
        return $this->hasMany('App\Models\CompanyMessages');
    }
    public function phones()
    {
        return $this->hasMany('App\Models\Phone');
    }
    public function roles()
    {
        return $this->hasMany('App\Models\Role');
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}