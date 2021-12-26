<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExhExhibitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exh_exhibitors', function (Blueprint $table) {
            $table->id();
            $table->string('register_code')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('person1');
            $table->string('person2');
            $table->string('vehicle');
            $table->string('phone');
            $table->longText('address');
            $table->string('photo');
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
        Schema::dropIfExists('exh_exhibitors');
    }
}
