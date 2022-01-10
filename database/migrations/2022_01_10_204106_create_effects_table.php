<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEffectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('effects', function (Blueprint $table) {
            $table->id();
            $table->string('register_code')->unique();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('team');
            $table->string('collage');
            $table->string('proposal');
            $table->string('payment');
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
        Schema::dropIfExists('effects');
    }
}
