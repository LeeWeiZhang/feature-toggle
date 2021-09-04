<?php

namespace App\Services;

use App\Models\FeatureToggle;
use App\Models\UserFeatureToggle;

class FeatureAccessService
{
    public function canAccess(string $email, string $featureName):bool
    {
        $record = UserFeatureToggle::where([
            'email' => $email,
            'feature' => $featureName
        ])->first();

        if ($record) {
            return $record->toggle;
        }

        $feature = FeatureToggle::where('name', $featureName)->first();
        if ($feature) {
            return $feature->default_toggle;
        }

        return false;
    }

    public function updateAccess(string $email, string $featureName, bool $access):bool
    {
        return UserFeatureToggle::where([
            'email' => $email,
            'feature' => $featureName
        ])->update([
            'toggle' => $access
        ]);
    }
}
