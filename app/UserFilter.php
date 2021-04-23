<?php

/*
 * SPDX-FileCopyrightText: 2018 Daniel Supernault  
 * SPDX-License-Identifier: AGPL-3.0-only
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFilter extends Model
{
    protected $fillable = [
        'user_id',
        'filterable_id',
        'filterable_type',
        'filter_type',
    ];

    public function mutedUserIds($profile_id)
    {
    	return $this->whereUserId($profile_id)
    		->whereFilterableType('App\Profile')
    		->whereFilterType('mute')
    		->pluck('filterable_id');
    }

    public function blockedUserIds($profile_id)
    {
    	return $this->whereUserId($profile_id)
    		->whereFilterableType('App\Profile')
    		->whereFilterType('block')
    		->pluck('filterable_id');
    }

    public function instance()
    {
        return $this->belongsTo(Instance::class, 'filterable_id');
    }
}
