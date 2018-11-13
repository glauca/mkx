<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    const LEVEL_PROVINCE = 1;
    const LEVEL_CITY     = 2;
    const LEVEL_DISTRICT = 3;
    const LEVEL_TOWN     = 4;

    public function parent()
    {
        return $this->belongsTo(Region::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Region::class, 'parent_id');
    }

    public function slibings()
    {
        return $this->hasMany(Region::class, 'parent_id', 'parent_id');
    }
}
