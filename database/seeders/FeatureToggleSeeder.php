<?php

namespace Database\Seeders;

use App\Models\FeatureToggle;
use Illuminate\Database\Seeder;

class FeatureToggleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FeatureToggle::updateOrCreate([
            'name' => 'example-feature'
        ], [
            'default_toggle' => 1
        ]);
    }
}
