<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikeJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_jawaban', function (Blueprint $table) {
            $table->unsignedBigInteger('jawaban_id');
            $table->unsignedBigInteger('profiles_id');
            $table->primary(['jawaban_id', 'profiles_id']);

            $table->foreign('jawaban_id')->references('id')->on('jawaban');
            $table->foreign('profiles_id')->references('id')->on('profiles');
            $table->integer('poin');
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
        Schema::dropIfExists('like_dislike_jawaban');
    }
}