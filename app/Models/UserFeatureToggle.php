<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFeatureToggle extends Model
{
    protected $table = 'user_feature_toggle';

    protected $fillable = ['email', 'feature', 'toggle'];

    protected $casts = [
        'toggle' => 'boolean',
    ];
}
