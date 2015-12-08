<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';
    protected $fillable = ['type_id', 'recipient_id', 'message', 'status'];
    protected $hidden = ['created_at', 'updated_at'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    public function type()
    {
        return $this->belongsTo('App\Models\Notificationtype');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
