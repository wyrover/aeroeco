<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notificationtype extends Model
{
    public $timestamps = false;
    protected $table = 'notification_types';
    protected $fillable = ['type', 'icon'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}