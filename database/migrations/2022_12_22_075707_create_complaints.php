<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shopid');
            $table->foreign('shopid')->references('id')->on('shopkeeeper')->onDelete('cascade');
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')->references('id')->on('signup')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('vechicle');
            $table->string('desc');
            $table->string('satus');
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
        Schema::dropIfExists('complaints');
    }
}
