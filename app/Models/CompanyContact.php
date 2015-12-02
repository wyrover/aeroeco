<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyContact extends Model
{
    /*public $timestamps = false;*/
    protected $table = 'company_contacts';
    protected $fillable = ['company_id', 'contact_type_id', 'name', 'title', 'phone', 'fax'];
    protected $hidden = ['created_at', 'updated_at'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}