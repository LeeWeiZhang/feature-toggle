<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFeatureToggle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_feature_toggle', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('feature');
            $table->tinyInteger('toggle');
            $table->timestamps();

            $table->unique('email','features');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_feature_toggle');
    }
}
