<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopkeeeper extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopkeeeper', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('store');
            $table->string('address');
            $table->string('pin');
            $table->string('pwd');
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
        Schema::dropIfExists('shopkeeeper');
    }
}
