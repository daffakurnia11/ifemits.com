<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEffectTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('effect_teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('effect_id');
            $table->string('register_code');
            $table->string('name');
            $table->string('photo');
            $table->string('identity');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('effect_teams');
    }
}
