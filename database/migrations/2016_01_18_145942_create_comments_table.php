<?php

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
        Schema::create('comments', function(Blueprint $table){

            $table->increments('id');
            $table->integer('user_id');
            $table->integer('post_id');
            $table->integer('parent_id')->nullable();
            $table->string('body');
            $table->integer('vote_up')->default(0);
            $table->integer('vote_dwn')->default(0);
            $table->timestamps();
            $table->timestamp('published_at');
            $table->timestamp('deleted_at')->nullable();
            $table->boolean('deleted')->nullable();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('post_id')
                ->references('id')
                ->on('posts');

            $table->foreign('parent_id')
                ->references('id')
                ->on('comments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }
}
