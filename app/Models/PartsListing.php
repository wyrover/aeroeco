<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartsListing extends Model
{
    public $timestamps = false;
    protected $table = 'parts_listings';
    protected $fillable = ['ATA', 'description', 'base_part_number', 'full_part_number','manufacturer', 'package_id'];

    /* CASTING */
    protected $casts = [];
    /* CASTING */

    /* RELATIONSHIPS */
    public function atas()
    {
        return $this->hasOne('App\Models\Ata', 'chapter', 'ATA');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}