<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeatureToggle extends Model
{
    protected $table = 'feature_toggle';

    protected $fillable = ['name', 'default_toggle'];

    protected $casts = [
        'default_toggle' => 'boolean',
    ];
}
