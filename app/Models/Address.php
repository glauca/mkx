<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    const DEFAULT_NO  = 'No';
    const DEFAULT_YES = 'Yes';

    protected $hidden = [
        'user_id',
        'province_id',
        'city_id',
        'district_id',
        'town_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function province()
    {
        return $this->belongsTo(Region::class)
            ->where('level', Region::LEVEL_PROVINCE)
            ->select(['id', 'name']);
    }

    public function city()
    {
        return $this->belongsTo(Region::class)
            ->where('level', Region::LEVEL_CITY)
            ->select(['id', 'name']);
    }

    public function district()
    {
        return $this->belongsTo(Region::class)
            ->where('level', Region::LEVEL_DISTRICT)
            ->select(['id', 'name']);
    }

    public function town()
    {
        return $this->belongsTo(Region::class)
            ->where('level', Region::LEVEL_TOWN)
            ->select(['id', 'name']);
    }
}
