<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regents', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('noble_id');
            $table->unsignedInteger('nobleHouse_id');
            $table->unsignedSmallInteger('assumedYear');
            $table->unsignedSmallInteger('desendYear');

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
        Schema::dropIfExists('regents');
    }
}
