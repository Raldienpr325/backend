<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorNews1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_news1', function (Blueprint $table) {
            $table->bigInteger('authors1_id')->unsigned();
            $table->bigInteger('news1_id')->unsigned();
            $table->foreign('authors1_id')->references('id')->on('authors1')
            ->onDelete('cascade');
            $table->foreign('news1_id')->references('id')->on('news1')
            ->onDelete('cascade');
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
        Schema::dropIfExists('author_news1');
    }
}