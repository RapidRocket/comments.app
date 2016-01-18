<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table){

            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('excerts');
            $table->string('body');
            $table->timestamps();
            $table->timestamp('published_at');
            $table->boolean('deleted')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
