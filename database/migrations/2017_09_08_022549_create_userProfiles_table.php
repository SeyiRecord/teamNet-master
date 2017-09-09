<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserProfiles', function (Blueprint $table) {
             $table->string('userID')->unique();
             $table->text('profileSummary');
             $table->text('address');
             $table->string('city');
             $table->string('state');
             $table->string('country');
             $table->integer('zipCode');
             $table->binary('profileImg');
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
        Schema::dropIfExists('UserProfiles');
    }
}
