<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userprofiles', function (Blueprint $table) {
            $table->increments('profileID');
            $table->string('userName', 32);
            $table->string('fName');
            $table->string('lName');
            $table->text('profileSummary');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->binary('profileImg');
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
        Schema::dropIfExists('userprofiles');
    }
}
