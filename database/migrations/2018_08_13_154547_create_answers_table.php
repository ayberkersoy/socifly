<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('answer');
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->integer('user_id')->default(0);
            $table->integer('forum_id')->default(0);
            $table->integer('sub_forum_id')->default(0);
            $table->integer('topic_id')->default(0);
            $table->integer('topic_reply_id')->default(0);
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
        Schema::dropIfExists('answers');
    }
}
