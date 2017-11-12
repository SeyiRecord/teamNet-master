<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('researches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ownerID', 32);
            $table->foreign('ownerID')->references('userName')->on('users');
            $table->string('topic');
            $table->text('summary');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->text('organization');
            $table->text('location');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->integer('zipCode')->nullable();
            $table->string('researchpaper')->nullable();
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
        Schema::dropIfExists('researches');
    }
}
