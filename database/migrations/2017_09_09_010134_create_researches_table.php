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
        Schema::create('Researches', function (Blueprint $table) {
            $table->increments('researchID')->unique();
            $table->string('ownerID');
            $table->string('topic');
            $table->text('summary');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->text('location');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->integer('zipCode');
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
        Schema::dropIfExists('Researches');
    }
}
