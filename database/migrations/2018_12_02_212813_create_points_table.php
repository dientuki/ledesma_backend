<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('point');

            $table->integer('fk_game')->unsigned();
            $table->foreign('fk_game')->references('id')->on('games');

            $table->integer('fk_c2t')->unsigned();
            $table->foreign('fk_c2t')->references('id')->on('company2team');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('points');
    }
}
