<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrgProfiles', function (Blueprint $table) {
            $table->string('orgID')->unique();
            $table->string('motto');
            $table->string('vision');
            $table->string('details');
            $table->string('industry');
            $table->string('location');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->integer('zipCode');
            $table->string('webAddress');
            $table->binary('logo');
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
        Schema::dropIfExists('OrgProfiles');
    }
}
