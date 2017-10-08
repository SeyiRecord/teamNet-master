<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orgprofiles', function (Blueprint $table) {
            $table->string('orgID')->unique();
            $table->string('userName', 32);
            $table->string('name');
            $table->string('motto')->nullable();
            $table->text('vision')->nullable();
            $table->text('details');
            $table->string('industry')->nullable();
            $table->text('location');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->integer('zipCode')->nullable();
            $table->string('webAddress');
            $table->binary('logo');
            $table->timestamps();
            $table->foreign('userName')->references('userName')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orgprofiles');
    }
}
