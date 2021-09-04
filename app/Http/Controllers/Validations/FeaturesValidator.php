<?php

namespace App\Http\Controllers\Validations;

use Illuminate\Http\Request;

trait FeaturesValidator
{
    protected function validateRequest(Request $request, array $rules = []): void
    {
        $generalRules = [
            'email' => 'required|email',
            'featureName' => 'required'
        ];
        parent::validate($request, array_merge($generalRules, $rules));
    }

}
