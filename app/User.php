<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    protected $table = 'users';
    protected $fillable = ['firstname','lastname', 'email', 'password', 'company_id', 'all_companies', 'is_admin', 'can_sell', 'role_id', 'tier', 'location_id'];
    protected $hidden = ['password', 'remember_token'];

    /* CASTING */
    protected $casts = [
        'is_admin' => 'boolean',
        'can_sell' => 'boolean',
        'all_companies' => 'boolean'
    ];
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
