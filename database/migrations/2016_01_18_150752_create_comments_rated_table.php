<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsRatedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments_rated', function(Blueprint $table){

            $table->integer('user_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->integer('comment_id')->unsigned();
            $table->boolean('vote');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments_rated');
    }
}
