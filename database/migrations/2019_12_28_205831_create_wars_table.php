<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wars', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('kingdom_id');
            $table->unsignedInteger('opponent_id');
            $table->unsignedSmallInteger('startYear');
            $table->unsignedSmallInteger('endYear');
            $table->char('name');

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
        Schema::dropIfExists('wars');
    }
}
