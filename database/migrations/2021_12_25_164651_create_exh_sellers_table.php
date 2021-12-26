<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExhSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exh_sellers', function (Blueprint $table) {
            $table->id();
            $table->string('register_code')->unique();
            $table->string('name');
            $table->string('owner');
            $table->string('phone');
            $table->string('email')->unique();
            $table->enum('product', ['Makanan', 'Minuman'])->default('Makanan');
            $table->integer('amount');
            $table->string('menu');
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
        Schema::dropIfExists('exh_sellers');
    }
}
