<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user', 32);
            $table->foreign('user')->references('userName')->on('users');
            $table->text('body');
            $table->integer('post_id')->unsigned()->nullable();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->integer('research_id')->unsigned()->nullable();
            $table->foreign('research_id')->references('id')->on('researches')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('userprofiles')->onDelete('cascade');
            $table->integer('org_id')->unsigned()->nullable();
            $table->foreign('org_id')->references('id')->on('orgprofiles')->onDelete('cascade');
            $table->boolean('approved');
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
        Schema::dropForeign('[post_id]');
        Schema::dropForeign('[research_id]');
        Schema::dropForeign('[user_id]');
        Schema::dropForeign('[org_id]');
        Schema::dropIfExists('comments');
    }
}
