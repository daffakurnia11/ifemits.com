<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExhGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exh_guests', function (Blueprint $table) {
            $table->id();
            $table->string('register_code')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('ticket')->default(1);
            $table->string('phone');
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
        Schema::dropIfExists('exh_guests');
    }
}
