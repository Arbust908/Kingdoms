<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nobles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->char('name');
            $table->text('title');
            $table->text('sobriquet');
            $table->unsignedInteger('nobleHouse_id');
            $table->unsignedSmallInteger('prestige');
            $table->unsignedSmallInteger('birthYear');
            $table->boolean('isFemale');

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
        Schema::dropIfExists('nobles');
    }
}
