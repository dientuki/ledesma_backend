<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompany2teamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company2team', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('fk_company')->unsigned();
            $table->foreign('fk_company')->references('id')->on('business');

            $table->integer('fk_team')->unsigned();
            $table->foreign('fk_team')->references('id')->on('teams');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company2team');
    }
}
