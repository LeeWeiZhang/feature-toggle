<?php

namespace Database\Seeders;

use App\Models\UserFeatureToggle;
use Illuminate\Database\Seeder;

class UserFeatureToggleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserFeatureToggle::updateOrCreate([
            'email' => 'example@example.test',
            'feature' => 'example-feature'
        ], [
            'toggle' => 0
        ]);

    }
}
