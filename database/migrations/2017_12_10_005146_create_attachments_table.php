<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('owner', 32)->nullable();
            $table->foreign('owner')->references('userName')->on('users')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('userprofiles')->onDelete('cascade');
            $table->integer('org_id')->unsigned()->nullable();
            $table->foreign('org_id')->references('id')->on('orgprofiles')->onDelete('cascade');
            $table->integer('research_id')->unsigned()->nullable();
            $table->foreign('research_id')->references('id')->on('researches')->onDelete('cascade');
            $table->integer('post_id')->unsigned()->nullable();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return vo_id
     */
    public function down()
    {
        Schema::dropForeign('[owner]');
        Schema::dropForeign('[research_id]');
        Schema::dropForeign('[userprofile_id]');
        Schema::dropForeign('[orgprofile_id]');
        Schema::dropForeign('[post_id]');
        Schema::dropIfExists('attachments');
    }
}
